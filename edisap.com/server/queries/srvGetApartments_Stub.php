<?php
$apartment1 = new Apartment("1","Apt. 101","Donald Duck","Mickey Mouse");
$apartment2 = new Apartment("2","Apt. 102","Donald Duck","Goofy");
$apartment3 = new Apartment("3","Apt. 103","Donald Duck","Uncle Sam");
$apartment4 = new Apartment("4","Apt. 104","Snow White","Bert & Ernie");
$apartment5 = new Apartment("5","Apt. 105","Snow White","Cinderella");

$apartments[0] = $apartment1;
$apartments[1] = $apartment2;
$apartments[2] = $apartment3;
$apartments[3] = $apartment4;
$apartments[4] = $apartment5;

echo json_encode($apartments);

// Class definition
class Apartment {
    
    public $Id;
    public $Name;
    public $Owner;
    public $Resident;    
    
    function __construct($id, $name, $owner, $resident)
    {      
        $this->Id = $id;
        $this->Name = $name;
        $this->Owner = $owner;
        $this->Resident = $resident;        
    }
}