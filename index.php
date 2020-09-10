<?php include "config.php";?>
<?php 

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['ime']);
    header("location: index.php");
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Portal informatike</title>
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
  <div class="content">
      <!-- notification message -->
       <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
   <?php endif ?>
  
   </div>
    <body>
    <header>
         <div class="homepageheader"> 
         <?php if( isset($_SESSION['ime']) && !empty($_SESSION['ime']) )
           {
          ?>
          <button class="logout" style="color:white;"><a href="index.php?logout='1'" style="color:white;">Odjava</a></button>
          
            <?php }else{ ?>
	  <button class="login" style="color:white;"><a href="login.php" style="color:white;">Prijava</a></button>
          <button class="signin" style="color:white;"><a href="signin.php" style="color:white;">Registracija</a></button>
         
           
            
             <?php } ?>    
         <div class="logo">
             <a href="index.php">
                  <img style=" height: 75px; width: 130px;" src="slike/slika7.jpg">
              </a>
          </div>

          <nav clas="izb">
              <ul>
                  <li><a href="index.php" ><i class="fa fa-home"></i> Naslovnica</a></li>
		  <li><a href="#onama" ><i class="fas fa-caret-right"></i> O nama</a></li>
                  <li><a href="#zadaci" ><i class="fas fa-caret-right"></i> Zadaci</a></li>
                  <li><a href="#kontakt" ><i class="fa fa-envelope"></i> Kontakt</a></li>
                  <li><a href="adminprijava.php" ><i class="fa fa-gear"></i> Admin</a></li>

              </ul>
            </nav>
      </header>
        
      </div>
       
       
         
       
        <div class="home-welcome">
            <div class="home-welcome-text" style="background-image: url(slike/slika10.jpg); height: 380px; ">
                <h1 style="margin: 0px;">Portal informatike</h1>
            </div>
        </div>

        <div class="onama" id="onama"></br></br></br></br>
       
        <div class="row">
              <div class = "column">
                       <div class= "column-left">
                           <img style =" width:400px; height: 500px;" src="slike/slika9.jpg"></br></br></br></br></br></br>
                          
                        </div>
                        
                             
                 </div>
            <div class="row">
            <div class="column-right">
                <h3 style="text-align:center;" >O nama</h3>
                <p class="portal"></br></br>Informatika je područje ljudskog djelovanja koje se bavi proučavanjem, 
			razvojem i uporabom postupaka i uređaja za automatski prijenos i obradu podataka.
 			Pod informatikom se danas najčešće podrazumijeva predmet kojeg uče srednjoškolci 
			i važno je istaknuti da se razlikuje od predmeta računarstvo, iako sadrži i osnove 
			računarstva. U informatici se više daje naglasak na informacije, postupke, načine 
			obrade podataka i primjenu računala i informatičkih uređaja, dok je manje riječ o 
			samim računalima i njihovoj unutarnjoj građi, čime se više bavi računarstvo.</br></br>
			Ova stranica služi kako bi  što bolje učenici, studenti i i svi oni koji žele znati 
			nešto  više s područja informatike mogli samostalno se provjeravati rješavajući zadatke. 
			Na ovoj stranici imamo više tipova zadataka iz različitih područja informatike. </br> </br>
			Za sve nejasnoće možete nam se obratiti na e-mail koji se nalaz na dnu stranici ili nas kontaktirajte na dole navedeni broj.
			Sa zadovoljstvom ćemo vam pomoći da što lakše riješite  poteškoće na koje ste naišli prilikom rješavanja zadataka.

                </p>
               </div>
                        
               </div>
        </div>
        <div class="home-prodlist">
            <div class="col2-tekst" id = "zadaci"></br></br>
        
            <h3 style="text-align: center;">ZADACI</h3>
            </div>
  <?php if( isset($_SESSION['ime']) && !empty($_SESSION['ime']) )
  
           {?>
          <div class="row">
          <?php
           $result = $con->query("SELECT * FROM zadaci ORDER BY id ASC"); 
           if($result->num_rows > 0){  
               while($row = $result->fetch_assoc()){ 
          ?>
	  <div class="col-md-3">
          <form method="post" >
          <div class="products">
          <img src="<?php echo $row["slika"] ?>" class="img-responsive"style="width:380px; height:380px;"></br>
          </div>
          </form>
</div>
        <?php 
               }
            }
        ?>
        
        </div> 
            <?php }else{ 
          ?>  
<div class="row1">
            <div class="column1">
               <img src='slike/slika1.jpg' alt="Zadatak 1., 2., 3., 4." style="width:100%">
               <!-- Button trigger modal -->
               <button type="button" class="btt" data-toggle="modal" data-target="#exampleModal1">Zadatak 1., 2., 3., 4.</button>
               <!-- Modal -->
                  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Zadatak 1., 2., 3., 4.</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                       <div class="modal-body">
                            <div class="rowmod">
                               <div class = "columnmod">
                                  
                                    <img style =" width:480px; height: 400px;" src="slike/slika1.jpg"></br></br></br></br></br></br>
                          
                                    
                        
                             
                                 </div>
                             
                              
                            </div>
                          </div>
                       <div class="modal-footer">
                          <button type="button" class="btt" data-dismiss="modal">Zatvori</button>
                          <script>$(function () {
  $('[data-toggle="popover"]').popover()
})</script>
                          
                          
                       </div>
                       </div>
                     </div>
                   </div>
            </div>
            <div class="column1">
                <img src="slike/slika2.jpg" alt="Zadatak 5." style="width:100%">
                <!-- Button trigger modal -->
               <button type="button" class="btt" data-toggle="modal" data-target="#exampleModal2">Zadatak 5.</button>
               <!-- Modal -->
                  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Zadatak 5.</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                       <div class="modal-body">
                       <div class="rowmod">
                               <div class = "columnmod">
                                  
                                    <img style =" width:480px; height: 400px;" src="slike/slika2.jpg"></br></br></br></br></br></br>
                          
                                                            
                                 </div>
                             
                               
                            </div>
                       </div>
                       <div class="modal-footer">
                          <button type="button" class="btt" data-dismiss="modal">Zatvori</button>
                          <script>$(function () {
  $('[data-toggle="popover"]').popover()
})</script>
                         
                       </div>
                       </div>
                     </div>
                   </div>
            </div>
            <div class="column1">
                <img src="slike/slika3.jpg" alt="Zadaci 6.-11." style="width:100%">
                <!-- Button trigger modal -->
               <button type="button" class="btt" data-toggle="modal" data-target="#exampleModal3">Zadaci 6.-11.</button>
               <!-- Modal -->
                  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Zadaci 6.-11.</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                       <div class="modal-body">
                       <div class="rowmod">
                               <div class = "columnmod">
                                 
                                    <img style =" width:480px; height: 400px;" src="slike/slika3.jpg"></br></br></br></br></br></br>
                          
                                                            
                                 </div>
                             
                              
                            </div>
                       </div>
                       <div class="modal-footer">
                          <button type="button" class="btt" data-dismiss="modal">Zatvori</button>
                          
                       </div>
                       </div>
                     </div>
                   </div>
                </div>
                  <?php   } ?> 
       </div>
       </br></br>

        
        <div >
            <div class = "kontakt-area" id = "kontakt">
                
                       <div class = "col2-tekst">
                          </br></br>
                           <h2>KONTAKT INFO </h2>
                 
                       </div>
             </div>
	    <div class="row2">
              <div class = "column2">
                       <div class= "column2-left">
                           
                        </div>
                        
                             
            </div>
            <div class="row2">
                   
                     
                     <div class= "kont-podaci">
                  		<div class="column2-right">
                                     <div class="podaci">
					
                                         <i class="fa fa-plane"></i>
                                         <h4>Email</h4>
                                         <span> info@portalinformatika.com</span>
                                      </div> 
                                   
                                   </br>
                                  
                                     <div class="podaci">
                                         <i class="fa fa-phone" align="center"></i>
                                         <h4>Telefon</h4>
                                         <span> +38712345678 </span>
                                     </div> 
                                     
                                   </br>
				</div>
                                
                         
                  
                    </div>
               </div>
            </div>
            




        </div> 
        <hr class=h>
          <div class="footer">
		<div class = "col2-tekst">
             </br></br></br><h5> Portal informatike - Antonela Prusina, Martina Zovko</h5>
		</div>
          </div>
  
                
    </body>
</html>
