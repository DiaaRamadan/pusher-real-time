<?php

use Pusher\Pusher;

include('vendor/autoload.php');

$name = $_POST['name'];
$fname = $_POST['fname'];
$age = $_POST['age'];

$app_id = '1195187';
$app_key = '52e9eb68d6ce92e9a335';
$app_secret = '47bbc8cf4d757bfa25ff';
$app_cluster = 'eu';

$pusher = new Pusher($app_key, $app_secret, $app_id, array('cluster' => $app_cluster) );

$data = [
    'name' => $name,
    'fname' => $fname,
    'age' => $age
];

$pusher->trigger( 'demo_app', 'add_student', $data);

echo "<h1>Add successfully</h1>";
