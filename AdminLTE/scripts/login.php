<?php 
    session_start();
    require_once'./connect.php';
        if($conn->connect_error != 0){
            $_SESSION['error']="Błąd połączenia z bazą";
            $error = 1;
            header('location: ../index.php');

        }
        else{
        $error = 0;
          // echo'prawidłowe połączenie z bazą';
          // echo '<br>';
        
        }
if($error == 1){
    ?>
    <script>
    history.back();
    </script>
    <?php
    exit();
}
    if (!empty($_POST['email']) && !empty($_POST['password']))
    {
        $email = htmlentities($_POST['email'], ENT_QUOTES, "UTF-8");
        $password = htmlentities($_POST['password'], ENT_QUOTES, "UTF-8");
        
        $sql = sprintf("SELECT * FROM users WHERE email='%s'", mysqli_real_escape_string($conn, $email));
        if($result = $conn->query($sql)){
            if($count = $result->num_rows){
                $row = $result->fetch_assoc();
                $passdb = $row['password'];
                $status = $row['status_id'];
                if(password_verify($password, $passdb)){
                echo"prawidłowy login i hasło";
                    if($status == 1){
                        $_SESSION['logged']['permission'] = $row['permissions_id'];
                        $_SESSION['logged']['name'] = $row['name'];
                        $_SESSION['logged']['surname'] = $row['surname'];
                        $_SESSION['logged']['email'] = $row['email'];

                        echo $_SESSION['logged']['permission'];
                        echo $_SESSION['logged']['name'];
                        echo $_SESSION['logged']['surname'];
                        echo $_SESSION['logged']['email'];
                       // header('location: ../pages/logged/logged.php');
                       //aktualizacja daty i czasu ostaniego zalogowania
                       // utworzyc tabale logs (id-user, timestamp, adres-ip, token(id-sesji))
                    }
                    else if($status == 2){
                    $_SESSION['error']="Użytkownik nie aktywowany";
                    header('location: ../index.php');
                    }
                    else if($status == 3){
                        $_SESSION['error']="Użytkownik zablokowany przez administratora";
                        header('location: ../index.php');  
                    }
                }
                else{
                    $_SESSION['error']="hasło nieprawidłowe";
                    header('location: ../index.php');
                }
            }
            else{
                $_SESSION['error']="email nie istnieje";
                header('location: ../index.php');
            }
            
            
            
        }
        


    }
    else{
        $_SESSION['error']="Uzupełnij wszystkie pola";
            header('location: ../index.php');

    }

?>