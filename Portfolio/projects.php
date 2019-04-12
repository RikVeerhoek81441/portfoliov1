<!DOCTYPE html>
<?php
require_once 'conn.php';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
    <!-- Required meta tags -->
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- favicon -->
  <link rel="icon" href="favicon.png" sizes="32x32" type="image/png">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbalk">
                
      <a class="navbar-brand " href="#">Portfolio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="nav nav-pills mr-auto">
          <li class="nav-item ">
            <a class="nav-link active navbutton" href="#">Projects <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  navbutton" href="about.html">About</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  navbutton" href="admin.html">Admin</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  navbutton" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbutton" href="https://github.com/RikVeerhoek81441?tab=repositories"><i class="far fa-address-book "></i></a>
          </li>
        </ul>
      </div>    
    </nav>
  <div class='container'>
  <?php
  $sql="SELECT * FROM `project` ORDER BY `ProjectId`";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($result)){
    
    echo "<div class='card item'>";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>$row[ProjectName]</h5>";
    echo "<p class='card-text'>$row[ProjectDescription]</p>";
    
    echo "</div>";
    echo "<img src='images/$row[ProjectPic1]' class='card-img-top md-4 itemimg'>";
    echo "</div>";
    

  }
  ?>
  </div>
    
      
        
        
        
      
      
      
    
  
  
</body>
<!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</html>