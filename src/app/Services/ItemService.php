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
        $request->validated([
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);

        $query = DB::table('items')->insert([
            'item_name' => $request->input('name'),
            'item_price' => $request->input('price'),
            'category_id' => $request->input('cate_id')
        ]);

        if ($query) {
            return back();
        }
    }
}
