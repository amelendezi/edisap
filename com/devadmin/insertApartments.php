<?php

namespace devadmin;

use server\repository\RepositoryAdmin as RepositoryAdmin;
use server\repository\models\Apartment as Apartment;
use server\repository\Repository as Repository;
use server\repository\StorableType as StorableType;

/**
 * Description of insertApartments
 *
 * @author amelendezi
 */
class InsertApartments {
    
    public function Run() {
                
        $repositoryAdmin = new RepositoryAdmin();               
        $repositoryAdmin->ClearTable(StorableType::Apartment);
        $repository = new Repository();
        
        $apartment1 = new Apartment("Apt. 101", "Walter Disney", "Donald Duck", "0000-0000-0000");
        $repository->Store($apartment1);
        $apartment1 = new Apartment("Apt. 102", "Walter Disney", "Mickey Mouse", "0000-0000-0000");
        $repository->Store($apartment1);
        $apartment1 = new Apartment("Apt. 103", "Walter Disney", "Goofy & Pluto", "0000-0000-0000");
        $repository->Store($apartment1);
        $apartment1 = new Apartment("Apt. 104", "Walter Disney", "Ernie & Bert", "0000-0000-0000");
        $repository->Store($apartment1);
        $apartment1 = new Apartment("Apt. 105", "Walter Disney", "Chip & Dale", "0000-0000-0000");
        $repository->Store($apartment1);
        $apartment1 = new Apartment("Apt. 106", "Walter Disney", "Roger Rabbit", "0000-0000-0000");
        $repository->Store($apartment1);        
    }    
}
