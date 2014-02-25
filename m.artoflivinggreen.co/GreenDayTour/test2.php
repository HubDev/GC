<?php 

$tour_id= explode("/",$_SERVER[REQUEST_URI]);
echo $tour_id[1];
?>