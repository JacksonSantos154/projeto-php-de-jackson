# projeto-php-de-jackson

# CONEXAO.PHP :
A conexao.php é utilizada para fazer o conexão do banco de dados com o projeto do mysql.
# INDEX.PHP :
o index.php esta sendo usado para fazer o login do usuário no site, recebendo o email e a senha do usuário e iniciando a sessão mandado o usuário para a pagina painel, caso de erro no login será mostrado a mensagem "Falha ao logar".
# LOGOUT.PHP :
o logout é usado para se deslogar do site, ele utiliza o !isset($_SESSION) para verificar se a sessão já está iniciada caso a sessão não esteja inicializada ele à iniciara
com o session_start(), encerrando a sessão com o session_destroy(), sem ele o usuário não deslogaria.
# PAINEL.PHP :
o painel.php mostra a mensagem bem-vindo ao painel, o nome do usuário e o botão para efetuar o logout.
# PROTECT.PHP :
o protect.php protege o site de usuários que não estão logados e tentam acessar o painel mostrando a mensagem "você não pode acessar essa pagina porque não esta logado".
