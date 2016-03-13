<?php
//consider data included to functions.php so only one include statement
include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Personal Media Library";
$section = null;

include("inc/header.php"); ?>

<div class="section catalog random">

  <div class="wrapper">

    <h2>May we suggest something?</h2>

      <ul class="items">
        <?php 
          $random = array_rand($catalog, 4);
          
          //consider changing function parameters on index, catalog pages to $outerId & $innerItem to improve readability
          foreach ($random as $id) {
            
            echo get_item_html($id, $catalog[$id]);
            //function is separate to use on other pages
          }
        ?>								
      </ul>

  </div>

</div>

<?php include("inc/footer.php");
