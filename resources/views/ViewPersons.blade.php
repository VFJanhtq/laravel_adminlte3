@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">You are logged in!</h1>
    </div>
    <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col-md">
                <form action="" method="get" id="add-name-form" autocomplete="off">
                    <select name="address" class="form-control">
                        @foreach ($id as $i)
                            <option value="{{ $i->id }}">
                                {{ $i->id }}</option>
                        @endforeach
                        <option value="0">all</option>
                    </select>

                    {{-- <input type="text" name="name" id="" class="form-control" value="{{ $input_name }}"> --}}
                    {{-- <input type="text" name="unit_price" id="" class="form-control" value="{{ $input_price }}"> --}}
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-success">SAVE</button>
                    </div>
                </form>


                <div class="card">
                    <div class="card-header">PERSONS_VIEW</div>
                    <div class="card-body">
                        <table class="table table-hover table-condensed" id="counties-table">
                            <thead>
                                {{-- <th><input type="checkbox" name="main_checkbox"><label></label></th> --}}
                                <th>ID</th>
                                <th>Name</th>

                                <th>Actions <button class="btn btn-sm btn-danger d-none" id="deleteAllBtn">Delete
                                        All</button></th>
                            </thead>
                            <tbody>
                                @foreach ($persons as $i)
                                    <tr>
                                        <td>{{ $i->id }}</td>
                                        <td>{{ $i->name }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('detailPersons', ['id' => $i->id]) }}"
                                                    class="btn btn-primary btn-xs">Edit</a>

                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Add new Persons</div>
                    <div class="card-body">
                        <form action="" method="POST" id="add-country-form" autocomplete="off">
                            @csrf
                            <div class="col-md">
                                <div class="card">
                                    <div class="card-header">Update Table</div>
                                    <div class="card-body">
                                        <form action="{{ route('add') }}" method="POST" autocomplete="on">
                                            @csrf
                                            <div class="form-group">
                                                <label for="">Name</label>
                                                <input type="text" class="form-control" name="{{ old('name') }}"
                                                    placeholder="">
                                                <span class="text-danger error-text country_name_error"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="text" class="form-control" name="{{ old('email') }}"
                                                    placeholder="">
                                                <span class="text-danger error-text capital_city_error"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Sex</label>
                                                <input type="text" class="form-control" name="{{ old('sex') }}"
                                                    placeholder="">
                                                <span class="text-danger error-text capital_city_error"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Phone</label>
                                                <input type="text" class="form-control" name="{{ old('phone') }}"
                                                    placeholder="">
                                                <span class="text-danger error-text capital_city_error"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Address ID</label>
                                                <input type="text" class="form-control" name="{{ old('address_id') }}"
                                                    placeholder="">
                                                <span class="text-danger error-text capital_city_error"></span>
                                            </div>


                                            <div class="form-group">
                                                <button type="submit" class="btn btn-block btn-success">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
