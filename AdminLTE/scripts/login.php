<?php 
    session_start();
    require_once'./connect.php';
        if($conn->connect_error != 0){
            $_SESSION['error']="Błąd połączenia z bazą";
            $error = 1;
            header('location: ../index.php');

        }
        else{
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
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $sql = "SELECT email FROM users WHERE email=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
         if($stmt->execute()){
            $stmt->bind_result($email);
            $stmt->store_result();
            if($stmt->num_rows == 1){
                $stmt->close();
                $sql = "SELECT email FROM users WHERE email=? AND password=?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss", $email, $pass);
                if($stmt->execute()){
                    $stmt->bind_result($email,$pass);
                    $stmt->store_result();
                    $row=$stmt->num_rows;
                    if($stmt->num_rows == 1){
                     $stmt->close();
                     $_SESSION['Logged'] = 1;
                     $_SESSION['email'] = $email;
                     header('location: ../pages/logged/logged.php');
                    }
                    else{
                    $_SESSION['error']="hasło nieprawidłowe";
                    header('location: ../index.php');
                    $stmt->close();
                    }
                }
                else{
                    $_SESSION['error']="Błąd połączenia z bazą";
                    header('location: ../index.php');
                    $stmt->close();
                }
            }
            else{
                $_SESSION['error']=" Email nie istnieje";
                header('location: ../index.php');
                $stmt->close();

            }
        }
        else{
            $_SESSION['error']="Błąd połączenia z bazą";
            header('location: ../index.php');
            $stmt->close();
            
        }
        
        


    }

?>