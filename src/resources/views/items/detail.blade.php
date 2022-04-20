@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">You are logged in -- Detail!</h1>
    </div>
    <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">Item_detail</div>
                    <div class="card-body">
                        <table class="table table-hover table-condensed" id="counties-table">
                            <thead>
                                {{-- <th><input type="checkbox" name="main_checkbox"><label></label></th> --}}
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Category_id</th>
                                <th>Image</th>
                                <th>Actions <button class="btn btn-sm btn-danger d-none" id="deleteAllBtn">Delete
                                        All</button></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $item->item_id }}</td>
                                    <td>{{ $item->item_name }}</td>
                                    <td>{{ $item->item_price }}</td>
                                    <td>{{ $item->category_id }}</td>
                                    <td><img src="{{ $image }}" alt="" style="height: 3em; width:3em"></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('item.delete', ['item_id' => $item->item_id]) }}"
                                                class="btn btn-danger btn-xs">Delete</a>

                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Update</div>
                    <div class="card-body">
                        <form action="{{ route('item.update') }}" method="POST">
                            <input type="hidden" name="cid" value="{{ $item->item_id }}">
                            @csrf
                            <div class="form-group">
                                <label for="">name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter name">
                                <span class="text-danger error-text country_name_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="text" class="form-control" name="price" placeholder="Enter price">
                                <span class="text-danger error-text capital_city_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Category ID</label>
                                <input type="text" class="form-control" name="cate_id" placeholder="Enter ID">
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
