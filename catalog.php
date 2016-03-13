<?php
//consider data included to functions.php so only one include statement
include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Full Catalog";
$section = null;

if (isset($_GET["cat"])) {
  //consider changing to switch statement
  if ($_GET["cat"] === "books") {
    $pageTitle = "Books";
    $section = "books";
  } else if ($_GET["cat"] === "movies") {
    $pageTitle = "Movies";
    $section = "movies";
  } else if ($_GET["cat"] === "music") {
    $pageTitle = "Music";
    $section = "music";
  }
}

include("inc/header.php"); ?>

<div class="section catalog page">

  <div class="wrapper" >
    <h1><?php 
      if ($section != null) {
        //link to full catalog if in a section & shows path
        echo "<a href='catalog.php'>Full Catalog</a> &gt ";
      }
      echo $pageTitle; ?>
    </h1>
    
    <ul class="items">
    <?php
  
      $categories = array_category($catalog, $section);
          
      //consider changing function parameters on index, catalog pages to $outerId & $innerItem to improve readability
      foreach ($categories as $id) {

        echo get_item_html($id, $catalog[$id]);
        //function is separate to use on other pages
      }
    ?>
    </ul>
 </div>
  
</div>

<?php include("inc/footer.php");
