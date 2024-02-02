<?php
namespace Src\Models;

class Apartment extends Accomodation
{
    protected $apartmentsAvailables;
    protected $adultCapacity;

    public function __construct($name, $city, $province, $apartmentsAvailables, $adultCapacity)
    {
        parent::__construct($name, 'Apartamento', $city, $province);
        $this->apartmentsAvailables = $apartmentsAvailables;
        $this->adultCapacity = $adultCapacity;
    }

    public function showData()
    {
        return parent::showData() . ", " . $this->apartmentsAvailables . " apartamentos, " . $this->adultCapacity . " adultos";
    }
}
?>
