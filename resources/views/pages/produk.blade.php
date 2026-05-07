@extends('layouts.template')

@section('content')
    <div class="container mt-3">
        <h1>Halaman Produk</h1>
        <div class="alert alert-primary" role="alert">
            Halaman ini menampilkan pengelolaan data barang
        </div>
        <div class="card p-3">
            <div class="mb-2">
                <button type="button" class="btn btn-primary btn-sm">Tambahh Data</button>
            </div>
            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">NO</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="text-center">1</th>
                        <td>Laptop Asus</td>
                        <td>18.000.000</td>
                        <td>12</td>
                        <td class="text-ceter">
                            <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                            <button type="button" class="btn btn-warning btn-sm">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
