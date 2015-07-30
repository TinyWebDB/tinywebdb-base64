<?php
/*
 * base64_encode use tinywebdb i/f
 *
 * Written By: Hong Chen
 * Date: 2015/07/30
 * Contact: chen@edu2web.com
 */


//these are just in case setting headers forcing it to always expire and the content type to JSON
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');
header('Content-Disposition: attachment; filename="JSON"');


if(isset($_POST['tag']) && ($_SERVER['CONTENT_TYPE'] == "application/x-www-form-urlencoded")){  //checks ifthe tag post is there and if its been a proper form post
        echo json_encode(array("VALUE", $_POST['tag'], base64_encode( $_POST['tag'] )));
}
?>
