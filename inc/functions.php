<?php
//consider data included to functions.php so only one include statement

//consider changing function parameters on index, catalog pages to $outerId & $innerItem to improve readability

 //function is separate to use on other pages
function get_item_html($id, $item) {
  $output = "<li><a href='#'><img src ='" 
    . $item["img"] . "' alt= '" 
    . $item["title"] . "' />" 
    . "<p>View Details</p>" 
    . "</a></li>";
  return $output;
}

function array_category($catalog, $category) {
  $output = array();
  
  foreach ($catalog as $id => $item) {
    if ($category === null || strtolower($category) === strtolower($item["category"])) {
      $sort = $item["title"]; //assign title value in variable
      $sort = ltrim($sort,"The ");
      $sort = ltrim($sort,"A ");
      $sort = ltrim($sort,"An ");
      $output[$id] = $sort; //store title value to id key
    }
  }
  asort($output); //sorts according to title
  return array_keys($output);
}