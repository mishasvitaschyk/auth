<?
  session_start();
    if (isset($_SESSION[login])) {
      echo $_SESSION[login]."<br />";
    }
  echo ("Hello ".$_COOKIE[login]);
?>
