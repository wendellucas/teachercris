<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Aqui você pode processar os dados, enviar email, salvar no banco de dados, etc.

  echo "Formulário enviado com sucesso!";
} else {
  echo "Método de requisição inválido.";
}
?>