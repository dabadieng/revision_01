<?php
if(isset($_POST["Vendre"])) {
    header("location:vendre.php");
}else if(isset($_POST["Acheter"])) {
    header("location:acheter.php");
}else if(isset($_POST["Louer"])) {
    header("location:louer.php");
}