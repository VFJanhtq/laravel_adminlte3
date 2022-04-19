<?php

namespace App\Services;

use App\Models\Address;
use App\Models\Items;

class ItemService
{
 
    public function getListItems (){
        $items = [];
        return $items;
    }

    public function getItemDetail (){
        $item = null;
        return $item;
    }

    public function insertItem (){

        // Generate image token
        $imageToken = $this->generateFileToken();
    }

    private function generateFileToken () {
        do {
            $token =randomToken(25);
        } while (
            Item::where('image_token', $token)->exists()
        );

        return $token;
    }

    public function test() {
        
    }
}
