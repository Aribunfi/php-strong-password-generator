<?php

$alphabet = "abcdefghijklmnopqrstuvwxyz";
$alphabetUC = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$numbers = "1234567890";
$specials = "!£$%&/()={}-_"

$password_all_chars = $alphabet . $alphabetUC . $numbers . $specials;
$password_length = $GET["password_length"] ?? 7;

$generated_password = generate_password($password_all_chars, $password_length);


function generate_password ($allowed_chars, $length) {

};


?>





<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <main>
        <div class="container">
            <h1></h1>
            <div class="row">
                <div class="col-12">

<div class="card my-5">
  <div class="card-header">
    Password Generator
  </div>
  <div class="card-body">
                       <form method="GET" class="row">
    <div class="col-7">
        <div class="mb-3">
  <label for="password_length" class="form-label">Lunghezza password</label>
  <input type="number" class="form-control" id="password_length" name="password_length" placeholder="scegli quanto vuoi sia lunga la psw">
</div>
    </div>
        <div class="col-5">
            <div class="my-4">
            <button class="btn btn-primary w-100">Genera password sicura</button>
        </div>
        </div>

</form>
  </div>
</div>






                </div>
            </div>
        </div>

    </main>
</body>
</html>