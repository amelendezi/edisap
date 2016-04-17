<?php

namespace server\queries;

/**
 * Description of queryHandler
 *
 * @author amelendezi
 */
class QueryHandler {
    
    public function Handle($queryName, $params) {                     
        $queryName = "server\\queries\\" . $queryName;        
        $queryInstance = new $queryName();
        return $queryInstance->Handle();     
    }
}
