<?php

namespace App\Http\Controllers;

use App\Services\ItemService;
use App\Http\Requests\UpdateAddressRequest;
use App\Models\Address;
use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Cloudinary;



class ItemController extends Controller
{
    protected $itemService;
    public function __construct(ItemService $itemService)
    {
        $this->itemService = $itemService;
    }

    public function index()
    {
        $items = $this->itemService->getListItems();
        return view('items.index', array('items' => $items));
    }

    public function detail(Request $request)
    {
        $id = $request->input('item_id');
        $item = $this->itemService->getItemDetail($id);
        $file_name = $item->image_token . "." . $item->image_extension;
        $image = Storage::url($file_name);
        //dd($image);
        return view('items.detail', array('item' => $item, 'image' => $image));
        // $items = Items::where('item_id', $id)->first();
        // return view("items.detail", ['items' => $items]);
    }

    public function getUploadImage(Request $request)
    {
        return view('items.upload_image');
    }

    public function postUploadImage(Request $request)
    {
        $item = $this->itemService->uploadImage($request);
    }

    public function test()
    {
        echo randomToken(20);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'cate_id' => 'required',
        ]);

        $query = DB::table('items')->insert([
            'item_name' => $request->input('name'),
            'item_price' => $request->input('price'),
            'category_id' => $request->input('cate_id')
        ]);

        if ($query) {
            return redirect()->back();
        };
    }

    public function update(Request $request)
    {
        $request->validate([ // dat dieu kien cho bien minh nhap
            'name' => 'required',
            'price' => 'required',
            'cate_id' => 'required'
        ]);
        $cid = $request->input('cid');
        $updating = Items::where('item_id', $cid)
            ->update([
                'item_name' => $request->input('name'),
                'item_price' => $request->input('price'),
                'category_id' => $request->input('cate_id')
            ]);
        if (!$updating) {
            return redirect()->back();
        } else {

            return redirect()->route('item.detail', ['item_id' => $cid]);
        }
    }

    public function delete(Request $request)
    {
        $id = $request->input('item_id');
        $delete = Items::where('item_id', $id)
            ->delete();
        if (!$delete) {
            return redirect()->back();
        } else {
            return redirect()->route('item.index');
        }
    }

    public function store(Request $request)
    {
        // $response = cloudinary()->upload($request->file('file')->getRealPath())->getSecurePath();

        // dd($response);

        // return back()
        //     ->with('success', 'File uploaded successfully');
    }
}
