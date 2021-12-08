<!DOCTYPE html>
<html>
  <body>
    <!-- [SEARCH FORM] -->
    <form method="post" action="1-form.php">
      <h1>SEARCH FOR USERS</h1>
      <input type="text" name="search" required/>
      <input type="submit" value="Search"/>
    </form>
<a href="<?php printf('%s?item_id=%s', 'product.php',  $item['item_id']); ?>">
    <?php
    if (isset($_POST['search'])) {
      // SEARCH FOR USERS
      require "2-search.php";

      // DISPLAY RESULTS
      if (count($results) > 0) {
        foreach ($results as $r) {
         
          printf("<div>%s - %s</div>", $r['item_name'], $r['item_brand']);
       
       
        }
      } else {
        echo "No results found";
      }
    }
    ?>
    </a>
  </body>
</html>
