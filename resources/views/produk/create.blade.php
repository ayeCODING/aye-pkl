@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Dashboard') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('produk.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk"
                                value="{{ old('nama_produk') }}" placeholder="Nama Produk" required>
                            @error('nama_produk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                         <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control" class="form-control @error('deskripsi') is-invalid @enderror"
                                name="deskripsi" value="{{ old('deskripsi') }}" rows="3" placeholder="Deskripsi"
                                required></textarea>
                            @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Produk</label>
                            <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga"
                                value="{{ old('harga') }}" placeholder="Harga" required>
                            @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Stok</label>
                            <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok"
                                value="{{ old('stok') }}" placeholder="Stok" required>
                            @error('stok')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Kategori</label>
                            <select name="id_kategori" id="" class="form-control">
                                @foreach ($kategori as $item)
                                    <option value="{{$item->id}}">{{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                         <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar"
                                value="{{ old('gambar') }}" required></input>
                            @error('gambar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <button type="submit" href="{{ route('kategori.index')}}" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-warning">Reset</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
