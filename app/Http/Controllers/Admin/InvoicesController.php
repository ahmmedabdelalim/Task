<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    //
    public function create_invoice()
    {
        //
        $products = Product::all();
        return view('admin.invoices.create', compact('products'));
    }


    public function store_invoice(Request $request)
{
    try{
    $order = Invoice::create($request->all());

    $products = $request->input('products', []);
    $quantities = $request->input('quantities', []);
    for ($product=0; $product < count($products); $product++) {
        if ($products[$product] != '') {
            $order->products()->attach($products[$product], ['quantity' => $quantities[$product]]);
        }
    }
        }
        catch(\Exception $ex)
        {
            //return redirect()->route('admin.categories.create')->with(['error'=>'خطا في اضافه المنتج']);
            return $ex->getMessage();
        }

    //return redirect()->route('admin.orders.index');
}
}
