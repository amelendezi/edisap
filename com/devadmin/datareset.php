<?php

namespace devadmin;

use server\repository\RepositoryAdmin as RepositoryAdmin;
use server\repository\StorableType as StorableType;

/**
 * Description of clear
 *
 * @author amelendezi
 */
class DataReset {
    
    public function ClearAll()
    {
        $this->ClearApartments();
        $this->ClearBuildings();
    }
    
    public function ClearApartments()            
    {
        // Create RepositoryAdmin
        $repositoryAdmin = new RepositoryAdmin();
        $repositoryAdmin->ClearTable(StorableType::Apartment);        
    }
    
    public function ClearBuildings()
    {
        // Create RepositoryAdmin
        $repositoryAdmin = new RepositoryAdmin();
        $repositoryAdmin->ClearTable(StorableType::Building);        
    }   
}
