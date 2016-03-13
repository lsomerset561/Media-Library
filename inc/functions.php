<?php
//consider data included to functions.php so only one include statement

 //function is separate to use on other pages
function get_item_html($id, $item) {
  $output = "<li><a href='#'><img src ='" 
    . $item["img"] . "' alt= '" 
    . $item["title"] . "' />" 
    . "<p>View Details</p>" 
    . "</a></li>";
  return $output;
}