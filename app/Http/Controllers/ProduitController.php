<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat= Category::all();
        $prod= Produit::all();
        return view('Produit.showProduit')->with('cats',$cat)->with('prods',$prod);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'prix' => 'required',
            "categorie_id"=>"required",
        ]);
       Produit::create($request->all());
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $prod= Produit::find($id);
        return view('Produit.edit')->with('cats',Category::all())->with('prods',$prod);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pro=Produit::find($id);
        
        $pro->name =$request->name;
        $pro->prix =$request->prix;
        $pro->categorie_id=$request->categorie_id;
        $pro->save();
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat=  Produit::find($id);
        $cat->destroy($id);
        
        return redirect()->back();
    }
}
