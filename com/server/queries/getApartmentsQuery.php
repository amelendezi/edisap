<?php

namespace server\queries;

use server\repository\models\Apartment as Apartment;

class GetApartmentsQuery {
    
    function Handle()
    {
        // TODO: pending repository implementation for getting apartments by building.
        $apartment1 = new Apartment("Apt. 101","Donald Duck","Mickey Mouse", "0000-0000-0000");
        $apartment2 = new Apartment("Apt. 102","Donald Duck","Goofy", "0000-0000-0000");
        $apartment3 = new Apartment("Apt. 103","Donald Duck","Uncle Sam", "0000-0000-0000");
        $apartment4 = new Apartment("Apt. 104","Snow White","Bert & Ernie", "0000-0000-0000");
        $apartment5 = new Apartment("Apt. 105","Snow White","Cinderella", "0000-0000-0000");
        $apartments[0] = $apartment1;
        $apartments[1] = $apartment2;
        $apartments[2] = $apartment3;
        $apartments[3] = $apartment4;
        $apartments[4] = $apartment5;
        return $apartments;
    }
}