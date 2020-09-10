
<?php 
session_start()
?>

<!DOCTYPE html>
<html>
 <head>
        <title>Admin naslovnica</title>
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
            <button class="logout" style="color:white;"><a href="adminprijava.php" style="color:white;">Odjava</a></button>
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
           
 <?php
    $link = mysqli_connect('localhost:3306', 'fpmoz192019', 'csdigital2019', 'fpmoz192019');
?>
  
   
     <div class="admin">
     <form action="" method="POST">
                        <div class="h2">
                        <h1 style="color: #6d2453">Dodaj novi zadatak</h1>
                        </div></br></br>
                        <input placeholder="Naziv" type="text" name="naziv" required>
                        
                        <input type="file" name="slika" accept="slike/*">
                        <button type="submit" value="submit" name="submit" class="btt">Dodaj zadatak</button>
                        <?php
                        if(isset($_POST['submit'])){
                            $insert_query = "INSERT INTO 
                            zadaci (  slika,
                                            naziv)
                                            
                            VALUES (        'slike/".$_POST['slika']."',
                                            '".$_POST["naziv"]."')";
                            mysqli_query($link,$insert_query);}
                        ?>
                    </form>


    
     </div>
     



    </body>

</html>