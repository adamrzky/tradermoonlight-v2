<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Support\Str;

class ProductTypeAdminController extends Controller
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
        $productsType = ProductType::all();

        return view('admin.productsType.index', compact('productsType'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(): View
    {
        return view('admin.productsType.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',

            'desc1' => 'required',

            'judul_desc1' => 'required',
        ]);

        ProductType::create($request->all());

        return redirect()
            ->route('productsType.index')
            ->with('success', 'Product created successfully.');
    }

    function show(ProductType $productType): View
    {
        return view('admin.productsType.show', compact('productsType'));
    }

    public function edit(ProductType $productType): View
    {
        return view('admin.productsType.edit', compact('productType'));
    }
    public function update(Request $request, ProductType $productsType, $id): RedirectResponse
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'image' => 'sometimes|file|image|max:5000', // maksimal 5MB, sesuaikan sesuai kebutuhan
        ]);


        $productsType = ProductType::findOrFail($id);

        // Update data lainnya
        $productsType->name = $request->name;
        $productsType->desc = $request->desc;

        // Jika ada gambar yang diupload
        if ($request->hasFile('image')) {
            // Dapatkan ekstensi file
            $extension = $request->image->getClientOriginalExtension();

            // Buat nama file yang acak
            $filename = Str::random(10) . '.' . $extension;

            // Simpan gambar ke folder spesifik di public
            $request->image->move(public_path('assets-fugu/images/all-img/v3'), $filename);

            // Simpan path ke database
            $productsType->image = 'assets-fugu/images/all-img/v3/' . $filename;
        }

        // Simpan perubahan ke database
        $productsType->save();

        return redirect()
            ->route('productsType.index')
            ->with('success', 'ProductType updated successfully.');
    }

    public function destroy(ProductType $productsType, $id): RedirectResponse
    {

        $productsType = ProductType::findOrFail($id);
        // dd($productsType);
        $productsType->delete();

        return redirect()
            ->route('productsType.index')
            ->with('success', 'Product deleted successfully');
    }
}
