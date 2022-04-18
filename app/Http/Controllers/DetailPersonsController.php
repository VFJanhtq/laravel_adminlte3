<?php

namespace App\Http\Controllers;

use App\Services\PersonsServices;

use App\Models\Persons;
use Illuminate\Http\Request;

class DetailPersonsController extends Controller
{


    public function detail($id)
    {

        $persons = Persons::where('id', $id)->first();
        //$showAddress = Persons::all();
        return view("detailPersons", ['persons' => $persons]);
    }

    public function delete($id)
    {
        $delete = Persons::where('id', $id)->delete();
        if (!$delete) {
            return redirect()->back();
        } else {
            return redirect()->route('viewPersons');
        }
    }
}
