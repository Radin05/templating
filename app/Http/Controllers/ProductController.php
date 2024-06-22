<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
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
  $product = Product::all();
  return view('product.index', compact('product'));
 }

 /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function create()
 {
  $brand = Brand::all();

  return view('product.create', compact('brand'));
 }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
 public function store(Request $request)
 {
  $product               = new Product;
  $product->nama_product = $request->nama_product;
  $product->stock        = $request->stock;
  $product->price        = $request->price;
  $product->description  = $request->description;
  $product->id_brand     = $request->id_brand;

  $product->save();
  return redirect()->route('product.index')
   ->with('success', 'Masok Datanya Abangku');
 }

 /**
  * Display the specified resource.
  *
  * @param  int $id
  * @return \Illuminate\Http\Response
  */
 public function show($id)
 {
  $product = Product::findOrFail($id);
  return view('product.show', compact('product'));
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  int $id
  * @return \Illuminate\Http\Response
  */
 public function edit($id)
 {
  $product = Product::findOrFail($id);
  $brand   = Brand::all();
  return view('product.edit', compact('product', 'brand'));
 }

 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int $id
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, $id)
 {
  $product               = Product::findOrFail($id);
  $product->nama_product = $request->nama_product;
  $product->stock        = $request->stock;
  $product->price        = $request->price;
  $product->description  = $request->description;
  $product->id_brand     = $request->id_brand;

  $product->save();
  return redirect()->route('product.index')
   ->with('success', 'Terganti Abangku');
 }

 /**
  * Remove the specified resource from storage.
  *
  * @param  int $id
  * @return \Illuminate\Http\Response
  */
 public function destroy($id)
 {
  $product = Product::findOrFail($id);
  $product->delete();
  return redirect()->route('product.index')
   ->with('success', 'Terhapus Abangkuh :(');
 }
}
