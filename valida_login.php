<?php

session_start();

//variavel que verifica se a auteenticação foi realizada
$usuario_autenticado = false;
$usuarios_app = array(
    array('email' => 'luan.lucas@live.com', 'senha' => 'luanlukas10'),
    array('email' => 'teste@live.com', 'senha' => '159753'),

);

/*
echo '<pre>';
print_r($usuarios_app);
echo '</pre>';

*/

foreach($usuarios_app as $users){
    

    if($users['email'] == $_POST['email'] && $users['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
        echo 'usuario autenticado';
    }

}

if($usuario_autenticado){
    $_SESSION['autenticado'] = 'SIM';
}else{
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
}
/*
echo $_GET["email"];
echo $_GET["senha"];    

*/
?>