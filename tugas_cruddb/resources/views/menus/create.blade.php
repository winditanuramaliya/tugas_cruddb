@extends('layouts.app') 
 
@section('content') 
<div class="card"> 
    <div class="card-body"> 
        <h4>Tambah Menu</h4> 
        <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form
data"> 
            @csrf 
            <div class="mb-3"> 
                <label>Nama Menu</label> 
                <input type="text" name="nama_menu" class="form-control" value="{{ 
old('nama_menu') }}"> 
                @error('nama_menu') <small class="text-danger">{{ $message }}</small> 
@enderror 
            </div> 
            <div class="mb-3"> 
                <label>Harga</label> 
                <input type="number" name="harga" class="form-control" value="{{ 
old('harga') }}"> 
                @error('harga') <small class="text-danger">{{ $message }}</small> @enderror 
            </div> 
            <div class="mb-3"> 
                <label>Foto</label> 
                <input type="file" name="foto" class="form-control"> 
                @error('foto') <small class="text-danger">{{ $message }}</small> @enderror 
            </div> 
            <button class="btn btn-success">Simpan</button> 
            <a href="{{ route('menus.index') }}" class="btn btn-secondary">Kembali</a> 
        </form> 
    </div> 
</div> 
@endsection 