@extends('layouts.master')

@section('content')

  <div class="col-lg-8 col-md-8 col-sm-12">


    @foreach ($posts as $post)

      @include('posts.post')

    @endforeach

  </div>

@endsection
