<?php
    
namespace App\Http\Controllers;
    
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
    
class IndexController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // function __construct()
    // {
    //      $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
    //      $this->middleware('permission:product-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $products = Product::all();
        $data['product'] = $products->toArray();


        $productsType = ProductType::all();
        $data['productType'] = $productsType->toArray();





        // dd($data);

        // dd($productArray);

        return view('index', compact('data'));
        

      
           ;
    }
}