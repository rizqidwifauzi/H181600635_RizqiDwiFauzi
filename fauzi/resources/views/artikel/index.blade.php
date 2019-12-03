@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Daftar Artikel</div>

            <div class="card-body">
                <a href="{!! route('artikel.create') !!}" class="btn btn-success">Tambah Data</a>
            <table border="1">
                <tr>
                    <td>ID</td>
                    <td>Judul</td>
                    <td>Isi</td>
                    <td>Kategori</td>
                    <td>Users</td>
                    <td>Create</td>
                    <td>Update</td>
                    <td>Aksi</td>
                </tr>

                @foreach($listArtikel as $item)

                 <tr>
                    <td>{!!$item->id!!}</td>
                    <td>{!!$item->judul!!}</td>
                    <td>{!!$item->isi!!}</td>
                    <td>{!!$item->kategori_artikel_id!!}</td>
                    <td>{!!$item->users_id!!}</td>                           
                    <td>{!!$item->created_at->format ('d/M/Y H:i:s')!!}</td>
                    <td>{!!$item->updated_at->format ('d/M/Y H:i:s')!!}</td>

                            
                <td>
                    <a href="{!! route('artikel.show', [$item->id]) !!} "class="btn btn-sm btn-primary" > Lihat </a>
                    <a href="{!! route('artikel.edit', [$item->id]) !!} "class="btn btn-sm btn-warning" > Ubah </a>

                     {!! Form::open(['route' => ['artikel.destroy', $item->id], 'method'=>'delete']) !!}

                     {!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-success','onclick'=>"return confirm('Apakah anda yakin menghapus data ini?')"]); !!}

                     {!! Form::close() !!}   

                </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection