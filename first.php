<?php 

include 'db_connnection.php';

$conn = OpenCon();

echo "Connected Successfully" . "<br/>";
// error_reporting(0);


// if(isset($_REQUEST['name']) && isset($_REQUEST['surname']) && isset($_REQUEST['password']) && isset($_REQUEST['emailInput'])) {
// if(isset($uname) && isset($lastname) && isset($pass) && isset($somemail)) {}

// if(isset($_POST['name']) || isset($_POST['surname']) || isset($_POST['password']) || isset($_POST['emailInput'])) {}
    $uname =  $_POST['name'];
    $lastname = $_POST['surname'];
    $pass =  $_POST['password'];
    $somemail = $_POST['emailInput'];

    $hashedpass = password_hash($pass, PASSWORD_DEFAULT);
 

    $sql = "INSERT INTO uporabnik VALUES (DEFAULT, '$uname', '$lastname', '$somemail', '$hashedpass', DEFAULT)";


//     use PHPMailer\PHPMailer\PHPMailer;
//     use PHPMailer\PHPMailer\SMTP;

// foreach (glob("phpmailer/*.php") as $filename)
// {
//     include $filename;
// }

    // require 'Praktikum starana/phpmailer/src/PHPMailer.php';
    // require 'Praktikum starana/phpmailer/src/SMTP.php';


//     require "PHPMailer/src/PHPMailer.php";
//     require "PHPMailer/src/SMTP.php";
// foreach (glob("phpmailer/*.php") as $filename)
// {
//     include $filename;
// }

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;

// if(isset($_POST["submit"])){



    

// $mail = new PHPMailer(true);

// // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

// $mail->isSMTP();
// $mail->SMTPAuth = true;

// $mail->Host = "smtp.example.com";
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
// $mail->Port = 587;

// $mail->Username = "heylolwait555@gmail.com";
// $mail->Password = "vuhllgchantpqjzd";

// $mail->setFrom("heylolwait555@gmail.com");
// $mail->addAddress($somemail);

// $mail->Subject = "Webpage example!";
// $mail->Body = "Welcome to my page!";

// $mail->send();

// header("Location: index.php");

// // $mail = new PHPMailer(true);
// // $mail->isSMTP();
// // $mail->Host = "smtp.example.com";
// // $mail->SMTPAuth = true;
// // $mail->Username = "heylolwait555@gmail.com";
// // $mail->Password = "vuhllgchantpqjzd";
// // $mail->SMTPSecure = 'ssl';
// // $mail->Port = 587;
// // $mail->setFrom('heylolwait555@gmail.com');
// // $mail->addAddress($somemail);
// // $mail->isHTML(true);
// // $mail->Subject = "Webpage example!";
// // $mail->Body = "Welcome to my page!";
// // $mail->send();
// // echo 
// // "
// // <script>
// // alert('Sent Successfully');
// // </script>

// // "

// }   else {
//     echo "Nesto";
// }


if(mysqli_query($conn, $sql)){
    // echo "<h3>data stored in a database successfully."
    //     . " Please browse your localhost php my admin"
    //     . " to view the updated data</h3>";
    header("Location: login.php");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}







// $sql = "select * from uporabnik where Email = '$email' and Geslo = '$pass'";  
// $result = mysqli_query($con, $sql); 
// if (mysqli_num_rows($result) === 1) {
//     $row = mysqli_fetch_assoc($result);
//     if ($row['Email'] === $email && $row['Geslo'] === $pass) {
//         echo "Logged in!";
//         $_SESSION['user_name'] = $row['user_name'];
//         $_SESSION['name'] = $row['name'];
//         $_SESSION['id'] = $row['id'];
//         header("Location: home.php");
//         exit();
//     }else{
//         header("Location: index.php?error=Incorect User name or password");
//         exit();
//     }
// }else{

//     header("Location: index.php?error=Incorect User name or password");

//     exit();

// }

// else{
// header("Location: index.php");
// exit();
// }










// $row = mysqli_fetch_array($result);  
// $count = mysqli_num_rows($result);  

// if($count == 1){  
//     echo "<h1><center> Login successful </center></h1>";  
// }  
// else{  
//     echo "<h1> Login failed. Invalid username or password.</h1>";  
// }    







CloseCon($conn);

?>