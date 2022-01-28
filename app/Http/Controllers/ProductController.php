<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $fileName = "";
        if ($request->hasFile('gambar')) {
			
			$image      = $request->file('gambar');
			$fileName   = $request->nama.'-'.$image->getClientOriginalExtension();
			$request->file('gambar')->move(public_path("uploads"), $fileName);
			
        }
        
        $product = Product::create([
            'nama' => $request->nama,
            'qty' => $request->qty,
            'harga' => $request->harga,
            'gambar' => $fileName
        ]);

        if (!$product) 
        {
            return redirect()->back()->with('msg', 'Data gagal disimpan');  
        }
        
        return redirect()->route('product')->with('msg', 'Data berhasil disimpan');  
        
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit', compact('product'));
    }
    
    public function update(Request $request)
    {
        $product = Product::find($request->id);
        $fileName = $request->old_gambar;

        if ($request->hasFile('gambar')) {
			
			$image      = $request->file('gambar');
			$fileName   = $request->nama.'.'.$image->getClientOriginalExtension();
			$request->file('gambar')->move(public_path("uploads"), $fileName);
            
        }

        $product->nama = $request->nama;
        $product->qty = $request->qty;
        $product->harga = $request->harga;
        $product->gambar = $fileName;
            $product->update();
        
        return redirect()->route('product')->with('msg', 'Data berhasil diedit'); 
    }
    
    public function delete($id)
    {
        Product::where('id', $id)->delete();
        return redirect()->back()->with('msg', 'Data berhasil dihapus');  
    }



}   
