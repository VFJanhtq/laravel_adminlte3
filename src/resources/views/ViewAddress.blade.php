@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">You are logged in!</h1>
    </div>
    <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col-md">

                <input type="text" name="searchfor" id="" class="form-control">
                <div class="card">
                    <div class="card-header">ADRESS_VIEW</div>
                    <div class="card-body">
                        <table class="table table-hover table-condensed" id="counties-table">
                            <thead>
                                {{-- <th><input type="checkbox" name="main_checkbox"><label></label></th> --}}
                                <th>ID</th>
                                <th>Address</th>
                                <th>Actions <button class="btn btn-sm btn-danger d-none" id="deleteAllBtn">Delete
                                        All</button></th>
                            </thead>
                            <tbody>
                                @foreach ($showaddress as $i)
                                    <tr>
                                        <td>{{ $i->id }}</td>
                                        <td>{{ $i->address }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Add new Country</div>
                    <div class="card-body">
                        <form action="" method="POST" id="add-country-form" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <label for="">Country name</label>
                                <input type="text" class="form-control" name="country_name"
                                    placeholder="Enter country name">
                                <span class="text-danger error-text country_name_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Capital city</label>
                                <input type="text" class="form-control" name="capital_city"
                                    placeholder="Enter capital city">
                                <span class="text-danger error-text capital_city_error"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-success">SAVE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div>

    </div>
@endsection
