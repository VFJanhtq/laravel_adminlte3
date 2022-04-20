<?php

namespace App\Services;

use App\Models\Address;
use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemService
{

    public function getListItems()
    {
        $itemQueries = Items::query();
        $items = $itemQueries->get();
        return $items;
    }

    public function getItemDetail($id)
    {
        $item = Items::where('item_id', $id)->first();
        return $item;
    }

    public function uploadImage($request)
    {
        $file = $request->file('file_upload');

        // File info
        // https://stackoverflow.com/questions/30964849/how-to-get-file-properties-from-a-post-request-using-laravel-slim
        echo "File name : " . $file->getClientOriginalName() . "<br/>";
        echo "File extension: " . $file->getClientOriginalExtension() . "<br/>";;
        echo "File size : " . $file->getSize() . "<br/>";;
    }

    public function insertItem()
    {

        // Generate image token
        $imageToken = $this->generateFileToken();
    }

    private function generateFileToken()
    {
        do {
            $token = randomToken(25);
        } while (
            Items::where('image_token', $token)->exists()
        );

        return $token;
    }

    public function test()
    {
    }

    public function createItem($request)
    {
    }
}
