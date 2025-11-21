@extends('layouts.app') 
 
@section('content') 
<a href="{{ route('menus.create') }}" class="btn btn-primary mb-3">+ Tambah Menu</a> 
 
<table class="table table-bordered table-striped"> 
    <thead class="table-dark"> 
        <tr> 
            <th>No</th> 
            <th>Nama Menu</th> 
            <th>Foto</th> 
            <th>Harga</th> 
            <th>Aksi</th> 
        </tr> 
    </thead> 
    <tbody> 
        @foreach($menus as $menu) 
        <tr> 
            <td>{{ $loop->iteration }}</td> 
            <td>{{ $menu->nama_menu }}</td> 
            <td> 
                @if($menu->foto) 
                    <img src="{{ asset('storage/'.$menu->foto) }}" width="80"> 
                @else 
                    <small class="text-muted">Tidak ada</small> 
                @endif 
            </td> 
            <td>Rp {{ number_format($menu->harga, 0, ',', '.') }}</td> 
            <td> 
                <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-warning btn
sm">Edit</a> 
                <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" 
class="d-inline" onsubmit="return confirm('Yakin hapus?')"> 
                    @csrf 
                    @method('DELETE') 
                    <button class="btn btn-danger btn-sm">Hapus</button> 
                </form> 
            </td> 
        </tr> 
        @endforeach 
    </tbody> 
</table> 
@endsection