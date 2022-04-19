<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonsRequest;
use App\Http\Requests\UpdatePersonsRequest;
use App\Models\Persons;
use App\Services\PersonsServices;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $thisPersons;
    public function __construct(PersonsServices $personsServices)
    {
        $this->thisPersons = $personsServices;
        //$this->middleware('auth');
    }
    public function index(Request $request)
    {
        //$a = $request->input('id');
        $persons = $this->thisPersons->getPerson();
        $showAddress = Address::all();

        return view("viewPersons", [
            'persons' => $persons,
            'id' => $showAddress
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        // dieu kien 
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',


        ]);

        $query = DB::table('persons')->DB::insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'sex' => $request->input('sex'),
            'phone' => $request->input('phone'),
            'address_id' => $request->input('address_id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePersonsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persons  $persons
     * @return \Illuminate\Http\Response
     */
    public function show(Persons $persons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persons  $persons
     * @return \Illuminate\Http\Response
     */
    public function edit(Persons $persons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonsRequest  $request
     * @param  \App\Models\Persons  $persons
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonsRequest $request, Persons $persons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persons  $persons
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persons $persons)
    {
        //
    }
}
