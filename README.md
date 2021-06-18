# INTER TRANSPLANTE CAPILAR SITE

## COMO UTILIZAR O FRAMEWORK PARA O SEU PROJETO
Para que você consiga utilizar o framework na sua aplicação teram de ser alterados alguns parametros bem simples, pois bem vamos la.

## ALTERANDO BANCO DE DADOS
Se você observar na raiz do projeto, ira ver que se tem uma base de dados padrao, claro você pode criar sua propria base de dados sem problema algum.

## PASSO 1 - VOCÊ TEM QUE TER INSTALADO O XAMPP OU OUTRO GERENCIADOR DE SUA PREFERENCIA
Nesse framework, eu sempre utilizei pelo Xampp, então darem exemplo por ele, OK. Bom, após ter instalado o Xampp, e necessario acessar sua pasta e inicializa-lo (procure pelo arquivo chamado xampp-control.exe e o execute), habilite o Apache e Banco de dados.

## PASSO 2 - VOCÊ DEVE ACESSAR INSERIR ESSE FRAMEWORK DENTRO DO SERVIDOR DO XAMPP
OK, como eu faço isso? E simples, basta acessar a pasta do xampp, e procurar pela pasta htdocs, e cole esse projeto dentro dessa pasta 'c:/xampp/htdocs/meu_framework'.

## PASSO 5 - IMPORTANDO O BANCO DE DADOS OU CRIANDO UM NOVO
Agora com o ambiente preparado, e necessario acessar a base de dados pode ser pelo proprio PHPAdmin -> acesse a URL: http://localhost . Apos inserir essa tela, você vera a opção para que se possar acessar o gerencidor de banco de dados da Apache, e super simples de importar o mvc.sql <- Arquivo contido na raiz desse framework, importe esse arquivo para o banco de dados e pronto.

## PASSO 4 - ABRINDO PROJETO
Após ter feito esses passos, basta acessar o projeto para realizar as configuracoes necessarias.

## PASSO 5 - REALIZANDO CONFIGURACOES DE BANCO DE DADOS NO PROJETO
Ja dentro do projeto, na pasta app/Libraries/Database.php -> iremos configurar o banco de dados do projeto, para isso será necessário alterar somente os campos ($banco -> nome_do_meu_banco (esse e o novo do banco que vc criou ao importar o mvc.sql por exemplo) )

## PASSO 6 - ALTERANDO CONFIGURACAO URL
Agora temos que reconfigurar a URL para que o redirecionamento ocorra corretamente, como estamos trabalhando em localhost, sua URL sempre ira ser localhost OK. Então acesse o arquivo app/configuracao.php dentro do campo com o nome de URL, temos que alterar o nome da pasta, nesse exmplo se esta utilizando o 'inter-transplante-capilar', mas você sempre deve colocar o nome da pasta na qual o projeto esta, exemplo: caso sua pasta seja, zezinho123, logo sua URL sera ( http://localhost/zezinho123' )

## PASSO 7 - ALTERANDO REDIRECIONAMENTO
E por fim, dentro do arquivo public/.htaccess e se deve alterar o nome do redirecionamento para o mesmo nome da pasta do projeto, seguindo a mesma idéia do passo anterior substituindo o /inter-transplante-capilar/public -> pelo nome da sua pasta exemplo: /zezinho123/public.

## FINAL
E pronto, após esses passos, basta acessar o projeto pelo browser via localhost, e seguindo os exemplos anteriores deve-se digitar a ( URL: http://localhost/zezinho123 )

## SERVIDOR PHP GRATUITO - AWARDSPACE
Servidor gratuito https://cp1.awardspace.net/