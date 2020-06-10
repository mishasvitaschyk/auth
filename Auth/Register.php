<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="../js/form_ajax.js"></script>
     <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>
    <div class="login-page">
      <div class="form">
        <form class="login-form"action="" id="ajax_form" method="post">
          <input type="text" class="log_in_input" name="login" placeholder="Login"value="">
          <input type="text" class="log_in_input" name="email" placeholder="Email" value="">
          <input type="password" class="log_in_input" name="password" placeholder="Password"value="">
          <input type="password" class="log_in_input" name="confirm_password" placeholder="Confirm Password" value="">
          <input type="text" class="log_in_input" name="name" placeholder="Name" value="">
          <input type="button" class="log_in_button" id="register" name="register" value="Register">
          <div class="ajax_result" id="result_form"></div>
        </form>
      </div>
    </div>
  </body>
</html>
