<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$c= mysqli_connect("localhost","root","","project");
if(!$c)
{ 
   echo"Connection faield";
}
   
    if(isset($_POST['n1']) && isset($_POST['m'])&& isset($_POST["em"])&& isset($_POST["p"])&& isset($_POST['a']))
    { 
      
      $n=$_POST["n1"];
      $m=$_POST["m"];
      $em=$_POST["em"];
      $pw=$_POST["p"];
      $ad=$_POST['a'];
      $ro=$_POST["role"];
      $image=file_get_contents($_FILES['photo']['tmp_name']);
      $image=base64_encode($image);
      echo" $em , $pw";
      $r=$c->query("INSERT INTO `login` VALUES ('$n','$m','$ad','$em','$pw','$ro','$image')");
    
      $r=$c->query("SELECT * FROM login WHERE Email_ID='$em'" );
         
      if($r->num_rows > 0)
      {
        //Load Composer's autoloader
 require 'PHPMailer/Exception.php';
 require 'PHPMailer/SMTP.php';
 require 'PHPMailer/PHPMailer.php';
 
 //Create an instance; passing `true` enables exceptions
 $mail = new PHPMailer(true);
 
 try {
     
     $mail->isSMTP();                                            //Send using SMTP
     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
     $mail->Username   = 'youtenantbooster@gmail.com';                     //SMTP username
     $mail->Password   = 'ysoh nael vgzg roac';                               //SMTP password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
     $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
 
    
     $mail->setFrom('youtenantbooster@gmail.com', 'Tenant Boosters');
     $mail->addAddress($em, 'Tenant Boosters');     //Add a recipient
   
 
     //Content
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->Subject = 'Agrement Mail';
     $mail->Body    = "<br>
                        
                       Your Registration at Tenant Bosster is Done Succesfully!!.
                       
                       <b>  <i>Wellcome to TENANT BOOSTERS.  </i></b>
          
                       

                       <br>
                       <br> It is information by <b> Boosters</b> to you keep Update.
                       <br><br>
                       
                     
                       <b>  🇮🇳 Thank You🙂 <br>
                       <i> YourTenantBoosters </i> </b> ";
     
 
     $mail->send();
      
 }
  catch (Exception $e) {
     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
 }
 
 }
    
    
    
    
    
    }
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3,h1{
          color:whitesmoke;
        }
         
          a:hover
         {
           background: #239eb9;
           color: #fff;
           border-radius: 50px;
           box-shadow: 0 0 5px #289bb8,
                0 0 25px #289bb8,
                0 0 50px #289bb8,
                0 0 100px #289bb8;
          }
           body 
             {
               text-align:center;
               background-image: url('bg1.jpg');
             }
         
  .btn:hover {
    background: #239eb9;
    color: #fff;
    border-radius: 30px;
    box-shadow: 0 0 5px #289bb8,
                0 0 25px #289bb8,
                0 0 50px #289bb8,
                0 0 100px #289bb8;
  }
  
  .btn span {
    position: absolute;
    display: block;
  }
        </style>  

</head>
<body>
 <script>
  window.alert("Regesterd Sussesfully!!");
  </script>
  <h1> Go to Login Page </h1>
  <br>
  <br>
  <a  href="index.html"> <button class=btn> Continue  </button> </a>
</body>
</html>