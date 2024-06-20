<?php


function checkSession()
{
  session_start();

  if (isset($_SESSION["username"])) {

    $user_check = $_SESSION["username"];
    $sql = "SELECT username FROM tb_users WHERE username = '$user_check'";
    $result = mysqli_query(mysqli_connect("localhost", "root", "", "ekatalog"), $sql);

    if ($result->num_rows == 0) {
      $row = mysqli_fetch_row($result);

      $login_session = $row["username"];

      if (!isset($login_session)) {
        header("Location: ./signout.php");
      }
    }
  } else {
    header("Location: ./signout.php");
  }
}
