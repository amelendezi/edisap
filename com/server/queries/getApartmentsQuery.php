<?php

namespace server\queries;

use server\repository\models\Apartment as Apartment;
use server\repository\Repository as Repository;
use server\repository\StorableType as StorableType;
use server\repository\Where as Where;

class GetApartmentsQuery {
    
    function Handle()
    {        
        // Create a repository
        $repository = new Repository();
        
        // Define query where condition
        $where = new Where();
        $where->Equals("building_instanceId", "0000-0000-0000");                        
        
        // Return request result
        return $repository->GetMultiple(StorableType::Apartment, $where);                
    }
}