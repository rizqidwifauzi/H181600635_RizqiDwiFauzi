@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Galeri</div>

                <div class="card-body">
                <a href="{!! route('galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
                <table border="1">
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Path</td>
                <td>Keterangan</td>
                <td>Kategori Id</td>
                <td>Users Id</td>
                <td>Create</td>
                <td>Update</td>
                <td>Aksi</td>
            </tr>

        @foreach($listGaleri as $item)
            
            <tr>
                <td>{!! $item->id !!}</td>
                <td>{!! $item->nama !!}</td>
                <td><img src="{!! asset($item->path) !!}" width="50px"></td>
                <td>{!! $item->keterangan !!}</td>
                <td>{!! $item->kategori_galeri_id !!}</td>
                <td>{!! $item->users_id !!}</td>
                <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                <td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
                <td>
                    <a href="{!! route('galeri.show',[$item->id]) !!}" class="btn btn-primary">Lihat</a>
                
                
                    <a href="{!! route('galeri.edit',[$item->id]) !!}" class="btn btn-warning">Ubah</a>

                    {!! Form::open(['route' => ['galeri.destroy', $item->id], 'method'=>'delete']) !!}

                    {!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-success','onclick'=>"return confirm('Apakah anda yakin menghapus data ini?')"]); !!}

                    {!! Form::close() !!}   

                </td>
            </tr>

        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection