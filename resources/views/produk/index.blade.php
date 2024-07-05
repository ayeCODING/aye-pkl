@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('produk') }}
                    </div>
                    <div class="float-end">
                            @csrf
                           <a href="{{ route('produk.create')}}" class="btn btn-primary px-4"><i class="bi bi-plus-lg me-2"></i>Tambah Produk</a>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Nama Kategori</th>
                                    <th>Gambar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($produk as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama_produk }}</td>
                                    <td>{{ $data->deskripsi }}</td>
                                    <td>{{ $data->harga }}</td>
                                    <td>{{ $data->stok }}</td>
                                    <td>{{ $data->kategori->nama_kategori}}</td>
                                    <td>
                                        <img src="{{ asset('/images/produk/' . $data->gambar) }}" class="rounded"
                                            style="width: 150px">
                                    </td>
                                    <td>
                                        <form action="{{ route('produk.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('produk.show', $data->id) }}"
                                                class="btn btn-sm btn-outline-warning px-4"><i class="fadeIn animated bx bx-message-square-edit">Show</i></a> |
                                            <a href="{{ route('produk.edit', $data->id) }}"
                                                class="btn btn-sm btn-outline-success px-4"><i class="fadeIn animated bx bx-message-square-edit">Edit</i></a> |
                                            {{-- <button type="submit"  onclick="return confirm('Yakin mau hapus?');" class="btn btn-sm px-4 raised d-flex gap-4"><i class="material-icons-outlined">delete</i>Delete</button> --}}
                                            <button type="submit" onclick="return confirm('Yakin mau hapus?');"
                                             class="btn btn-sm btn-outline-danger px-4"><i class="material-icons-outlined">delete</i></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">
                                        Data data belum Tersedia.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
