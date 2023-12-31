@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA ALAT SEKOLAH</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/obat')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">JENIS ALAT SEKOLAH</label>
                        <select name="obat_id_jenisobat" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($jenisobat as $jenis)
                                <option value="{{$jenis->jenisobat_id}}">{{$jenis->jenisobat_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA ALAT SEKOLAH</label>
                        <input type="text" name="obat_nama" class="form-control" placeholder="Nama ALAT SEKOLAH">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA</label>
                        <input type="text" name="obat_harga" class="form-control" placeholder="Harga ALAT SEKOLAH">
                    </div>
                    <div class="mb-3">
                        <label for="">STOCK</label>
                        <input type="text" name="obat_stock" class="form-control" placeholder="Stock ALAT SEKOLAH">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection