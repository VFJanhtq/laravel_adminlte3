@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">You are logged in -- View!</h1>
    </div>
    <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">Item_view</div>
                    <div class="card-body">
                        <table class="table table-hover table-condensed" id="counties-table">
                            <thead>
                                {{-- <th><input type="checkbox" name="main_checkbox"><label></label></th> --}}
                                <th>ID</th>
                                <th>name</th>

                                <th>Actions <button class="btn btn-sm btn-danger d-none" id="deleteAllBtn">Delete
                                        All</button></th>
                            </thead>
                            <tbody>
                                @foreach ($items as $i)
                                    <tr>
                                        <td>{{ $i->item_id }}</td>
                                        <td>{{ $i->item_name }}</td>

                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('item.detail', ['item_id' => $i->item_id]) }}"
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
                    <div class="card-header">Add new Item</div>
                    <div class="card-body">
                        <form action="{{ route('item.post.image.upload') }}" autocomplete="off"
                            enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                    placeholder="Enter name">
                                <span class="text-danger error-text country_name_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="text" class="form-control" name="price" value="{{ old('price') }}"
                                    placeholder="Enter Price">
                                <span class="text-danger error-text capital_city_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Categpry ID</label>
                                <input type="text" class="form-control" name="cate_id" value="{{ old('cate_id') }}"
                                    placeholder="Enter ID">
                                <span class="text-danger error-text capital_city_error"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Upload</label>
                                <input name="file_upload" type="file" accept="image/*">
                                <span class="text-danger error-text capital_city_error"></span>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-success">SAVE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
