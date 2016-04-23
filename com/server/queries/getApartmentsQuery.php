<?php

namespace server\queries;

use server\repository\Repository as Repository;
use server\repository\StorableType as StorableType;
use server\repository\Where as Where;

class GetApartmentsQuery {
    
    function Handle($params)
    {        
        // Create a repository
        $repository = new Repository();        
        
        // Define query where condition
        $where = new Where();               
        $where->Equals("building_instanceId", $params['building_instanceId']);                        
        
        // Return request result                
        return $repository->GetMultiple(StorableType::Apartment, $where);
    }
}