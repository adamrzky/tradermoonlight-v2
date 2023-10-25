<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Crypt;

class ProductController extends Controller
{
 
    // function __construct()
    // {
    //      $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
    //      $this->middleware('permission:product-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    // }
  
    public function index(): View
    {
        $products = Product::latest()->paginate(5);

        return view('admin.products.index', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

  
    public function create(): View
    {
        return view('admin.products.create');
    }

   
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
           
            'desc1' => 'required',
          
            'judul_desc1' => 'required',
            
        ]);

        Product::create($request->all());

        return redirect()
            ->route('products.index')
            ->with('success', 'Product created successfully.');
    }

     function show(Product $product): View
    {
        return view('admin.products.show', compact('product'));
    }

    
    public function edit(Product $product): View
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'durasi' => 'required',
            
            'desc1' => 'required',
            'desc2' => 'required',
            'desc3' => 'required',
            'desc4' => 'required',
            'desc5' => 'required',
            'judul_desc1' => 'required',
            'judul_desc2' => 'required',
            'judul_desc3' => 'required',
            'judul_desc4' => 'required',
            'judul_desc5' => 'required',
        ]);

        $product->update($request->all());

        return redirect()
            ->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

   
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'Product deleted successfully');
    }
}
