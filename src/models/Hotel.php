<?php
namespace Src\Models;

class Hotel extends Accomodation
{
    protected $stars;
    protected $roomType;

    public function __construct($name, $city, $province, $stars, $roomType)
    {
        parent::__construct($name, 'Hotel', $city, $province);
        $this->stars = $stars;
        $this->roomType = $roomType;
    }

    public function showData()
    {
        return parent::showData() . ", " . $this->stars . " estrellas, " . $this->roomType;
    }
}
?>
