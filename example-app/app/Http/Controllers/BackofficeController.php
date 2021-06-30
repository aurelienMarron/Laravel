<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class BackofficeController extends Controller
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
        $product = Product::create(
            ['name' => $request->input('name'),
            'price' => $request->input('price'),
            'weight' => $request->input('weight'),
            'picture' => $request->input('picture'),
            'quantity' => $request->input('quantity'),
            'available' => $request->input('available'),
            'size'=>$request->input('size'),
            'categories_id' => $request->input('categories_id')
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


        /*Product::where('id',$id)
            ->update(['name' => $request->input('name'),
                'price' => $request->input('price'),
                'weight' => $request->input('weight'),
                'picture' => $request->input('picture'),
                'quantity' => $request->input('quantity'),
                'available' => $request->input('available'),
                'size'=>$request->input('size'),
                'categories_id' => $request->input('categories_id')
            ]);*/

        /*$product=Product::find($id);
        $input=$request->all();
        if( $product->isDirty){
            $product->fill($input)->save($product);
        }*/

            /*$product->name=$request->input('name');
        $product->price=$request->input('price');
        $product->weight=$request->input('weight');
        $product->picture=$request->input('picture');
        $product->quantity=$request->input('quantity');
        $product->available=$request->input('available');
        $product->size=$request->input('size');
        $product->categories_id=$request->input('categories_id');
        $product->save();*/

       /* $product=Product::update(['id'=>$id],
            ['name' => $request->input('name'),
                'price' => $request->input('price'),
                'weight' => $request->input('weight'),
                'picture' => $request->input('picture'),
                'quantity' => $request->input('quantity'),
                'available' => $request->input('available'),
                'size'=>$request->input('size'),
                'categories_id' => $request->input('categories_id')
            ]);*/

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
        Product::find($id)->delete();

        return redirect()->route('indexproduct.index');
    }
}
