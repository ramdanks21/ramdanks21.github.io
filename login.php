<?php
session_start();

if ($_SESSION['login'] == true) {
  header('location:hello.php');
}
$error = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_POST['username'] == "ramdan" && $_POST['password'] == "ramdan") {
    $_SESSION['login'] = true;
    $_SESSION['username'] = true;
    header('location:hello.php');
    exit();
  } else {
    echo "LOGIN GAGAL COBA LAGI";
  }
}



?>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hello Bulma!</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
  <link rel="stylesheet" href="styless2.css">
</head>
<?php
if ($error != "") { ?>

  <h2><?= $error ?></h2>
<?php

} ?>

<body>
  <section class="section is-medium">
    <div class="container ">
      <div class="columns is-vcentered">
        <div class="column ">
          <h1 class="Title">Login Your Acount</h1>
        </div>
        <div class="column is-justify-content-center is-align-items-center">
          <div class="columns">
            <div class="column ">
              <div class="field ">
                <form action="login.php" method="POST">

                  <label class="label mr-3 has-text-dark">Username</label>
                  <div class="control ">
                    <input class="input " type="text" name="username">
                  </div>
              </div>
              <div class="field ">
                <label class="label mr-3 has-text-dark">Password</label>
                <div class="control ">
                  <input class="input " type="password" name="password">
                </div>
              </div>
            </div>

          </div>


          <input class=" has-text-centered button is-medium  is-flex is-justify-content-center is-align-content-center has-text-white" type="submit" class="login">
          </form>

        </div>
      </div>
  </section>
</body>

</html>