<?php

namespace server\queries;

use server\repository\Repository as Repository;
use server\repository\StorableType as StorableType;
use server\repository\Where as Where;

/**
 * Description of getBuildingQuery
 *
 * @author amelendezi
 */
class GetBuildingQuery {
    
    function Handle($params)
    {        
        // Create a repository
        $repository = new Repository();        
        
        // Define query where condition
        $where = new Where();               
        $where->Equals("instanceId", $params['instanceId']);                        
        
        // Return request result                
        return $repository->GetSingle(StorableType::Building, $where);
    }
}
