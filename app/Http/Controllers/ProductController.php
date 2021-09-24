<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          // $product = Product::all() ;
          //  if use latest function invoke latest product  can we show or display the first
          $product = Product::latest()->paginate(4) ;

          return  view('product.index',compact('product'))   ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('product.create')   ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
           // $request->all()  ey rodha fy chkl table key &&  value
             //  validation 

             $request->validate([
                 'title'  => 'required|max:30',
                 'price'  => 'required|max:30',
                 'bio'  => 'required|max:3000',
             ]) ;
        $product = Product::create($request->all()) ;

        return redirect()->route('products.index')->
        with('success','saved by successfully ok!')   ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
         
        return  view('product.show',compact('product')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return  view('product.edit',compact('product')) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        
        $request->validate([
            'title'  => 'required|max:30',
            'price'  => 'required|max:30',
            'bio'  => 'required|max:3000',
        ]) ;
   $product ->update($request->all()) ;

   return redirect()->route('products.index')->
   with('success','updated  was successfully ok!')   ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product ->delete() ;

        return  redirect()->
        route('products.index')
         ->with('success','produce was deleted successfully ok !')   ;
    }


    public function softdelete($id)
    {
        $product  = Product::find($id) ->delete()  ;

        return  redirect()->
        route('products.index')
         ->with('success','produce was deleted successfully ok !')   ;
    }
}
