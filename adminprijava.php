<?php include "config.php" ; 
?>
<?php


$con = mysqli_connect('localhost:3306', 'fpmoz192019', 'csdigital2019', 'fpmoz192019');


?>

<!doctype html>
<html>
    <head>
        <title>Admin prijava</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body class="home-welcome-text"style="background-image: url(slike/slika8.jpg);">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="/js/homeslideshow.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
        crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
         crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
         crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" 
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

<header>
         <div class="homepageheader" style="position: inherit;"> 
            
         <div class="logo">
             <a href="index.php">
                  <img style=" height: 75px; width: 130px;" src="slike/slika7.jpg">
              </a>
          </div>

          <nav clas="izb">
              <ul>
                  <li><a href="index.php" ><i class="fa fa-home"></i> Naslovnica</a></li>
		  
                  

              </ul>
            </nav>
      </header>
        
      </div> 
           
        </div>
            <div class="container">
                <div>
                    <div>
                        <div class="signupform_content">
                           

                <div class="header">
                   <h2>Admin prijava</h2>
                </div> 
               
                 <form method="post" action="logincheck.php">
                
                  <div class="form-group">
                     <label for="ime">Ime: </label>
                     <input type="text" class="form-cont" name="user" >
                  </div>
                 <div class="form-group">
                     <label for="password">Lozinka: </label>
                     <input type="password" class="form-cont" name="pass">
                 </div>
                 <div class="form-group">
                      <button type="submit" class="btt" name="submit">Prijavi me</button>
                 </div>
                    <br/>
                    <br/>
                 
             </div>             
    </body>
</html>