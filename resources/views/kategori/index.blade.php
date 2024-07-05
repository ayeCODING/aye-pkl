@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        kategori
                    </div>
                    <div class="float-end">
                           <a href="{{ route('kategori.create')}}" class="btn btn-primary px-4"><i class="bi bi-plus-lg me-2"></i>Tambah Kategori</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="dataTable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama kategori</th>
                                     <th>Deskripsi</th>
                                     <th>Gambar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($kategori as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama_kategori }}</td>
                                    <td>{{ $data->deskripsi }}</td>
                                     <td>
                                        <img src="{{ asset('/images/kategori/' . $data->gambar) }}" class="rounded"
                                            style="width: 150px">
                                    </td>
                                   <td>
                                        <form action="{{ route('kategori.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('kategori.edit', $data->id) }}"
                                                 class="btn btn-sm btn-outline-success px-4"><i class="fadeIn animated bx bx-message-square-edit">Edit</i></a> |
                                           <button type="submit" onclick="return confirm('Yakin mau hapus?');"
                                             class="btn btn-sm btn-outline-danger px-4"><i class="material-icons-outlined">delete</i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
