<?php include "config.php" ; 
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Registracija</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
		  <li><a href="adminprijava.php" ><i class="fa fa-gear"></i> Admin</a></li>

              </ul>
            </nav>
      </header>
        
      </div>
      <body class="home-welcome-text" style="background-image: url(slike/slika8.jpg);">  
           <div class="header" style="margin-left:725px;">
              <h2>Izradite novi korisnički račun</h2>
           </div>
  
            <form method="post" action="signin.php" style="margin-left:500px;">
               <?php include('errors.php'); ?>
               <div class="form-group">
                 <label for="ime">Ime: </label>
                 <input type="text" class="form-control" name="ime" required maxlength="80" value="<?php echo $ime; ?>">
               </div> 
               <div class="form-group">
                 <label for="prezime">Prezime: </label>
                 <input type="text" class="form-control" name="prezime"  required maxlength="80" value="<?php echo $prezime; ?>">
                </div>

                <div class="form-group">
                 <label for="email">Email: </label>
                 <input type="email" class="form-control" name="email" required maxlength="80" value="<?php echo $email; ?>">
                </div>
                <div class="form-group">
                 <label for="password">Lozinka: </label>
                 <input type="password" class="form-control" name="lozinka_1">
                </div>
                <div class="form-group">
                 <label for="confirmpassword">Ponovite lozinku: </label>
                 <input type="password" class="form-control" name="lozinka_2">
                </div>
                <div class="form-group">
                      <button type="submit" class="btt" name="reg_user">Registriraj me</button>
                </div>
                  <br/>
                  
               <p style="text-align:center; color:white;">
                  Već ste registrirani? <a href="login.php" style="color: #6d2453">Prijava</a></p>
            </form>
      </div>
 </body>
</html>
