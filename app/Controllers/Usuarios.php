<?php

class Usuarios extends Controller {

    public function __construct() {
        $this->usuarioModel = $this->model('Usuario');
        /*$this->postModel = $this->model('Post');
        $this->produtoModel = $this->model('Produto');*/
    }

    public function cadastrar() {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'cel' => trim($formulario['cel']),
                'msg' => trim($formulario['msg']),
                /*'sexo' => trim($formulario['sexo']),
                'senha' => trim($formulario['senha']),
                'confirmar_senha' => trim($formulario['confirmar_senha'])*/
            ];

            if(in_array('', $formulario)):

                if(empty($formulario['nome'])):
                    $dados['preencha_nome'] = 'Preencha o campo <b>Nome</b>';
                else:
                    $dados['preencha_nome'] = ''; 
                endif;

                if(empty($formulario['email'])):
                    $dados['preencha_email'] = 'Preencha o campo <b>E-mail</b>';
                else:
                    $dados['preencha_email'] = ''; 
                endif;

                if(empty($formulario['cel'])):
                    $dados['preencha_cel'] = 'Preencha o campo <b>Cel.</b>';
                else:
                    $dados['preencha_cel'] = ''; 
                endif;

                if(empty($formulario['msg'])):
                    $dados['preencha_msg'] = 'Preencha o campo <b>Msg.</b>';
                else:
                    $dados['preencha_msg'] = ''; 
                endif;

                /*if(empty($formulario['sexo'])):
                    $dados['preencha_sexo'] = 'Preencha o campo <b>Sexo</b>';
                else:
                    $dados['preencha_sexo'] = ''; 
                endif;*/

            else:
                if(Checa::checarNome($formulario['nome'])):
                    $dados['preencha_nome'] = 'O nome informado e invalido';

                elseif(Checa::checarEmail($formulario['email'])):
                    $dados['preencha_email'] = 'O email informado e invalido';

                elseif($this->usuarioModel->checarEmail($formulario['email'])):
                    $dados['preencha_email'] = 'O email informado ja se encontra cadastrado';
    
                else:
                    //e aqui que se insere os dados no banco de dados
                    //chama chama o contrutor Usuarios
                    //instancia a classe Usuario
                    //armazena do $dados dentro do metodo armazenar()
                    if($this->usuarioModel->armazenar($dados)):

                        ini_set('display_errors', 1);
                        error_reporting(E_ALL);
                        $from = $formulario['email'];
                        $to = "neri.kevin96@gmail.com";
                        $subject = $formulario['nome'];
                        $message = $formulario['msg'];
                        $headers = "From: " . $from;
                        mail($to,$subject,$message,$headers);

                        Sessao::mensagem('usuario', 'Cadastro realizado com sucesso');

                        /* ARMAZE OS DADOS DO USUARIO NO CACHE */
                        $_SESSION['usuario_nome'] = $formulario['nome'];

                        Url::redirecionar('paginas/home');
                    else:
                        die("Erro ao armazenar usuario no banco de dados");

                    endif;

                endif;
                
            endif;

            /*var_dump($formulario);*/
        else:
            $dados = [
                'nome' => '',
                'email' => '',
                'cel' => '',
                'msg' => '',
                /*'sexo' => '',
                'senha' => '',
                'confirmar_senha' => '',*/
                'preencha_nome' => '',
                'preencha_email' => '',
                'preencha_cel' => '',
                'preencha_msg' => '',
                /*'preencha_sexo' => '',
                'preencha_senha' => '',
                'preencha_confirmar_senha' => ''*/
            ];
            
        endif;

