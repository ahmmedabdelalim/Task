<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function create()
    {
        return view('admin.create_product');
    }

    public function store(Request $request , Product $product)
    {
        try{
        $product = new Product;
        $product->invoice_id = $request->invoice_id;
        $product->item_name_ar = $request->item_name_ar;
        $product->item_name_en = $request->item_name_en;

        $product->unit_cost = $request->unit_cost;

        $product->save();

        return redirect()->route('admin.categories.create')->with(['success'=>'تم اضافه المنتج بنجاح']);
        }
        catch(\Exception $ex)
        {
            return redirect()->route('admin.categories.create')->with(['error'=>'خطا في اضافه المنتج']);

        }


    }


}
