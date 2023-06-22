@extends('layouts.app')
@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('barangs.update', ['barang' => $barang->id])}}" method="POST">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Edit Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kodeBarang" class="form-label">Kode Barang</label>
                            <input class="form-control " type="text" name="kodeBarang" id="kodeBarang"
                                value="{{ $errors->any() ? old('kodeBarang') : $barang->kodeBarang }}"
                                placeholder="Masukan Kode Terbaru Barang">
                            @error('kodeBarang')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="namaBarang" class="form-label">Nama Barang</label>
                            <input class="form-control " type="text" name="namaBarang" id="namaBarang"
                                value="{{ $errors->any() ? old('namaBarang') : $barang->namaBarang }}"
                                placeholder="Masukan Nama Terbaru Barang">
                            @error('namaBarang')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-13 mb-3">
                            <label for="deskripsiBarang" class="form-label">Deskripsi Barang</label>
                            <input class="form-control " type="text" name="deskripsiBarang" id="deskripsiBarang"
                                value="{{ $errors->any() ? old('deskripsiBarang') : $barang->deskripsiBarang }}"
                                placeholder="Masukan Deskripsi Terbaru Barang">
                            @error('deskripsiBarang')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="hargaBarang" class="form-label">Harga Barang</label>
                            <input class="form-control " type="text" name="hargaBarang" id="hargaBarang"
                                value="{{ $errors->any() ? old('hargaBarang') : $barang->hargaBarang }}"
                                placeholder="Masukan Harga Terbaru Barang">
                            @error('hargaBarang')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="satuan" class="form-label">ID Satuan</label>
                            <select name="satuan" id="satuan" class="form-select">
                                @php
                                    $selected = '';
                                    if ($errors->any()) {
                                        $selected = old('satuan');
                                    } else {
                                        $selected = $barang->satuan_id;
                                    }
                                @endphp
                                @foreach ($satuans as $satuan)
                                    <option value="{{ $satuan->id }}" {{ $selected == $satuan->id ? 'selected' : '' }}>
                                        {{ $satuan->kodeSatuan .
                                            ' -
                                                                    ' .
                                            $satuan->namaSatuan }}</option>
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
                                    class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
