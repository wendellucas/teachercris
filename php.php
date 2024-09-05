<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $full = $_POST['full'];
  // $fone = $_POST['fone'];
  $level = $_POST['level'];

  // Aqui você pode processar os dados, enviar email, salvar no banco de dados, etc.

  $to = "wendeldamiao@yahoo.com.br";
  $subject = "Novo cadastro por site para o método YOU CAN SPEAK";
  $body = "NOVO CADASTRO REALIZADO\nNome: $name\nEmail: $email\nTelefone: $full\nNível de inglês: $level";
  if (mail($to, $subject, $body)) {
    echo "Parabéns, agora é só aguardar nosso contato!";
  } else {
    echo "Erro ao cadastrar.";
  }
  // echo $body;
} else {
  echo "Erro ao cadastrar.";
}
?>