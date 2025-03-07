@extends('layouts.master')

@section('content')
<div class="container mt-3">
    <h1>Create Data</h1>
    <form action="{{ route('indexsave')}}" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
          @if ($errors->has('name'))
          <div class="error" style="color: red">{{ $errors->first('name') }}</div>
 @endif
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" aria-describedby="emailHelp" name="description">
            @if ($errors->has('description'))
            <div class="error" style="color: red">{{ $errors->first('description') }}</div>
   @endif
  
          </div>

          {{-- @foreach ($errors->all() as $error)
    <li style="color: red">{{ $error }}</li>
@endforeach --}}

      
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
      </form>
</div>
@endsection