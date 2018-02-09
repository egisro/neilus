<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['exept' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $product = Product::all();
//        $products = Product::orderBy('created_at', 'desc') -> take(1) -> get();
//        $products = Product::orderBy('created_at', 'desc') -> get();

        $products = Product::orderBy('created_at', 'desc') -> paginate(6);
        return view('products.index') -> with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'picture' => 'image|nullable|max:1999'
        ]);

        //handle file upload
        if($request->hasFile('picture')){
            //get filename with the extension
            $fileameWithExt = $request -> file('picture') -> getClientOriginalName();
            //Get just filename
            $filename = pathinfo($fileameWithExt, PATHINFO_FILENAME);
            //Get the extension
            $extension = $request -> file('picture') -> getClientOriginalExtension();
            //Create filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload the image
            $path = $request -> file('picture') -> storeAs('public/img', $fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        //Create product
        $product = new Product;
        $product -> title = $request -> input('title');
        $product -> description = $request -> input('description');
        $product -> price = $request -> input('price');
        $product -> quantity = $request -> input('quantity');
        $product -> user_id = auth() -> user() -> id;
        $product -> picture = $fileNameToStore;
        $product -> save();

        return redirect('/products') -> with('success', 'Product sucessfully added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show') -> with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        //check for correct user
        if(auth()->user()->id !== $product->user_id){
            return redirect('/products') -> with('error', 'Unauthorized page');
        }
        return view('products.edit') -> with('product', $product);
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
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);
        //handle file upload
        if($request->hasFile('picture')){
            //get filename with the extension
            $fileameWithExt = $request -> file('picture') -> getClientOriginalName();
            //Get just filename
            $filename = pathinfo($fileameWithExt, PATHINFO_FILENAME);
            //Get the extension
            $extension = $request -> file('picture') -> getClientOriginalExtension();
            //Create filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload the image
            $path = $request -> file('picture') -> storeAs('public/img', $fileNameToStore);

        }
        //Create product
        $product = Product::find($id);
        $product -> title = $request -> input('title');
        $product -> description = $request -> input('description');
        $product -> price = $request -> input('price');
        $product -> quantity = $request -> input('quantity');
        if($request->hasFile('picture')){
            if ($product->picture != 'noimage.jpg') {
                Storage::delete('public/img/'.$product->picture);
            }
            $product->picture = $fileNameToStore;
        }
        $product -> save();

        return redirect('/products') -> with('success', 'Item sucessfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        //check for correct user
        if(auth()->user()->id !== $product->user_id){
            return redirect('/products') -> with('error', 'Unauthorized page');
        }
        if($product->picture != 'noimage.jpg'){
            //Delete the image
            Storage::delete('public/img/'.$product->picture);
        }
        $product -> delete();
        return redirect('/products') -> with('success', 'Item removed');
    }
}
