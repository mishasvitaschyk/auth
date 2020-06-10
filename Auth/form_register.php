<?
  $user = $_POST;

  if($user[login] !=""){
    $users_xml = simplexml_load_file("../XML/users.xml");
    foreach($users_xml->user as $users){
      //Провека, сусчиствуеьът ли пользователь с такими данными
      if($user[login] == $users->login){
        $y = true;
      }
    }
    if(isset($y)){
      $result ="Такой Login уже сущиствует! Придумайте дргуой!";
      echo json_encode($result);
    }
    else {
      if(filter_var($user[email], FILTER_VALIDATE_EMAIL )){
        $users_xml = simplexml_load_file("users.xml");
        foreach($users_xml->user as $users){
          //Провека, сусчиствуеьът ли пользователь с такими данными
          if($user[email] == $users->email){
            $y = true;
          }
        }
        if(isset($y)){
          $result ="Такой Email уже сущиствует! Введите дргуой!";
          echo json_encode($result);
        }
        else {
          if($user[password] == $user[confirm_password] && $user[password] != ""){
            $dom = new DomDocument();
            $dom->load("users.xml");
            $xpath = new DOMXPath ($dom);
            $parent = $xpath->query ('//users');
            $next = $xpath->query ('//users/user');
            $new_user = $dom->createElement ('user');
            $new_login = $dom->createElement ('login', $user[login]);
            $new_email = $dom->createElement ('email', $user[email]);
            $new_password = $dom->createElement ('password', md5($user[password]));
            $new_name = $dom->createElement ('name', $user[name]);

            $new_user->appendChild ($new_login);
            $new_user->appendChild ($new_email);
            $new_user->appendChild ($new_password);
            $new_user->appendChild ($new_name);
            $parent->item(0)->insertBefore($new_user, $next->item(0));

            $dom->save("users.xml");
            $result ="Даные добавлены";
            echo json_encode($result);
          }
          else {
            $result ="Пароли не совпадают!";
            echo json_encode($result);
          }
        }
      }
      else {
        $result ="Неверный Email!";
        echo json_encode($result);
      }
    }

  }
  else {
    $result ="Неправильное имя!";
    echo json_encode($result);
  }

?>
