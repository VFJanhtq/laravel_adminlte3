<?php

namespace App\Services;

use App\Models\Address;
use App\Models\Items;
use Illuminate\Auth\Events\Failed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

        $filestore = $file->store('avatars');
        $hashName = $file->hashName();
        $explodeName = explode('.', $hashName, 2);
        //query
        $query = DB::table('items')->insert([
            'item_name' => $request->input('name'),
            'item_price' => $request->input('price'),
            'category_id' => $request->input('cate_id'),
            'image_token' => $explodeName[0],
            'image_extension' => $explodeName[1]
        ]);
        if ($query) {
            return redirect()->back();
        };
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
