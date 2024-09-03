<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $fone = $_POST['fone'];
  $level = $_POST['level'];

  // Aqui você pode processar os dados, enviar email, salvar no banco de dados, etc.

  $to = "wendeldamiao@yahoo.com.br";
  $subject = "Novo cadastro por site para o método YOU CAN SPEAK";
  $body = "Nome: $name\nEmail: $email\nTelefone: $fone\nNível de inglês: $level";
  if (mail($to, $subject, $body)) {
    echo "Parabéns, agora é só aguardar nosso contato!";
  } else {
    echo "Erro ao cadastrar.";
  }
} else {
  echo "Erro ao cadastrar.";
}
?>