        $this->view('paginas/home', $dados);
    }

    /*public function login() {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        if(isset($formulario)):
            $dados = [
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha'])
            ];

            if(in_array('', $formulario)):

                if(empty($formulario['email'])):
                    $dados['preencha_email'] = 'Preencha o campo <b>E-mail</b>';
                else:
                    $dados['preencha_email'] = ''; 
                endif;

                if(empty($formulario['senha'])):
                    $dados['preencha_senha'] = 'Preencha o campo <b>Senha</b><br>A senha deve ter no minimo 6 caracteres';
                else:
                    $dados['preencha_senha'] = ''; 
                endif;

            else:
                if(Checa::checarEmail($formulario['email'])):
                    $dados['preencha_email'] = 'O email informado e invalido';

                elseif(strlen($formulario['senha']) < 6):
                    $dados['preencha_senha'] = 'A senha deve ter no minimo 6 caracteres';

                else:
                    $usuario = $this->usuarioModel->validarLogin($formulario['email'], $formulario['senha']);
                    
                    if($usuario):
                        $this->criarSessaoUsuario($usuario);
                        
                    else:
                        Sessao::mensagem('usuario', 'Usuario ou senha invalidos', 'alertaErro');
                    endif;

                endif;
                
            endif;

            // var_dump($formulario);

        else:
            $dados = [
                'email' => '',
                'senha' => '',
                'preencha_email' => '',
                'preencha_senha' => ''
            ];
            
        endif;

        $this->view('usuarios/login', $dados);
    }
    
    private function criarSessaoUsuario($usuario) {
        $_SESSION['usuario_id'] = $usuario->id;
        $_SESSION['usuario_nome'] = $usuario->nome;
        $_SESSION['usuario_email'] = $usuario->email;
        $_SESSION['usuario_senha'] = $usuario->senha;

        Url::redirecionar('paginas/home');

    }
    
    public function logout() {
        unset($_SESSION['usuario_id']);
        unset($_SESSION['usuario_nome']);
        unset($_SESSION['usuario_email']);
        unset($_SESSION['usuario_senha']);

        session_destroy();

        Url::redirecionar('usuarios/login');

    }

    public function editar($id) {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'id' => $id,
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha'])
            ];

            if(in_array('', $formulario)):

                if(empty($formulario['nome'])):
                    $dados['preencha_nome'] = 'Preencha o campo <b>Nome</b>';
                else:
                    $dados['preencha_nome'] = ''; 
                endif;

                if(empty($formulario['email'])):
                    $dados['preencha_email'] = 'Preencha o campo <b>E-mail</b>';
                else:
                    $dados['preencha_email'] = ''; 
                endif;

                if(empty($formulario['senha'])):
                    $dados['preencha_senha'] = 'Preencha o campo <b>Senha</b><br>A senha deve ter no minimo 6 caracteres';
                else:
                    $dados['preencha_senha'] = ''; 
                endif;

            else:
                if(Checa::checarNome($formulario['nome'])):
                    $dados['preencha_nome'] = 'O nome informado e invalido';

                elseif(Checa::checarEmail($formulario['email'])):
                    $dados['preencha_email'] = 'O email informado e invalido';

                elseif(strlen($formulario['senha']) < 6):
                    $dados['preencha_senha'] = 'A senha deve ter no minimo 6 caracteres';

                else:
                    $dados['senha'] = password_hash($formulario['senha'], PASSWORD_DEFAULT);
                    
                    if($this->usuarioModel->atualizar($dados)):
                        Sessao::mensagem('usuario', 'Dados alterados com sucesso');
                        Url::redirecionar('usuarios/logout');
                    else:
                        die("Erro ao armazenar usuario no banco de dados");

                    endif;
                
                endif;
                
            endif;

        else:
            $alterar = $this->usuarioModel->lerUsuarioPorId($id);

            if($alterar->id != $_SESSION['usuario_id']):
                Sessao::mensagem('usuario', 'Voce nao tem autorizacao para editar esse perfil');
                Url::redirecionar('usuarios/login');

            endif;

            $dados = [
                'id' => $alterar->id,
                'nome' => $alterar->nome,
                'email' => $alterar->email,
                'senha' => $alterar->senha,
                'preencha_nome' => '',
                'preencha_email' => '',
                'preencha_senha' => ''
            ];
            
        endif;

        $this->view('usuarios/atualizar', $dados);
    }

    //RECEBE OS VALORES DA MENSAGEM PARA PODER MOSTRAR SEPADAS POR PERFIL
    public function vizualizarPerfil($id) {
        
        $dados = [
            'usuario' => $this->usuarioModel->lerUsuarioPorId($id)
        ];

        $this->view('usuarios/perfil', $dados);
    }


    public function excluir($id) {
        if($this->usuarioModel->excluirConta($id)):
            Sessao::mensagem('usuario', 'Usuario excluido com sucesso');
            //Url::redirecionar('usuarios/login');
            $this->logout();
        else:
            die("Erro ao excluir o produto");
        endif;

    }*/

}