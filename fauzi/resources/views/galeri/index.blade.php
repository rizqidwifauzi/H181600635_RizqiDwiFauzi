@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Galeri</div>

                <div class="card-body">
                <table border="1">
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Keterangan</td>
                <td>Patch</td>
                <td>User</td>
                <td>Create</td>
                <td>Aksi</td>
            </tr>

        @foreach($listGaleri as $item)
            
            <tr>
                <td>{!! $item->id !!}</td>
                <td>{!! $item->nama !!}</td>
                <td>{!! $item->keterangan !!}</td>
                <td>{!! $item->patch !!}</td>
                <td>{!! $item->users_id !!}</td>
                <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                <td>
                    <a href="{!! route('galeri.show',[$item->id]) !!}" class="btn btn-primary">Lihat</a>
                </td>
            </tr>

        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection