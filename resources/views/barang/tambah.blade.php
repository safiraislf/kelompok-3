<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    @extends('layouts.app')
    @section('content')
        <div class="container-sm mt-5">
            <form action="{{ route('barangs.store') }}" method="POST">
                @csrf
                <div class="row justify-content-center">
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Tambah Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kodeBarang" class="form-label">Kode Barang</label>
                            <input class="form-control" type="text" name="kodeBarang" id="kodeBarang"
                                value="{{ old('kodeBarang') }}" placeholder="Masukan Kode Barang">
                            @error('kodeBarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="namaBarang" class="form-label">Nama Barang</label>
                            <input class="form-control" type="text" name="namaBarang" id="NamaBarang" value=""
                                placeholder="Masukan Nama Barang">
                            @error('namaBarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-13 mb-3">
                            <label for="deskripsiBarang" class="form-label">Deskripsi Barang</label>
                            <input class="form-control" type="text" name="deskripsiBarang" id="deskripsiBarang"
                                value="" placeholder="Masukan Deskripsi Barang">
                            @error('deskripsiBarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="hargaBarang" class="form-label">Harga Barang</label>
                            <input class="form-control" type="text" name="hargaBarang" id="hargaBarang" value=""
                                placeholder="Masukan Harga Barang">
                            @error('hargaBarang')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="satuan" class="form-label">ID Satuan</label>
                            <select name="satuan" id="satuan" class="form-select">
                                @foreach ($satuans as $satuan)
                                    <option value="{{ $satuan->id }}"
                                        {{ old('satuan') == $satuan->id ? 'selected' : '' }}>
                                        {{ $satuan->kodeSatuan . ' -' . $satuan->namaSatuan }}</option>
                                @endforeach
                            </select>
                            @error('satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle
me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark
btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
        @endsection
        @vite('resources/js/app.js')
    </body>

    </html>
