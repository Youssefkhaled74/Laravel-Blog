@extends('layouts.app')
@section('content')
<!-- {{$posts}} -->
@if(session()->has('message'))
<div class="alert alert-dark" role="alert">
    {{session()->get('message')}}
</div>
@endif
<div class="m-auto text-center pt-4 pb-4">
    <h1 class="fs-9 fw-bold"> All Posts</h1>
</div>
@if(Auth::check())
<div class="container p-4">
    <a href="/blog/create" class="btn btn-dark text-uppercase fw-bold mb-3">
        Add New Post
    </a>
</div>
@endif
@foreach($posts as $post)
<!-- {{$post->titel}} -->
<div class="border border-4 rounded mb-4">
    <div class="row mb-4 justify-content-around p-3">
        <div class="col-sm-5"">
            <div class="">
                <img src=" /images/{{$post->img_path}}" class="card-img-top" alt="...">
            <!-- <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                </div> -->
        </div>
    </div>
    <div class="col-sm-5">
        <h2 class="fw-bold fs-7">
            {{$post->titel}}
        </h2>
        By: <span>
            {{$post->user->name}}
        </span>
        <br>
        On: <span>
            {{date( 'd-m-Y' , strtotime($post->updated_at))}}
        </span>
        <br>
        <p>
            {{$post->description}}
        </p>
        <a href="/blog/{{$post->slug}}" class="btn btn-dark text-uppercase fw-bold mb-3">
            Read More
        </a>
    </div>
</div>
</div>
@endforeach
@endsection