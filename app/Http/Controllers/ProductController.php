<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *  
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view for products listings

        $products = Product::with('category')->get();
        
        return view('back_end.pages_backend.products_backend.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('back_end.pages_backend.products_backend.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $product = new Product();
        $product->product_category_id    = $request->product_category_id;
        $product->product_name        = $request->product_name;
        $product->product_price       = $request->product_price;
        $product->product_description = $request->product_description;

        //image upload

        if($request->hasfile('product_image')){
            $file               = $request->file('product_image');
            $extension          = $file->getClientOriginalExtension();  //get image extension
            $filename           = time() . '.' .$extension;
            $file->move('uploads/products/',$filename);
            $product->product_image   = $filename;
        }

        else{
            return $request;
            $product->product_image = '';
        }
        // save data to the database
        $product->save();
        return redirect('/products');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
       
        return view('back_end.pages_backend.products_backend.show',compact('product',$product));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('back_end.pages_backend.products_backend.edit',compact('product','categories'));
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
        // $validatedData = $request->validate([
        //     'product_category_id' => 'required|max:255',
        //     'product_name' => 'required|max:255',
        //     'product_price' => 'required|numeric',
        //     'product_description' => 'required|max:255',
        //     'product_image' => 'required|image',
            
        // ]);
      
        // Product::whereId($id)->update($validatedData);


        // IMAGE UPDATE CODE 2
        $product_category_id = $request->product_category_id;
        $product_name = $request->product_name;
        $product_price = $request->product_price;
        $product_description = $request->product_description;
        $image = $request->file('product_image');
        
        $imageName = time().'.'.$image->extension();
        // modify image path
        $image->move(public_path('uploads/products/'),$imageName);
        $product = Product::find($id);
        // db fields
        $product->product_category_id = $product_category_id;
        $product->product_name = $product_name;
        $product->product_price = $product_price;
        $product->product_description = $product_description;
        $product->product_image = $imageName;
        $product->save();

        return redirect('/products')->with('success', 'Contact is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/products')->with('success', 'Feedback is successfully deleted');
    }
}
