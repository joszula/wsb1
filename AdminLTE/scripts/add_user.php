<?php
    session_start();
    if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email1'])
    && !empty($_POST['email2']) && !empty($_POST['password1']) && !empty($_POST['password2'])
    && !empty($_POST['city']) && !empty($_POST['birthday']) && isset($_POST['terms'])) {
        if ($_POST['email1']!=$_POST['email2']){
            $_SESSION['error']="Adresy email są różne";
            header('location: ../pages/register.php');
    }
    if ($_POST['password1']!=$_POST['password2']){
            $_SESSION['error']="Adresy email są różne";
            header('location: ../pages/register.php');
    }
}
    else{
        $_SESSION['error']="Wypełnij wszystkie pola";
        header('location: ../pages/register.php');
    }

?>
    <script>
        history.back();
    </script>
