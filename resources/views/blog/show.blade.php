@extends('layouts.app')
@section ('content')
@if(session()->has('message'))
<div class="alert alert-dark" role="alert">
{{session()->get('message')}}
</div>
@endif
<div class="text-center mx-auto">
    <h1>
        {{$post->titel}}
    </h1>
    </h2>   
    By: <span>
        {{$post->user->name}}
    </span>
    <br>
    On: <span>
        {{date( 'd-m-Y' , strtotime($post->updated_at))}}
    </span>
    <div class="mx-auto mt-3" style="width: 40rem;">
        <img src="/images/{{$post->img_path}}" class="card-img-top" alt="...">
        <!-- <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                </div> -->
    </div>
    <p class="text-center mt-4 p-5">
        {{$post->description}}
    </p>
    @if(Auth::user() && Auth::user()->id == $post->user_id)
    <div class="p-4">
        <a href="/blog/{{$post->slug}}/edit" class="btn btn-dark text-uppercase">
            Edit The Post
        </a>
    </div>
    <form action="/blog/{{ $post->slug }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger mb-4">
            Delete post
        </button>
    </form>
    @endif
</div>
@endsection