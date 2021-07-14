<?php

class Paginas extends Controller {

    public function __construct() {
        $this->postModel = $this->model('Post');
        $this->produtoModel = $this->model('Produto');
        $this->usuarioModel = $this->model('Usuario');
    }

    public function index() {
        
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'cel' => trim($formulario['cel']),
                'sexo' => trim($formulario['sexo']),
                'senha' => trim($formulario['senha']),
                'confirmar_senha' => trim($formulario['confirmar_senha'])
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

                if(empty($formulario['sexo'])):
                    $dados['preencha_sexo'] = 'Preencha o campo <b>Sexo</b>';
                else:
                    $dados['preencha_sexo'] = ''; 
                endif;

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
                'sexo' => '',
                'senha' => '',
                'confirmar_senha' => '',
                'preencha_nome' => '',
                'preencha_email' => '',
                'preencha_cel' => '',
                'preencha_sexo' => '',
                'preencha_senha' => '',
                'preencha_confirmar_senha' => ''
            ];
            
        endif;

        $this->view('paginas/home', $dados);
        
    }

    public function sobre() {
        $dados = [
            'tituloPaginas' => 'Sobre Nos'
        ];
        
        $this->view('paginas/sobre', $dados);
    }

    public function home() {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'cel' => trim($formulario['cel']),
                'sexo' => trim($formulario['sexo']),
                'senha' => trim($formulario['senha']),
                'confirmar_senha' => trim($formulario['confirmar_senha'])
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

                if(empty($formulario['sexo'])):
                    $dados['preencha_sexo'] = 'Preencha o campo <b>Sexo</b>';
                else:
                    $dados['preencha_sexo'] = ''; 
                endif;

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
                'sexo' => '',
                'senha' => '',
                'confirmar_senha' => '',
                'preencha_nome' => '',
                'preencha_email' => '',
                'preencha_cel' => '',
                'preencha_sexo' => '',
                'preencha_senha' => '',
                'preencha_confirmar_senha' => ''
            ];
            
        endif;

        $this->view('paginas/home', $dados);
    }

    public function sobreClinica() {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'cel' => trim($formulario['cel']),
                'sexo' => trim($formulario['sexo']),
                'senha' => trim($formulario['senha']),
                'confirmar_senha' => trim($formulario['confirmar_senha'])
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

                if(empty($formulario['sexo'])):
                    $dados['preencha_sexo'] = 'Preencha o campo <b>Sexo</b>';
                else:
                    $dados['preencha_sexo'] = ''; 
                endif;

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
                        Sessao::mensagem('usuario', 'Cadastro realizado com sucesso');

                        /* ARMAZE OS DADOS DO USUARIO NO CACHE */
                        $_SESSION['usuario_nome'] = $formulario['nome'];

                        Url::redirecionar('paginas/clinica');
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
                'sexo' => '',
                'senha' => '',
                'confirmar_senha' => '',
                'preencha_nome' => '',
                'preencha_email' => '',
                'preencha_cel' => '',
                'preencha_sexo' => '',
                'preencha_senha' => '',
                'preencha_confirmar_senha' => ''
            ];
            
        endif;

        $this->view('paginas/clinica', $dados);
    }

    public function transplanteMasculino() {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'cel' => trim($formulario['cel']),
                'sexo' => trim($formulario['sexo']),
                'senha' => trim($formulario['senha']),
                'confirmar_senha' => trim($formulario['confirmar_senha'])
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

                if(empty($formulario['sexo'])):
                    $dados['preencha_sexo'] = 'Preencha o campo <b>Sexo</b>';
                else:
                    $dados['preencha_sexo'] = ''; 
                endif;

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
                        Sessao::mensagem('usuario', 'Cadastro realizado com sucesso');

                        /* ARMAZE OS DADOS DO USUARIO NO CACHE */
                        $_SESSION['usuario_nome'] = $formulario['nome'];

                        Url::redirecionar('paginas/transplante_masculino');
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
                'sexo' => '',
                'senha' => '',
                'confirmar_senha' => '',
                'preencha_nome' => '',
                'preencha_email' => '',
                'preencha_cel' => '',
                'preencha_sexo' => '',
                'preencha_senha' => '',
                'preencha_confirmar_senha' => ''
            ];
            
        endif;

        $this->view('paginas/transplante_masculino', $dados);
    }

    public function transplanteSombrancelha() {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'cel' => trim($formulario['cel']),
                'sexo' => trim($formulario['sexo']),
                'senha' => trim($formulario['senha']),
                'confirmar_senha' => trim($formulario['confirmar_senha'])
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

                if(empty($formulario['sexo'])):
                    $dados['preencha_sexo'] = 'Preencha o campo <b>Sexo</b>';
                else:
                    $dados['preencha_sexo'] = ''; 
                endif;

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
                        Sessao::mensagem('usuario', 'Cadastro realizado com sucesso');

                        /* ARMAZE OS DADOS DO USUARIO NO CACHE */
                        $_SESSION['usuario_nome'] = $formulario['nome'];

                        Url::redirecionar('paginas/transplante_sombrancelha');
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
                'sexo' => '',
                'senha' => '',
                'confirmar_senha' => '',
                'preencha_nome' => '',
                'preencha_email' => '',
                'preencha_cel' => '',
                'preencha_sexo' => '',
                'preencha_senha' => '',
                'preencha_confirmar_senha' => ''
            ];
            
        endif;

        $this->view('paginas/transplante_sombrancelha', $dados);
    }

    public function transplanteBarba() {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'cel' => trim($formulario['cel']),
                'sexo' => trim($formulario['sexo']),
                'senha' => trim($formulario['senha']),
                'confirmar_senha' => trim($formulario['confirmar_senha'])
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

                if(empty($formulario['sexo'])):
                    $dados['preencha_sexo'] = 'Preencha o campo <b>Sexo</b>';
                else:
                    $dados['preencha_sexo'] = ''; 
                endif;

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
                        Sessao::mensagem('usuario', 'Cadastro realizado com sucesso');

                        /* ARMAZE OS DADOS DO USUARIO NO CACHE */
                        $_SESSION['usuario_nome'] = $formulario['nome'];

                        Url::redirecionar('paginas/transplante_barba');
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
                'sexo' => '',
                'senha' => '',
                'confirmar_senha' => '',
                'preencha_nome' => '',
                'preencha_email' => '',
                'preencha_cel' => '',
                'preencha_sexo' => '',
                'preencha_senha' => '',
                'preencha_confirmar_senha' => ''
            ];
            
        endif;

        $this->view('paginas/transplante_barba', $dados);
    }

    public function usoPelosCorporais() {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'cel' => trim($formulario['cel']),
                'sexo' => trim($formulario['sexo']),
                'senha' => trim($formulario['senha']),
                'confirmar_senha' => trim($formulario['confirmar_senha'])
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

                if(empty($formulario['sexo'])):
                    $dados['preencha_sexo'] = 'Preencha o campo <b>Sexo</b>';
                else:
                    $dados['preencha_sexo'] = ''; 
                endif;

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
                        Sessao::mensagem('usuario', 'Cadastro realizado com sucesso');

                        /* ARMAZE OS DADOS DO USUARIO NO CACHE */
                        $_SESSION['usuario_nome'] = $formulario['nome'];

                        Url::redirecionar('paginas/uso_pelos_corporais');
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
                'sexo' => '',
                'senha' => '',
                'confirmar_senha' => '',
                'preencha_nome' => '',
                'preencha_email' => '',
                'preencha_cel' => '',
                'preencha_sexo' => '',
                'preencha_senha' => '',
                'preencha_confirmar_senha' => ''
            ];
            
        endif;

        $this->view('paginas/uso_pelos_corporais', $dados);
    }

    public function mesoterapiaCapilar() {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'cel' => trim($formulario['cel']),
                'sexo' => trim($formulario['sexo']),
                'senha' => trim($formulario['senha']),
                'confirmar_senha' => trim($formulario['confirmar_senha'])
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

                if(empty($formulario['sexo'])):
                    $dados['preencha_sexo'] = 'Preencha o campo <b>Sexo</b>';
                else:
                    $dados['preencha_sexo'] = ''; 
                endif;

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
                        Sessao::mensagem('usuario', 'Cadastro realizado com sucesso');

                        /* ARMAZE OS DADOS DO USUARIO NO CACHE */
                        $_SESSION['usuario_nome'] = $formulario['nome'];

                        Url::redirecionar('paginas/mesoterapia_capilar');
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
                'sexo' => '',
                'senha' => '',
                'confirmar_senha' => '',
                'preencha_nome' => '',
                'preencha_email' => '',
                'preencha_cel' => '',
                'preencha_sexo' => '',
                'preencha_senha' => '',
                'preencha_confirmar_senha' => ''
            ];
            
        endif;

        $this->view('paginas/mesoterapia_capilar', $dados);
    }

    public function recesso() {

        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'cel' => trim($formulario['cel']),
                'sexo' => trim($formulario['sexo']),
                'senha' => trim($formulario['senha']),
                'confirmar_senha' => trim($formulario['confirmar_senha'])
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

                if(empty($formulario['sexo'])):
                    $dados['preencha_sexo'] = 'Preencha o campo <b>Sexo</b>';
                else:
                    $dados['preencha_sexo'] = ''; 
                endif;

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
                        Sessao::mensagem('usuario', 'Cadastro realizado com sucesso');

                        /* ARMAZE OS DADOS DO USUARIO NO CACHE */
                        $_SESSION['usuario_nome'] = $formulario['nome'];

                        Url::redirecionar('paginas/recesso');
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
                'sexo' => '',
                'senha' => '',
                'confirmar_senha' => '',
                'preencha_nome' => '',
                'preencha_email' => '',
                'preencha_cel' => '',
                'preencha_sexo' => '',
                'preencha_senha' => '',
                'preencha_confirmar_senha' => ''
            ];
            
        endif;

        $this->view('paginas/recesso', $dados);
    }

    /*DASHBOARD*/

    /*public function painelProduto($id) {
        $dados = [
            'produtos' => $this->produtoModel->listarProdutos(),
            'usuario' => $this->usuarioModel->lerUsuarioPorId($id),
            'posts' => $this->postModel->listarPosts()
        ];

        $this->view('dashboard/painelProduto', $dados);
    }*/

    /*public function painelMensagem($id) {
        $dados = [
            'produtos' => $this->produtoModel->listarProdutos(),
            'usuario' => $this->usuarioModel->lerUsuarioPorId($id),
            'usuarios' => $this->usuarioModel->listarUsuarios(),
            'posts' => $this->postModel->listarPosts()
        ];

        $this->view('dashboard/painelMensagem', $dados);
    }*/

    /*public function painelCliente($id) {
        $dados = [
            'produtos' => $this->produtoModel->listarProdutos(),
            'usuario' => $this->usuarioModel->lerUsuarioPorId($id),
            'usuarios' => $this->usuarioModel->listarUsuarios(),
            'posts' => $this->postModel->listarPosts()
        ];

        $this->view('dashboard/painelCliente', $dados);
    }*/

    /*public function adicionarProdutos() {
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'nome' => trim($formulario['nome']),
                'descricao' => trim($formulario['descricao']),
                'preco' => trim($formulario['preco']),
                'img' => trim($formulario['img']),
                'urlProduto' => trim($formulario['urlProduto'])
            ];

            if(in_array('', $formulario)):

                if(empty($formulario['nome'])):
                    $dados['preencha_nome'] = 'Preencha o campo <b>Nome</b>';
                else:
                    $dados['preencha_nome'] = '';  
                endif;

                if(empty($formulario['descricao'])):
                    $dados['preencha_descricao'] = 'Preencha o campo <b>Descricao</b>';
                else:
                    $dados['preencha_descricao'] = '';
                endif;

                if(empty($formulario['preco'])):
                    $dados['preencha_preco'] = 'Preencha o campo <b>Preco</b>';
                else:
                    $dados['preencha_preco'] = '';
                endif;

                if(empty($formulario['img'])):
                    $dados['preencha_img'] = 'Preencha o campo <b>Imagem</b>';
                else:
                    $dados['preencha_img'] = '';
                endif;

                if(empty($formulario['urlProduto'])):
                    $dados['preencha_urlProduto'] = 'Preencha o campo <b>URL</b>';
                else:
                    $dados['preencha_urlProduto'] = '';
                endif;

            else:
                if($this->produtoModel->checarNome($formulario['nome'])):
                    $dados['preencha_email'] = 'O Produto informado ja se encontra cadastrado';

                else:
                    if($this->produtoModel->armazenar($dados)):
                        Sessao::mensagem('produto', 'Produto adicionado com sucesso');
                        Url::redirecionar('paginas/painelProduto/71');
                    else:
                        die("Erro ao armazenar usuario no banco de dados");

                    endif;
                
                endif;
                
            endif;

            var_dump($formulario);
        else:
            $dados = [
                'nome' => '',
                'descricao' => '',
                'preco' => '',
                'img' => '',
                'urlProduto' => '',
                'preencha_nome' => '',
                'preencha_descricao' => '',
                'preencha_preco' => '',
                'preencha_img' => '',
                'preencha_urlProduto' => ''
            ];
            
        endif;

        $this->view('produtos/adicionarProdutos', $dados);
    }*/

}