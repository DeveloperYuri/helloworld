@extends('layouts.master')

@section('content')
<div class="container">

    <h3>List Data</h3>
    <a href="{{ route('indexcreate')}}" class="btn btn-primary">Create Data</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col" class="text-center">No</th>
            <th scope="col" class="text-center">Nama</th>
            <th scope="col" class="text-center">Deskripsi</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($getProduk as $value)
            <tr>
                <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                <td class="text-center">{{ $value->name}}</td>
                <td class="text-center">{{ $value->description}}</td>
                <td class="text-center">
                  <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                      action="{{ route('indexdelete', $value->id) }}" method="POST">
                      <a href="{{ route('indexshow', $value->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                      <a href="{{ route('indexedit', $value->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                  </form>
              </td>

              </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection