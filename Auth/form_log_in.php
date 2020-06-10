<?
  $user = $_POST;
//Проверка логина
  if($user[login] !=""){
    //Провека пароля
    if($user[password] !=""){
      $users_xml = simplexml_load_file("../XML/users.xml");
      foreach($users_xml->user as $users){
        //Провека, сусчиствуеьът ли пользователь с такими данными
        if($user[login] == $users->login && md5($user[password]) == $users->password ){
          $y = true;
        }
      }
      if(isset($y)){
        session_start();
		    $_SESSION['auth'] = true;
        $_SESSION['login'] = $user[login];
        $cookie_login = $user[login];
        setcookie("login", $user[login], time() + 86400);
        header('Location: http://localhost/test/Auth/sign_in_user.php ');
      }
      else {
        $result ="Неверный логин или пароль!";
        echo json_encode($result);
      }
    }
    else {
      $result ="Введите пароль!";
      echo json_encode($result);
    }
  }
  else {
    $result ="Введите имя";
    echo json_encode($result);
  }

?>
