<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn= mysqli_connect($server, $username, $password, $database);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
echo"";
// session_start();

// if(isset($_POST['Login'])){
//     $name=$_POST['name'];
//     $email=$_POST['email'];
//     $number=$_POST['number'];
//     $password=$_POST['password'];

//     $sql = "INSERT INTO `users`(`name`, `email`, `password`, `phone_no`) VALUE($name, $email, $password, $number)";
//     if(mysqli_query($conn,$sql)){
//         echo = "Records inserted successfully.";
//     }else{
//         echo = "ERROR: could not able to execute $sql. " . mysqli_error($conn);
//     }
// }

session_start();
if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE `email` = `$email` AND `password` = `$password`";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_fetch_row($result)==1){
        header("location:index.php");
    }
    else{
        $error='emailid or password is incorrect';
    }
}

if(isset($_POST['job'])){
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $jdesc=$_POST['jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $job="INSERT INTO `jobs`(`cname`, `position`, `jdesc`, `skills`, `CTC`) VALUES ('$cname,' '$pos', '$jdsec','$skills','$CTC')";
    mysqli_query($conn,$job);;
    // if(mysqli_query($conn,$job  )){
    //     echo"New Job Posted";
    // }
    // else{
    //     echo"Error: Failed to Post the Job $sql. " . mysqli_error($conn);
    // }
}

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $year=$_POST['year'];
    
    $sql = "INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUE($name, $apply, $qual, $year)";
    mysqli_close($conn);
}

?>
