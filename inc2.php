<?php
session_start();
spl_autoload_register(function($className){

    include "classes1/$className.php";

});



?>