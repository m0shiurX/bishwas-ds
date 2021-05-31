<?php
// use App\Models\Product;
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Product::all();
        $data = Product::latest()->paginate(10);
        return view('products.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'rate' => 'required',
            'stock' => 'required'
        ]);

        Product::create($request->all());
        return redirect()->route('products.index')->with('success','Product saved successfully');

    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // return Product::find($id);
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }


    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // $product = Product::find($id);
        // $product->update($request->all());
        // return $product;
        $request->validate([
            'name' => 'required',
            'rate' => 'required',
        ]);
        $product->update($request->all());

    
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('products.index')
                         ->with('success','Product deleted successfully');
    }

    /**
     * Searching a product
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return Product::where('name', 'like', '%'.$name.'%')->get();
    }
}
