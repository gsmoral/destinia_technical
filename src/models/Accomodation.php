<?php
namespace Src\Models;

class Accomodation
{
    protected $id;
    protected $name;
    protected $type;
    protected $city;
    protected $province;

    public function __construct($name, $type, $city, $province)
    {
        $this->name = $name;
        $this->type = $type;
        $this->city = $city;
        $this->province = $province;
    }

    public function showData()
    {
        return $this->name . ", " . $this->city . ", " . $this->province;
    }
}
?>