<?php

namespace App\Http\Controllers;

use App\Models\ProdukImageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk['getProduk'] = ProdukImageModel::all();

        return view('produkimage.index', $produk);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produkimage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $image->storeAs('public/storage/produkimage', $image->hashName());

        //create product
        ProdukImageModel::create([
            'name'          => $request->name,
            'image'         => $image->hashName(),
            'description'   => $request->description,
        ]);

        //redirect to index
        return redirect()->route('indexprodukimage')->with('success', 'Created Image Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(ProdukImageModel $produkImageModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProdukImageModel $produkImageModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProdukImageModel $produkImageModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produkimage = ProdukImageModel::findOrFail($id);

        //delete image
        Storage::delete('public/produkimage/'. $produkimage->image);

        //delete product
        $produkimage->delete();

        //redirect to index
        return redirect()->route('indexprodukimage')->with('success', "Delete Successfully");

    }
}
