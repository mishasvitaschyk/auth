<?php

  if(isset($_COOKIE[login])){
    $users_xml = simplexml_load_file("../XML/users.xml");
      foreach($users_xml->user as $users){
        //Провека, сусчиствуеьът ли пользователь с такими данными
        if($_COOKIE[login] == $users->login){
          $y = true;
        }
      }
      if(isset($y)){
        header('Location: http://localhost/test/Auth/sign_in_user.php ');
      }

  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="../js/form_ajax.js"></script>
     <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Lod in</title>
  </head>
  <body>
    <div class="login-page">
      <div class="form">
        <form class="login-form" id="ajax_log_in" action="" method="post">
          <input type="text" class="log_in_input" name="login" placeholder="Login" value="">
          <input type="password" class="log_in_input" name="password" placeholder="Password" value="">
          <input class="log_in_button" type="button" id="log_in" name="LogIn" value="Log In">
          <div class="ajax_result" id="result_form"></div>
        </form>
      </div>
    </div>
  </body>
</html>
