<?php

#----------------------------------------------------
# from: http://docs.jquery.com/UI/Autocomplete
# the local data can be a simple array of strings,
# or it contains objects for each item in the array,
# with either a 'label' or 'value' property, or both.
#----------------------------------------------------

$ak = array('label' => 'Alaska');
$al = array('label' => 'Alabama');
$ar = array('label' => 'Arkansas');

$arr[0] = $ak;
$arr[1] = $al;
$arr[2] = $ar;

if (strpos('Alaska', $_GET['term']) === 0) {
  $arr[0]=$arr[0]." - exists";
}
if (strpos('Alabama', $_GET['term']) === 0) {
  $arr[1]=$arr[1]." - exists";
}
if (strpos('Arkansas', $_GET['term']) === 0) {
  $arr[2]=$arr[2]." - exists";
}

# echo the json data back to the html web page
echo json_encode($arr).'\n';

?>
