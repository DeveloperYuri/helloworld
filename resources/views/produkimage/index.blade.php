@extends('layouts.master')

@section('content')
<div class="container">

    <h3>List Data Produk Image</h3>
    @include('layouts._message')
    <a href="{{ route('indexprodukimagecreate')}}" class="btn btn-primary">Create Data</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col" class="text-center">No</th>
            <th scope="col" class="text-center">Nama</th>
            <th scope="col" class="text-center">Image</th>
            <th scope="col" class="text-center">Deskripsi</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($getProduk as $value)
            <tr>
                <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                <td class="text-center">{{ $value->name}}</td>
                <td class="text-center">
                  <img src="{{ asset('/storage/produkimage/' . $value->image) }}"
                   class="rounded" style="width: 100px" height="70px">
           </td>
         
                <td class="text-center">{{ $value->description}}</td>
                <td class="text-center">
                  <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                      action="{{ route('indexprodukimagedelete', $value->id) }}" method="POST">
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