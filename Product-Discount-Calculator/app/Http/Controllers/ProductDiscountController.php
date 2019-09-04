<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDiscountController extends Controller
{
    public function index()
    {
        return view('product');
    }

    public function calculate(Request $request)
    {
        $productDes = $request->desc;
        $listPrice = $request->price;
        $discount = $request->price_dc;
        $discountAmount = $listPrice * $discount * 0.1;
        $total = $listPrice - $discountAmount;
        return view('result', compact('total', 'discountAmount'));
    }
}
