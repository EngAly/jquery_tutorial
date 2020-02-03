<?php
$name=$_POST['name'];
    if(isset($name) && !empty($name)) {
        echo json_encode(array("getName" => $name));
    }
?>