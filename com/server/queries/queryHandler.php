<?php

namespace server\queries;

/**
 * Routes a request to a given query handler.
 *
 * @author amelendezi
 */
class QueryHandler {
    
    public function Handle($queryName, $params) {                     
        $queryName = "server\\queries\\" . $queryName;      
        $queryInstance = new $queryName();             
        return $queryInstance->Handle($params);
    }
}
