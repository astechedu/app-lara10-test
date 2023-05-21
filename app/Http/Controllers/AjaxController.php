<?php

namespace App\Http\Controllers;

use App\Models\Ajax;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Ajax::all();
        //$products = Ajax::orderBy('id','desc')->paginate(1);
   
        return view('products/index', compact('products'));
    }   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(fr $fr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, fr $fr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fr $fr)
    {
        //
    }

    public function test()
    {
        $products = Ajax::all();      
        
        return response()->json(['products' => $products]);
        exit;        
    }   

    public function testpost(Request $request)    
    {
        $product['id'] = $request->input('id');
        $product['name'] = $request->input('name');
        $product['price'] = $request->input('price');
        $product['quantity'] = $request->input('quantity');
        $product['status'] = "Success";
        
        return response()->json(['product' => $product]);
        exit;       
        
    }   


}
