<?php

namespace devadmin;

use server\repository\models\Apartment as Apartment;
use server\repository\models\Building as Building;
use server\repository\Repository as Repository;

/**
 * Description of insertApartments
 *
 * @author amelendezi
 */
class Datasets {
    
    private $repository;
    
    function __construct() {
        $this->repository = new Repository();
    }
    
    public function LoadApartment() {                                
        $storables[0] = new Apartment("Room  101", "Walt Disney", "Mickey Mouse", "0000-0000-0000");
        $this->StoreSet($storables);        
    }        
    
    public function LoadBuilding()
    {        
        $storables[0] = new Building("Magic Kingdom");
        $storables[0]->instanceId = "0000-0000-0001";
        $this->StoreSet($storables);        
    }    
    
    public function LoadDataset1()
    {               
        $building = new Building("Magic Kingdom");
        $building->instanceId = "0000-0000-0001";        
        $buildingId = $building->instanceId;
        
        $storables[0] = $building;        
        $storables[1] = new Apartment("Room 101", "Walter Disney", "Mickey Mouse", $buildingId);
        $storables[2] = new Apartment("Room 202", "Walter Disney", "Donald Duck", $buildingId);
        $storables[3] = new Apartment("Room 303", "Walter Disney", "Goofy", $buildingId);
        $storables[4] = new Apartment("Room 404", "Walter Disney", "Pluto", $buildingId);
        $storables[5] = new Apartment("Room 505", "Walter Disney", "Tom & Jerry", $buildingId);
                
        $this->StoreSet($storables);
    }
    
    public function LoadDataset2()
    {                
        $building = new Building("Neverland");
        $building->instanceId = "0000-0000-0002";
        $buildingId = $building->instanceId;
        $storables[0] = $building;
        
        $storables[1] = new Apartment("Hut 1", "Peter Pan", "Tinker Bell", $buildingId);
        $storables[2] = new Apartment("Hut 2", "Peter Pan", "Hoodles", $buildingId);
        $storables[3] = new Apartment("Hut 3", "Peter Pan", "Captain Hook", $buildingId);
        $storables[4] = new Apartment("Hut 4", "Peter Pan", "Mr. Smee", $buildingId);
        $storables[5] = new Apartment("Hut 5", "Peter Pan", "Wendy", $buildingId);
        
        $this->StoreSet($storables);                
    }    
    
    private function StoreSet($storables) {
        foreach ($storables as $storable) {
            $this->repository->Store($storable);
        }
    }
}
