<?php
include('autoloader.php');


if(isset($_POST['search'])) {

$search=new Search();
$search->search();
}

?>