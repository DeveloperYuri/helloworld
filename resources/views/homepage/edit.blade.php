@extends('layouts.master')

@section('content')
<div class="container mt-3">
    <h1>Edit Data</h1>
    <form action="{{ route('indexupdate', $data->id)}}" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="{{ $data->name }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" aria-describedby="emailHelp" name="description" value="{{ $data->description }}">  
          </div>
      
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection