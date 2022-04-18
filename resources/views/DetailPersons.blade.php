@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col-md">


                <div class="card">
                    <div class="card-header">DETAIL_PERSONS</div>
                    <div class="card-body">
                        <table class="table table-hover table-condensed" id="counties-table">
                            <thead>
                                {{-- <th><input type="checkbox" name="main_checkbox"><label></label></th> --}}
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Sex</th>
                                <th>Phone</th>
                                <th>Address_id</th>

                                <th>Actions <button class="btn btn-sm btn-danger d-none" id="deleteAllBtn">Delete
                                        All</button></th>
                            </thead>
                            <tbody>
                                {{-- @foreach ( as $i) --}}
                                    <tr>
                                        <td>{{ $persons->id }}</td>
                                        <td>{{ $persons->name }}</td>
                                        <td>{{ $persons->email }}</td>
                                        <td>{{ $persons->sex }}</td>
                                        <td>{{ $persons->phone }}</td>
                                        <td>{{ $persons->address_id }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{route('delete',['id' => $persons->id]) }}"
                                                    class="btn btn-primary btn-xs">Delete</a>

                                            </div>

                                        </td>
                                    </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Update Table</div>
                    <div class="card-body">
                        <form action="" method="POST" autocomplete="on">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="" placeholder="">
                                <span class="text-danger error-text country_name_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="" placeholder="">
                                <span class="text-danger error-text capital_city_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Sex</label>
                                <input type="text" class="form-control" name="" placeholder="">
                                <span class="text-danger error-text capital_city_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" name="" placeholder="">
                                <span class="text-danger error-text capital_city_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Addres ID</label>
                                <input type="text" class="form-control" name="" placeholder="">
                                <span class="text-danger error-text capital_city_error"></span>
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
