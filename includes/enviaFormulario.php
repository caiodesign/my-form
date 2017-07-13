<?php
include_once('connect.php'); // Conexão com o banco
include_once('functions.php'); // Chama functions

$conn    = Connect();
$nome   = $conn->real_escape_string($_POST['nome']);
$cpf   = $conn->real_escape_string($_POST['cpf']);
$ddd   = $conn->real_escape_string($_POST['ddd']);
$celular = $conn->real_escape_string($_POST['celular']);
$email = $conn->real_escape_string($_POST['email']);
$query   = "INSERT into formularios (nome,cpf,ddd,celular,email) VALUES('" . $nome . "','" . $cpf . "','" . $ddd . "','" . $celular . "','" . $email . "')";
$success = $conn->query($query);


$email_servidor = "email@servidor.com" // Altere Aqui;
$para = "seu@email.com" // Altere Aqui;
$de = "seu@email.com" // Altere Aqui;
$assunto = "Formulário enviado do site (seu site)";
$mensagem = '<p>Formulário do site</p>
<p>Nome: ' .$nome. '</p>
<p>CPF/CNPJ: ' .$cpf. '</p>
<p>Celular: ' .$ddd. ' - ' .$celular. '</p>
<p>Email: ' .$email. '</p>';

enviaEmail($de, $assunto, $mensagem, $para, $email_servidor);


if (!$success) {
    $pagina = "ops.php";

} else{
  $pagina = "sucesso.php";
}

header("location:$pagina");

?>
