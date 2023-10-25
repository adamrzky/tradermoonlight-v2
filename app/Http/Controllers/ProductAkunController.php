<?php
    
namespace App\Http\Controllers;
    
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
    
class ProductAkunController extends Controller
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
        $products = Product::latest()->paginate(5);
        $productArray = $products->toArray();
        

        // dd($productArray);
        

        return view('product',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function getDetails($productId)
    {
        // dd($productId);
        // Mendapatkan detail produk berdasarkan ID
        $products = Product::find($productId);

        // dd($products);

        // Lakukan tindakan lain seperti menampilkan view, mengembalikan data JSON, dsb.
        // Contoh sederhana: 
        return view('product',compact('products'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
   
    public function prosesBeli(Request $request)
    {
        $data['namaPemesan'] = $request->input('nama_pemesan');
        $data['nomorWA'] = $request->input('nomor_wa');
        $data['variant'] = $request->input('variant');
        $data['kuantitas'] = $request->input('kuantitas');
        $data['metodePembayaran'] = $request->input('metode_pembayaran');
        $data['catatan'] = $request->input('catatan');
        $data['harga'] = $request->input('harga');

        $data['jumlahBayar'] = $data['harga'] * $data['kuantitas'];


        $pesan = "Pesanan : *YouTube Premium*\n\n" .
         "Varian : *$data[variant]*\n" .
         "Qty & Harga : *$data[kuantitas]* x  $data[harga] =\n" .
         "Total Bayar =  *RP. $data[jumlahBayar]*\n\n" .
         "Informasi Pemesan : $data[namaPemesan] $data[nomorWA]\n" 
        //  "*Catatan Pesanan* : $data[catatan]\n" .
        //  "*Metode Pembayaran* : $data[metodePembayaran]"
         
         ;



        $encodedPesan = urlencode($pesan);

        $whatsappUrl = "https://wa.me/6287839282887?text=$encodedPesan";

        return redirect($whatsappUrl);

        return redirect()->back()->with('status', 'Pembelian berhasil!');
    }


    public function create(): View
    {
        return view('products.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        Product::create($request->all());
    
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product): View
    {
        return view('products.show',compact('product'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product): View
    {
        return view('products.edit',compact('product'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product): RedirectResponse
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $product->update($request->all());
    
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();
    
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}