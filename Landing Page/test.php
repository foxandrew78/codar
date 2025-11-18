<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

mail("info@codar.ie", "New query from " . $name, "email:\n " . $email . "\n" . "message:\n" . $message);

header('Location: /thanks.html');
