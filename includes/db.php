
<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/fir-series-f0267-firebase-adminsdk-khjyq-80154f3263.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    // The following line is optional if the project id in your credentials file
    // is identical to the subdomain of your Firebase project. If you need it,
    // make sure to replace the URL with the URL of your project.
    ->withDatabaseUri('https://fir-series-f0267.firebaseio.com/')
    ->create();

$database = $firebase->getDatabase();

?>