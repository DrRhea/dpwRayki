<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Produk::latest()->get();

        return view('product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Produk::findOrFail($id);

        return view('overviews', compact('product'));
    }

    public function rental($id)
    {
        $user = Auth::user();
        $product = Produk::findOrFail($id);

        return view('rental', compact('user', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        //
    }

    public function admin_index(): View
    {
        $products = Produk::all();

        return view('admin.dashboard', compact('products'));
    }

    public function admin_create(): View
    {
        return view('admin.pages.create');
    }

    public function admin_store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga_produk' => 'required|numeric',
            'deskripsi_produk' => 'required|string',
            'foto_produk' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the upload of the file
        if ($request->hasFile('foto_produk')) {
            $image = $request->file('foto_produk');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);

            $gambar_produk = '/images/' . $name;
        } else {
            $gambar_produk = null;
        }

        // Create a new product
        $produk = new Produk();
        $produk->nama_produk = $request->input('nama_produk');
        $produk->harga_produk = $request->input('harga_produk');
        $produk->deskripsi_produk = $request->input('deskripsi_produk');
        $produk->gambar_produk = $gambar_produk;
        $produk->save();

        //redirect to index
        return redirect()->route('admin.product')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function admin_edit(string $id): View
    {
        // Get product by ID
        $product = Produk::findOrFail($id);

        // Render view with product
        return view('admin.pages.update', compact('product'));
    }

    public function admin_update(Request $request, string $id): RedirectResponse
    {
        // Validate form
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga_produk' => 'required|numeric',
            'deskripsi_produk' => 'required|string',
            'foto_produk' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Get product by ID
        $product = Produk::findOrFail($id);

        // Check if image is uploaded
        if ($request->hasFile('foto_produk')) {
            // Handle the upload of the file
            $image = $request->file('foto_produk');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);

            // Delete old image
            if ($product->gambar_produk) {
                $oldImagePath = public_path($product->gambar_produk);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Set new image path
            $product->gambar_produk = '/images/' . $name;
        }

        // Update product with new or existing data
        $product->nama_produk = $request->input('nama_produk');
        $product->harga_produk = $request->input('harga_produk');
        $product->deskripsi_produk = $request->input('deskripsi_produk');
        $product->save();

        // Redirect to index
        return redirect()->route('admin.product')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function admin_destroy($id): RedirectResponse
    {
        //get product by ID
        $product = Produk::findOrFail($id);

        //delete image
        Storage::delete('public' . $product->foto_produk);

        //delete product
        $product->delete();

        //redirect to index
        return redirect()->route('admin.product')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
