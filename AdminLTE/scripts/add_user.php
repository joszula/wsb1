<?php
    session_start();
    if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email1'])
    && !empty($_POST['email2']) && !empty($_POST['password1']) && !empty($_POST['password2'])
    && !empty($_POST['city']) && !empty($_POST['birthday']) && isset($_POST['terms'])) {
        $error = 0;
        require_once'./connect.php';
        if($conn->connect_error != 0){
            $_SESSION['error']="Błąd połączenia z bazą";
            $error = 1;

        }
        else{
           echo'prawidłowe połączenie z bazą';
        
        }
        if ($_POST['email1']!=$_POST['email2']){
            $_SESSION['error']="Adresy email są różne";
            header('location: ../pages/register.php');
            $error=1;
    }
    if ($_POST['password1']!=$_POST['password2']){
            $_SESSION['error']="Hasła są różne";
            header('location: ../pages/register.php');
            $error=1;
    }
}

    else{
        $_SESSION['error']="Wypełnij wszystkie pola";
        header('location: ../pages/register.php');
        $error=1;
    } 
if($error == 1){
?>
    <script>
        history.back();
    </script>
    <?php
    exit();
}
    //echo'<pre>';
   // print_r($_POST);
   // echo'</pre>';
    $name=trim($_POST["name"]);
    $surname=trim($_POST["surname"]);
    $password=password_hash(trim($_POST["password1"]), PASSWORD_ARGON2ID);
    $email=trim($_POST["email1"]);
    $birthday=trim($_POST["birthday"]);
    $city=trim($_POST["city"]);


    $sql = "INSERT INTO `users` (`name`, `surname`, `email`, `password`, `city_id`, `birthday`) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $name, $surname, $email, $password, $city, $birthday);
    if ($stmt->execute()) {

       header('location: ../index.php?register=success');
    }
    else {
        header('location: ../pages/register.php');
        exit();      
    }
    //echo $conn->affected_rows;
    $stmt->close();
?>