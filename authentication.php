<?php

include 'db_connnection.php';

$conn = OpenCon();


////////////////////////////////////////////////////////////////////////////////////////
//TRYOUT SAM 

// $uname = validate($_POST['name']);
// $lastname = validate($_POST['surname']);
// $pass = validate($_POST['password']);
// $email = validate($_POST['exampleInputEmail1']);


// $uname = $_POST['name'];
// $pass = $_POST['password'];                  //RABOTI SAMO SO OBICNI PASS NE HASHNATI



// $uname = stripcslashes($uname);  
// $lastname = stripcslashes($lastname);  
// $pass = stripcslashes($pass);  
// $email = stripcslashes($email);                                 //To escape SQL injection 
// $uname = mysqli_real_escape_string($con, $uname);  
// $lastname = mysqli_real_escape_string($con, $lastname);  
// $pass = mysqli_real_escape_string($con, $pass); 
// $email = mysqli_real_escape_string($con, $email); 
   


// $sql = "SELECT * FROM uporabnik WHERE Ime = '$uname' AND Geslo = '$pass' LIMIT 1";  
// $result = mysqli_query($conn, $sql); 
// if(mysqli_num_rows($result) == 1){
//     echo "Top e";
//     header("Location: index.html");                      //RABOTI SAMO SO OBICNI PASS NE HASHNATI
//     exit();
// } else {
//     header("Location: login.php");
//     // $message = "wrong answer";
//     // echo "<script type='text/javascript'>alert('$message');</script>";
//     exit();
// }

/////////////////////////////////////////////////////////////////////////////////
//TRETI TRYOUT

$uname = $_POST['name'];
$pass = $_POST['password']; 


$sql = "SELECT * FROM uporabnik WHERE Ime = '$uname'";  
// $result = mysqli_query($conn, $sql); 
// $row = mysql_fetch_assoc($result);

// $pwdHashed = $row["Geslo"];
// $checkpass = password_verify($pass, $pwdHashed);





// $sql1 = "SELECT Geslo FROM uporabnik WHERE Ime = '$uname'"; 
// $result = mysqli_query($conn, $sql1);
// // $pwdHashed = $result;
// $checkpass = password_verify($pass, $result);


$result = $conn->query($sql);
$row = $result->fetch_assoc();
$pwdHashed = $row["Geslo"];
$checkpass = password_verify($pass, $row["Geslo"]);
   echo "id: " . $row["ID"]. " - Name: " . $row["Ime"]. " " . $row["Priimek"]. "Email: " . $row["Email"]. "I PASSWORD: " . $row["Geslo"]. "<br>";
    echo $checkpass;
// $primer = password_get_info($pwdHashed);
// echo "$primer";

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//     //   echo "id: " . $row["ID"]. " - Name: " . $row["Ime"]. " " . $row["Priimek"]. "Email: " . $row["Email"]. "I PASSWORD: " . $row["Geslo"]. "<br>";
//     // $pwdHashed = $row["Geslo"];
//     $checkpass = password_verify($pass, $row["Geslo"]);


    // if($checkpass == false){
    //     echo "Ne e dobro.";                      
    //     exit();
    // } else if($checkpass == true) {
    //     session_start();
    //     $_SESSION["ID"] = $row["ID"];
    //     $_SESSION["Ime"] = $row["Ime"];
    //     header("Location: index.html");
    //     exit();
    // }




//     }
//   } else {
//     echo "0 results";
//   }


if($checkpass == false){
    echo "Ne e dobro.";                      
    exit();
} else if($checkpass == true) {
    session_start();
    $_SESSION["ID"] = $row["ID"];
    $_SESSION["Ime"] = $row["Ime"];
    header("Location: index.php");
    exit();
}





////////////////////////////////////////////////////////////////////////////////////////
//TRYOUT SO YT VIDEO

// if(isset($_POST["submit"])) {
//     $uname = $_POST['name'];
//     // $email = $_POST['exampleInputEmail1'];
//     $pass = $_POST['password'];  
    
//     require_once 'functions.inc.php';


//     function uidExists($conn, $uname) {
//         $sql = "SELECT * FROM uporabnik WHERE Ime = '$uname' LIMIT 1";
//         $stmt = mysqli_stmt_init($con);
//         $result = mysqli_query($conn, $sql);
//         // if(!mysqli_stmt_init($stmt, $sql)) {
//         //     header("location: ../login")
//         // }

//         // mysqli_stmt_bind_param($stmt, )
//         // $resultData = mysqli_stmt_get_result($stmt)
//         $row = mysqli_fetch_assoc($result);
//     }


//     // if(emptyInputLogin($conn, $uname, $pass) !== false){
//     //     header("location: ../login.php?error=emptyinput");
//     //     exit();
//     // }


//     function loginUser($conn, $uname){
//         $uidExists = uidExists($conn, $uname);


//         $pwdHashed = $uidExists["Geslo"];
//         $checkpass = password_verify($pass, $pwdHashed);

//         if($checkpass == false){
//                 echo "Ne e dobro.";                      
//                 exit();
//             } else if($checkpass == true) {
//                 session_start();
//                 $_SESSION["ID"] = $row["ID"];
//                 $_SESSION["Ime"] = $row["Ime"];
//                 header("Location: index.html");
//                 exit();
//             }
//     }


// } 
// else {
//     header("location: ../login.php");
//     exit();
// }





CloseCon($conn);

?>