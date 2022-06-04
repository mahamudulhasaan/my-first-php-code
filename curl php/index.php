

<?php 

$url = 'https://jsonlanceholder.typicode.com/users';
// simple example to get deta.
$resours = curl_init($url) ;
curl_setopt($resours , CURLOPT_RETURNTRANSFER, true) ;
$result = curl_exec($resours) ;
echo $result ;

// Get response status code 
// set_out_array
// post request

?>