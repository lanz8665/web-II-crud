<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->keyword;

        $dataBuku = Buku::when($search, function($query, $search){
            return $query->where('judul', 'like', "%{$search}%")
            ->orWhere('penulis', 'like', "%{$search}%");
        })
        ->orderBy('id', 'desc')
        ->paginate(5)
        ->withQueryString();

        return view('pages.buku.daftar-buku', compact('dataBuku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.buku.form-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->judul);

        $validated = $request->validate(
            [
                'judul' => 'required|min:5',
                'penulis' => 'required|min:5',
                'harga' => 'required|numeric',
                'tahun_terbit' => 'required|numeric',             
            ],
            [
                'judul.required'=>'waduh judul bukunya jangan dikosongkan ya!',
                'judul.min'=>'judulnya terlalu pendek, minimal 3 karakter',
                'penulis.required'=>'setiap buku harus ada nama penulisnya!'
            ]
        );
        $validated['kategori_id'] = 1;

        Buku::create($validated);

        return redirect()->route('buku')->with('success', 'Buku baru berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //query db builder
        //$detailBuku = DB::table('buku')->where('id', $id)->firstOrFail();

        //orm
        // $detailBuku = Buku::find($id);
        $detailBuku = Buku::findOrFail($id);        

        return view('pages.buku.detail-buku', compact('detailBuku'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detailBuku = Buku::findOrFail($id);        
        return view('pages.buku.form-create', compact('detailBuku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate(
            [
                'judul' => 'required|min:5',
                'penulis' => 'required|min:5',
                'harga' => 'required|numeric',
                'tahun_terbit' => 'required|numeric',             
            ],
            [
                'judul.required'=>'waduh judul bukunya jangan dikosongkan ya!',
                'judul.min'=>'judulnya terlalu pendek, minimal 3 karakter',
                'penulis.required'=>'setiap buku harus ada nama penulisnya!'
            ]
        );
        Buku::where('id', $id)->update($validated);
        return redirect()->route('buku')->with('success', 'Data buku berhasil dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detailBuku = Buku::findOrFail($id);        
        $detailBuku->delete();
        return redirect()->route('buku')->with('success', 'Data buku berhasil dihapus!');
        
    }
}
