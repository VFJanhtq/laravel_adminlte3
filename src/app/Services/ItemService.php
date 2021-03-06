<?php

namespace App\Services;

use App\Models\Address;
use App\Models\Items;

class ItemService
{
 
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
}
