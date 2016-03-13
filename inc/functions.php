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
  if ($category === null) {
    return array_keys($catalog);
  }
  $output = array();
  foreach ($catalog as $id => $item) {
    if (strtolower($category) === strtolower($item["category"])) {
      $output[] = $id;
    }
  }
  return $output;
}