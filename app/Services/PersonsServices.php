<?php

namespace App\Services;

use App\Models\Persons;

class PersonsServices
{
    function getPerson()
    {
        $personQueries = Persons::query();

        $persons = $personQueries->get();
        return $persons;
    }
}
