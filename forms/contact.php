<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'contact@example.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
  ?>

<?php 

// session_start();
// $link = mysqli_connect('localhost', 'root', 'Olambeass1', 'israel');

// $find_name = '';
// if(isset($_POST['sub_message'])){
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $subject = $_POST['subject'];
//     $message = $_POST['message'];

//     $sql_check = "SELECT * FROM contact WHERE name = '$name'";
//     $result_check = mysqli_query($link, $sql_check);
  
//     while($row_check = mysqli_fetch_assoc($result_check)){
//     $find_name = $row_check['name'];
//     }
//      if($find_name != ""){
//         echo "<script>alert('$name alraedy exist!')</script>";
//        }else{
//         $sql_insert = "INSERT INTO contact (name, email, subject, message) VALUES('$name', '$email', '$subject', '$message')";
//         $result_insert = mysqli_query($link, $sql_insert);
        
        //error check
//         printf('Errormessage: %s\n', mysqli_error($link));
      
//         if($result_insert == true){
//             echo "<script>alert('$name, you have logged in successfully, you are now qualified for the promo')</script>";
//         }else {
//           echo "<script>alert('An error occurred during submission, please contact admin.')</script>";
//         }
//     }
// }
?> 
