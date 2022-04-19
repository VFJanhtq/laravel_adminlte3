<?php

namespace App\Http\Controllers;

use App\Services\ItemService;
use App\Http\Requests\UpdateAddressRequest;
use App\Models\Address;

class ItemController extends Controller
{
    protected $itemService;
    public function __construct(ItemService $itemService)
    {
        $this->itemService = $itemService;
    }

    public function index() {
        $items = $this->itemService->getListItems();
        return view('items.index', array('items' => $items));
    }

    public function detail() {
        $item = $this->itemService->getItemDetail();
        return view('items.detail', array('item' => $item));
    }

    public function test () {
        echo randomToken(20);
    }
}