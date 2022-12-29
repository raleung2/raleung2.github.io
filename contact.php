<?php
if($_POST["message"]) {
mail("raffertyleung98@gmail.com", "Portfolio-Website Contact Form",
$_POST["insert your message here"]. "From: raffertyleung98@gmail.com");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
</head>
<body>
  <form method="post" action="contact.php">
    <textarea name="message"></textarea>
    <input type="submit">
  </form>
</body>
</html>