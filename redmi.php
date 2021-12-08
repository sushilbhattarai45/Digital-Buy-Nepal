<?php
    ob_start();
    // include header.php file
    include ('header.php');
?>

<?php

    /*  include banner area  */


        include ('Template/_banner-area.php');


        include ('Template/redmi-area.php');
    /*  include banner area  */
         include ('Template/_banner-ads.php');
    /*  include banner ads  */

    /*  include new phones section  */
        include ('Template/_new-phones.php');
    /*  include new phones section  */

  

?>


<?php
// include footer.php file
include ('footer.php');