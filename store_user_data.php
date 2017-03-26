<?php


define('FACEBOOK_APP_ID', '1536008519983927'); // Place your App Id here
define('FACEBOOK_SECRET', '730c8de7c8dfcd6044e3519ed3442571'); // Place your App Secret Here

// No need to change the function body
function parse_signed_request($signed_request, $secret) 
{
list($encoded_sig, $payload) = explode('.', $signed_request, 2);
// decode the data
$sig = base64_url_decode($encoded_sig);
$data = json_decode(base64_url_decode($payload), true);
if (strtoupper($data['algorithm']) !== 'HMAC-SHA256')
{
error_log('Unknown algorithm. Expected HMAC-SHA256');
return null;
}

// check sig
$expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
if ($sig !== $expected_sig) 
{
error_log('Bad Signed JSON signature!');
return null;
}
return $data;
}
function base64_url_decode($input) 
{
return base64_decode(strtr($input, '-_', '+/'));
}
if ($_REQUEST) 
{
$response = parse_signed_request($_REQUEST['signed_request'],
FACEBOOK_SECRET);




// Connecting to database

mysql_connect('mysql2.000webhost.com', 'a2499537_local', 'datapart1');
mysql_select_db('a2499537_login');

$email = $response["registration"]["email"];
$password = $response["registration"]["password"];

// Inserting into login table
$result = mysql_query("INSERT INTO login (id, username, password) VALUES ('null', '$email', '$password')");

if($result){
// User successfully stored
}
else
{
// Error in storing
}
}
else 
{
echo '$_REQUEST is empty';
}
?>