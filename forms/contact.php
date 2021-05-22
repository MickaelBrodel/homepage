<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mickaël Brodel</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
</head>

<?php

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $envoie = $name;
  $envoie.= $email;
  $envoie.= $subject;
  $envoie.= $message;

  $file = $name.'reponse.txt';

  file_put_contents($file, $envoie);

  header('Location: https://mickaelbrodel.github.io/homepage/');
  exit();
?>
