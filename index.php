<?php
require_once __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;
use Src\Controllers\AccommodationManager;
use Src\Models\Apartments;
use Src\Models\Accommodation;
use Src\Models\Hotel;

try {
    // Load environment variables from .env file
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    
    // Load database variables connection
    $dbHost = $_ENV['DB_HOST'];
    $dbPort = $_ENV['DB_PORT'];
    $dbName = $_ENV['DB_DATABASE'];
    $dbUser = $_ENV['DB_USERNAME'];
    $dbPass = $_ENV['DB_PASSWORD'];

    // Get only three first letters standard input
    $input = isset($argv[1]) ? substr($argv[1], 0, 3) : null;

    // Create the connection to the database
    $db = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPass);

    // Create an instance of AccommodationManager
    $accommodationManager = new AccommodationManager($db);

    // Get accommodations
    $accommodations = $accommodationManager->getAccommodationsByInput($input);

    // Print accommodations data
    foreach ($accommodations as $accommodation) {
        echo $accommodation->showData() . "\n";
    }
} catch (\PDOException $e) {
    // Handle database related exceptions
    echo "Database error: " . $e->getMessage();
} catch (\Exception $e) {
    // Handle other exceptions
    echo "General error: " . $e->getMessage();
} finally {
    // Close the connection to the database if necessary
    if (isset($db)) {
        $db = null;
    }
}

?>

