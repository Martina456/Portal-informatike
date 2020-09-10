<?php
session_start();

$con = mysqli_connect('localhost:3306', 'fpmoz192019', 'csdigital2019', 'fpmoz192019' );
if($con){
    echo "Uspješno!";
}else{
    echo "Neuspješno..";
}
$db = mysqli_select_db($con, 'fpmoz192019');

if(isset($_POST['submit'])){
    $ime = $_POST['user'];
    $lozinka = $_POST['pass'];

    $sql = "SELECT * from admintable where user = '$ime' and pass = '$lozinka'";

    $query = mysqli_query($con, $sql);

        if(mysqli_num_rows($query) == 1){
            echo "Uspješna prijava";
            $_SESSION['user'] = $ime;
            header('location:adminpage.php');
        }else{
            array_push($errors, "Pogrešno ime ili lozinka");
            header('location:adminprijava.php');
        }
    }


?>