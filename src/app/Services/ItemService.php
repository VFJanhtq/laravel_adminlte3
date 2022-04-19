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

    public function uploadImage ($request) {
        $file = $request->file('file_upload');

        // File info
        // https://stackoverflow.com/questions/30964849/how-to-get-file-properties-from-a-post-request-using-laravel-slim
        echo "File name : " .$file->getClientOriginalName(). "<br/>";
        echo "File extension: " .$file->getClientOriginalExtension(). "<br/>";;
        echo "File size : " .$file->getSize(). "<br/>";;
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
