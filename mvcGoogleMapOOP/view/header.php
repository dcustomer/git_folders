<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom style placed here -->
    <link rel="stylesheet" href="view/style.css">
    <style>
        #cityInfoDiv, #pharmacyInfo {
            display: none;
        }
    </style>
</head>
<body>
    <!-- header section starts -->
      <header class="header">
          <h2> Find pharmacies by city </h2>

          <div class="icons">
              <div class="fas fa-user" id="login-btn"></div>
          </div>

          <form action="" method="POST" class="login-form">
              <h3>login now</h3>
              <input type="email" name="email" placeholder="your email" class="box" required>
              <input type="password" name="pass" placeholder="your password" class="box" required>
              <input type="hidden" name="pagename" value="checkUser">
              <p>don't have an account? <a href="index.php?pagename=register">create now</a></p>
              <input type="submit" value="login now" class="btn">
          </form>
      </header>
    <!-- header section ends -->
