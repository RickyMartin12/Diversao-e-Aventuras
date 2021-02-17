<?php

    require_once '../connect.php';
    session_start();

          $err='';
          $err_login = '';
          $success = '';


          if (!$_POST['utilizador'])
            $err .= '- Utilizador * <br>';
          else 
            $utilizador = $_POST['utilizador']; 

          if (!$_POST['password'])
            $err .= '- Password * <br>';
          else 
            $password=$_POST['password']; 
  if($_SERVER["REQUEST_METHOD"] == "POST") 
  {
     if($err == '')
     {
          $utilizador = $_POST['utilizador'];
          $password = md5(trim($_POST['password']));
          $sql = "SELECT * FROM users WHERE username='$utilizador' AND pass='$password'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          $rowcount=mysqli_num_rows($result);
          if ($rowcount == 1)
          {
            $_SESSION['pr_uid']=$row['id'];
            $_SESSION['user']=$row['username'];
            //$_SESSION['start'] = time();


            setcookie("user", $_SESSION['user'], time() + (86400 * 30), "/"); 
            setcookie("id", $_SESSION['pr_uid'], time() + (86400 * 30), "/");

            

            $success='../web/admin/index.php';
            $arr = array('error'=>'', 'id'=>$_SESSION['pr_uid'], 'success'=>$success);

          }
          else
          {
            $err_login = 'Utilizador ou Password incorretos';
            $arr = array('error'=>$err_login, 'id'=>'', 'success'=>'');
          }
      }
      else
      {
          $arr = array('error'=>$err, 'id'=>'', 'success'=>'');
      }
    }

      mysqli_close($conn);
      echo json_encode($arr);
?>
