<?php
session_start();
if(isset($_SESSION['u'])&& isset($_SESSION['p'])&& isset($_SESSION['role']))
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
     <!-- Favicon -->
  <link href="./favicon.png" rel="icon" />

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
  rel="stylesheet"
/>

<!-- Icon Font Stylesheet -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
  rel="stylesheet"
/>
<link
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
  rel="stylesheet"
/>

<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet" />
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" />

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet" />
</head>
<body>
<style>
body 
           {
            background-color:color-mix(in srgb, whitesmoke 50%, lightblue 50%);

           }
 
  
 </style> 
  <!-- Navbar Start -->
<div class="container-fluid nav-bar bg-transparent">
     <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
       <a
         href="home.php"
         class="navbar-brand d-flex align-items-center text-center"
       >
         <div class="icon p-2 me-2">
           <img
             class="img-fluid"
             src="./favicon.png"
             alt="Icon"
             style="width: 30px; height: 30px"
           />
         </div>
         <h1 class="m-0 text-primary">TENANT</h1>
       </a>
       <button
         type="button"
         class="navbar-toggler"
         data-bs-toggle="collapse"
         data-bs-target="#navbarCollapse"
       >
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarCollapse">
         <div class="navbar-nav ms-auto">
           <a href="home.php" class="nav-item nav-link active">Home</a>
           <a href="about.html" class="nav-item nav-link">About</a>

           <a href="payment.php" class="nav-item nav-link">Payment</a>
           <a href="profile.php" class="nav-item nav-link">Profile</a>
           
             <a href="propertydisplay.php" class="nav-item nav-link">Properties</a>

           <a href="contact.html" class="nav-item nav-link">Contact</a>
         </div>
         <a href="logout.php" class="btn btn-primary px-3 d-none d-lg-flex">Log out</a>
       </div>
     </nav>
   </div>
     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>

<?php

 $c= mysqli_connect("localhost","root","","project");
 if(!$c)
 {
    echo"Connection faield";
 }

  $r=$c->query("SELECT * FROM `agreement` WHERE Owner_Email='".$_SESSION['u']."' OR Tenant_Email='".$_SESSION['u']."'");

 if($r->num_rows >0)
  { 
     
   
    while ($row = $r->fetch_assoc())
   {
      echo " <div
      style='background:transparent;
      top: 20%;
      left: 30%;
      text-align:justify;
      position: absolute;
      width: 500px;
      height:fixed;
      padding: 50px;
      background: rgba(0,0,0,.5);
      box-sizing: border-box;
      box-shadow: 0 15px 25px rgba(0,0,0,.6);
      border-radius: 16px;
     '> 
      
     <div class=' wow fadeInUp' data-wow-delay='0.2s'>
     <h1 style='color: greenyellow; text-align:center;'> Lease Agreement </h1>
            
       <h5>
       
       <div class=' text-start text-lg-end wow slideInRight'  data-wow-delay='0.5s'>
        <img
          class='img-fluid'
          src='./favicon.png'
          alt='Icon'
          style='width: 100px; height: 100px'
        /> 
        </div>    
        <div class='col g-2'>
        
        Name of Owner:- <br><b style='color:whitesmoke;font-family:Times New Roman, Times, serif;' ><i>".$row["Owner_Name"]."</i></b> <br>
        Name of Tenant:-<br><b style='color:whitesmoke;font-family:Times New Roman, Times, serif;'><i>". $row["Tenant_Name"]."</i></b>
        
        <br><br>
        Rules and Conditions:-<br> <b style='color:whitesmoke; font-family:Times New Roman, Times, serif;'><i>". $row["Rules"]."</i></b><br><br>
        Start Date:- <b style='color:whitesmoke;font-family:Times New Roman, Times, serif;'><i>". $row["Start_Date"]."</i></b><br><br>
        End Date:- <b style='color:whitesmoke;font-family:Times New Roman, Times, serif;'><i>". $row["End_Date"]."</i></b><br>
        </h5>
       </div>
        </div>
      ";

    } 
  }

}
else
{
  header("location:index.html");
}
?>