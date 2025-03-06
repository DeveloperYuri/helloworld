<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $produk['getProduk'] = HomeModel::all();

        return view('homepage.index', $produk);
    }

    public function create(){
        return view('homepage.create');
    }

    public function save(Request $request)
    {
        $data = HomeModel::create($request->all());
        return redirect()->route('indexhomepage');
    }

    public function edit(string $id){
        $data = HomeModel::findOrFail($id);
        // dd($data);
        return view('homepage.edit', compact('data'));
    }

    public function update(Request $request, string $id){
        $data = HomeModel::findOrFail($id);

        $data->update([
            'name'         => $request->name,
            'description'   => $request->description
        ]);
 
        return redirect()->route('indexhomepage');
    }

    public function show(string $id)
    {
        //get product by ID
        $produks = HomeModel::findOrFail($id);

        //render view with product
        return view('homepage.show', compact('produks'));
    }



    public function destroy(HomeModel $id)
    {
        $id->delete();
        return redirect()->route('indexhomepage');
    }

}
