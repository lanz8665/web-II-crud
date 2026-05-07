@extends('layouts.template')

@section('content')
    <div class="container mt-3">
        <h1>Halaman Buku</h1>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card p-3">
            <div class="mb-2">
                <a href="{{ route('form-create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
            </div>
            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">NO</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Harga</th>
                        <th scope="col" width="25%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataBuku as $item)
                        <tr>
                            <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->penulis }}</td>
                            <td>{{ $item->tahun_terbit }}</td>
                            <td>{{ $item->harga }}</td>
                            <td class="text-ceter">

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#hapus{{ $item->id }}">
                                    Hapus Versi modal
                                </button>

                                <a href="{{ route('edit-buku', ['id' => $item->id]) }}" class="btn btn-warning btn-sm"><i
                                        class="bi bi-pencil"></i>
                                    Edit</a>
                                <a href="{{ route('detail-buku', ['id' => $item->id]) }}" class="btn btn-primary btn-sm"><i
                                        class="bi bi-eye"></i>
                                    Detail</a>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="hapus{{ $item->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="{{ route('delete-buku', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data Buku</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Buku dengan judul <strong>{{ $item->judul }} akan dihapus</strong>, apakah
                                            anda
                                            yakin?

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Hapus Buku</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
