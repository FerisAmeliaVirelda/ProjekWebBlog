@extends('layouts.app')
@section('content')
<div class="container">
    <div class="jumbotron mt-4">
        <h4>{{ $amelias->title }}</h4><br>
        <img src="{{ asset('storage/amelias/'.$amelias->image) }}" class="w-30 rounded ">
        <p class="tmt-3">
            {!! $amelias->content !!}
        </p>    
    </div>
    <a href="/trending" class="btn btn-dark">Back</a>
    <hr>
</div>
@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AmolTech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background: rgb(247, 243, 243)">
    <div class="container mt-5 mb-5">
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <img src="{{ asset('storage/amelias/'.$amelias->image) }}" class="w-100 rounded">
            <hr>
            <h4>{{ $amelias->title }}</h4>
            <p class="tmt-3">
                {!! $amelias->content !!}
            </p>
            <a href="/amelias" class="btn btn-dark">Back</a>
        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html> --}}