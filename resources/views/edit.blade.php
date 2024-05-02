<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="container-sm my-5">
        <form action="{{ route('barang.update', ['barang' => $barang->id]) }}" method="POST">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="container-sm mt-5">
                    <form action="{{ route('barang.update', ['barang' => $barang->id]) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row justify-content-center">
                            <div class="p-5 bg-light rounded-3 col-xl-6">
                                <div class="mb-3 text-center">
                                    <i class="bi bi-box-seam fs-1 text-danger"></i>
                                    <h4>Edit Barang</h4>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="kode_barang" class="formlabel">Kode Barang</label>
                                        <input class="form-control @error('kode_barang') is-invalid @enderror" type="text" name="kode_barang" id="kode_barang" value="{{ $errors->any() ? old('kode_barang') : $barang->kode_barang }}" placeholder="Masukkan Kode Barang">
                                        @error('kode_barang')
                                            <div class="textdanger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="nama_barang" class="form-label">Nama Barang</label>
                                        <input class="form-control @error('nama_barang') is-invalid @enderror" type="text" name="nama_barang" id="nama_barang" value="{{ $errors->any() ? old('nama_barang') : $barang->nama_barang }}" placeholder="Masukkan Nama Barang">
                                        @error('nama_barang')
                                            <div class="textdanger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="harga_barang" class="formlabel">Harga Barang</label>
                                        <input class="form-control @error('harga_barang') is-invalid @enderror" type="text" name="harga_barang" id="harga_barang" value="{{ $errors->any() ? old('harga_barang') : $barang->harga_barang }}" placeholder="Masukkan Harga Barang">
                                        @error('harga_barang')
                                            <div class="textdanger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="deskripsi_barang" class="formlabel">Deskripsi Barang</label>
                                        <input class="form-control @error('deskripsi_barang') is-invalid @enderror" type="text" name="deskripsi_barang" id="deskripsi_barang" value="{{ $errors->any() ? old('deskripsi_barang') : $barang->deskripsi_barang }}" placeholder="Masukkan Deskripsi Barang">
                                        @error('deskripsi_barang')
                                            <div class="textdanger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="satuan_id" class="formlabel">Satuan Barang</label>
                                        <select name="satuan_id" id="satuan_id" class="form-select">
                                            @php
                                                $selected = "";
                                                if ($errors->any())
                                                    $selected = old('satuan_id');
                                                else
                                                    $selected = $barang->satuan_id;
                                            @endphp
                                            @foreach ($satuans as $satuan)
                                                <option value="{{ $satuan->id }}" {{ $selected == $satuan->id ? 'selected' : '' }}>
                                                    {{ $satuan->kode_satuan.' - '.$satuan->nama_satuan }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('satuan_id')
                                            <div class="textdanger"><small>{{ $message }}</small></div>
                                        @enderror
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 d-grid">
                                        <a href="{{ route('barang.index') }}" class="btn btn-outline-danger btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                                    </div>
                                    <div class="col-md-6 d-grid">
                                        <button type="submit" class="btn btn-danger btn-lg mt-3"><i class="bi-check-circle me-2"></i> Edit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </form>
    </div>
@endsection

@vite('resources/js/app.js')
</body>
</html>
