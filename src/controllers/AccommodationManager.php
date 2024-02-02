<?php
namespace Src\Controllers;

use Src\Models\Hotel;
use Src\Models\Apartment;

class AccommodationManager
{
    protected $db;

    public function __construct(\PDO $db)
    {
      $this->db = $db;
      try {
          // Set character encoding to display them correctly
          $this->db->exec("SET NAMES 'utf8mb4'");
      } catch (\PDOException $e) {
          // Handle database related exceptions
          $this->logError("Error setting character encoding: " . $e->getMessage());
      }
    }

    public function getAccommodationsByInput($input)
    {
      try {
        $inputWithWildcards = "%$input%";
        $stmt = $this->db->prepare("
            SELECT *
            FROM accommodations
            LEFT JOIN hotels ON accommodations.id = hotels.id
            LEFT JOIN apartments ON accommodations.id = apartments.id
            WHERE name LIKE :input
            ORDER BY name
        ");
        $stmt->bindParam(':input', $inputWithWildcards, \PDO::PARAM_STR);
        $stmt->execute();

        $accommodations = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            switch ($row['type']) {
                case 'Hotel':
                    $accommodations[] = new Hotel($row['name'], $row['city'], $row['province'], $row['stars'], $row['room_type']);
                    break;
                case 'Apartamento':
                    $accommodations[] = new Apartment($row['name'], $row['city'], $row['province'], $row['apartments_availables'], $row['adult_capacity']);
                    break;
                default:
                    break;
            }
        }

        return $accommodations;
      } catch (\PDOException $e) {
          // Handle database related exceptions
          throw new \Exception("Database query error: " . $e->getMessage());
      } catch (\Exception $e) {
          // Handle other exceptions
          throw new \Exception("Error obtaining accommodations: " . $e->getMessage());
      }
    }
}
?>
