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
        <div class="container-sm my-5">
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 col-xl-4 border">
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Detail Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="kodeBarang" class="form-label">Kode Barang</label>
                            <h5>{{ $barang->kodeBarang }}</h5>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="namaBarang" class="form-label">Nama Barang</label>
                            <h5>{{ $barang->namaBarang }}</h5>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="hargaBarang" class="form-label">Harga Barang</label>
                            <h5>{{ $barang->hargaBarang }}</h5>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="deskripsiBarang" class="form-label">Deskripsi Barang</label>
                            <h5>{{ $barang->deskripsiBarang }}</h5>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="satuan_id" class="form-label">Kode Satuan</label>
                            <h5>{{ $barang->satuan->namaSatuan }}</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 d-grid">
                            <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
        @vite('resources/js/app.js')
    </body>

    </html>
