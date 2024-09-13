<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $full = $_POST['full'];
  // $fone = $_POST['fone'];
  $level = $_POST['level'];

  // Aqui você pode processar os dados, enviar email, salvar no banco de dados, etc.

  $to = "wendellucaslrd@gmail.com";
  $subject = "Novo cadastro por site para o método YOU CAN SPEAK";
  $body = "NOVO CADASTRO REALIZADO\nNome: $name\nEmail: $email\nTelefone: $full\nNível de inglês: $level";
  $enviado = mail($to, $subject, $body);
  if ($enviado) {
    echo json_encode(['success' => true]);
  } else {
    echo json_encode(['success' => false]);
  }
}
