<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Validator;


class BackofficeProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('backoffice/indexproduct', ['listeProduit' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backoffice/createProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:products',
            'price'=>'numeric|min:0'
        ]);

        $product = Product::create(
            ['name' => $request->input('name'),
            'price' => $request->input('price'),
            'weight' => $request->input('weight'),
            'picture' => $request->input('picture'),
            'quantity' => $request->input('quantity'),
            'available' => $request->input('available'),
            'size'=>$request->input('size'),
            'categorie_id' => $request->input('categorie_id')
        ]);
        return redirect()->route('indexproduct.show', [$product]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id);
        return view('backoffice/showProduct',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        return view('backoffice/updateProduct',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::find($id);
        $input=$request->all();
        $product->fill($input)->save();


        return redirect()->route('indexproduct.show', [$product]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('order_product')->where('products_id',$id)->delete();
        Product::find($id)->delete();

        return redirect()->route('indexproduct.index');
    }
}
