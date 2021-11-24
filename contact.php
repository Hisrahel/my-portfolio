<?php session_start();
$link = mysqli_connect('/', 'root', 'Olambeass1', 'israel');

$find_name = '';
if(isset($_POST['sub_message'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $sql_check = "SELECT * FROM contact WHERE name = '$name'";
  $result_check = mysqli_query($link, $sql_check);

  while($row_check = mysqli_fetch_assoc($result_check)){
  $find_name = $row_check['name'];
  }
  if($find_name != ""){
    echo "<script>alert('$name alraedy exist!')</script>";
  }else{
    $sql_insert = "INSERT INTO contact (name, email, subject, message) VALUES('$name', '$email', '$subject', '$message')";
    $result_insert = mysqli_query($link, $sql_insert);
    
    //error check
    printf('Errormessage: %s\n', mysqli_error($link));
  
    if($result_insert == true){
        echo "<script>alert('$name, your message has been delivered.')</script>";
    }else {
      echo "<script>alert('An error occurred during submission, please contact admin.')</script>";
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/letter-i-.jpg" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly - v4.7.0
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
    <div class="py-5">
      <h3 class="text-center">Thanks for your Message.</h3>    
      <p class="text-center"> Please click the <span><a href="index.html" class="btn btn-success">HOME</a></span> button to go back to the home page.</p>
</div>
</body>
</html>