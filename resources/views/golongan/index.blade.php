@extends('layouts.app')

@section('content')
    <h3>Data Golongan</h3>
      <a href="{{ url('/golongan/create') }}">Golongan Baru</a>
    <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <th>KODE</th>
            <th>NAMA</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>

        @foreach ($rows as $row)
            <tr>
                <td>{{ $row->gol_id }}</td>
                <td>{{ $row->gol_kode }}</td>
                <td>{{ $row->gol_nama }}</td>
                <td><a class="btn btn-warning" href="{{ url('golongan/' . $row->gol_id . '/edit') }}">Edit</a></td>
                <td></td>
            </tr>
        @endforeach

    </table>
@endsection
