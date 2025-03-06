@extends('layouts.master')

@section('content')
<div class="container">

    <h3>Show Data</h3>
    <div class="card">
        <h5 class="card-header">{{ $produks->name }}</h5>
        <div class="card-body">
          <h5 class="card-title">{{ $produks->description }}</h5>
        </div>
      </div>
</div>
@endsection