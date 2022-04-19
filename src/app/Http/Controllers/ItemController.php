<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;
use App\Models\Address;

class ItemController extends Controller
{

    public function test () {
        echo randomToken(20);
    }
}