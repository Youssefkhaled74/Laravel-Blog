@extends('layouts.app')
@section('content')
<!-- Hero -->
<div class="text-center justify-content-center mt-5">
    <h1 class="text-uppercase">
        Welcome To My Blog
    </h1>
    <a href="/blog/" class="mt-4 btn btn-lg btn-dark mb-5">
        Start Reading
    </a>
</div>
<!-- How To be Youssef -->
<div class="container justify-content-around row mb-5 mt-5 youssef">
    <div class="col-sm-4 rounded-3 container">
    <img src="https://images.unsplash.com/photo-1685853995266-d095653bc6d1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHx0b3BpYy1mZWVkfDEwfGJvOGpRS1RhRTBZfHxlbnwwfHx8fHw%3D&auto=format&fit=crop&w=500&q=60" alt="">    </div>
    <div class="col-sm-4 container">
        <h2 class="fw-bold text-uppercase">
            How to be YOUSSEF in 2024 ..??
        </h2>
        <p class="fw-bold text-uppercase">
            you search in impossible thing !!!!!
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates dolorem rerum iste sed, quos, qui doloribus dolorum, ipsum aliquid deleniti excepturi obcaecati! Rerum, sunt sequi? At excepturi laboriosam deserunt illo.
        </p>
        <a href="/blog/uossef" class="btn btn-danger text-uppercase fw-bold d-grid">
            Donot 	&nbsp	&nbsp Use 	&nbsp	&nbsp  This 	&nbsp	&nbsp  Button
        </a>
    </div>
</div>
<!-- Blog cetagories -->
<div class="bg-dark text-white container-fluid">
    <h2 class="p-sm-4 text-center">
        Blog Cetaories
    </h2>
    <div class="mb-4 p-4 p-4 row justify-content-around">
        <span class="fw-bold text fs-3 pd-2 col-sm-3">UX Design Thinking</span>
        <span class="fw-bold text fs-3 pd-2 col-sm-3">Programming Lanuages</span>
        <span class="fw-bold text fs-3 pd-2 col-sm-3">Graphic Desing </span>
        <span class="fw-bold text fs-3 pd-2 col-sm-3">Front-end Development</span>
    </div>
</div>
<!-- Recent Posts -->
<div class="container-fluid text-center p-4">
    <h2 class="fw-bold fs-9">
        Recent posts
    </h2>
    <p class="text p-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis vel nemo iusto veniam ipsa beatae quia hic aspernatur, maiores id repellendus pariatur, nulla eius, quae error. Voluptatem unde officia sapiente, ullam id quos sint, quasi debitis itaque, temporibus deleniti in. Voluptates quam praesentium in quaerat quo. Velit debitis ab odit.
    </p>
</div>
<div class="row m-4 justify-content-center container-fluid">
    <div class="col-sm-6 bg-dark">
        <div class="p-2">
            <div class="inline-block row justify-content-around mb-4 mt-4">
                <div class="col-sm-2 btn btn-success">Php</div>
                <div class="col-sm-3 btn btn-success">Programming</div>
                <div class="col-sm-2 btn btn-success">Lanuages</div>
                <div class="col-sm-2 btn btn-success">Back-end</div>
            </div>
            <p>
            PHP (recursive acronym for PHP: Hypertext Preprocessor ) is a widely-used open source general-purpose scripting language that is especially 
            </p>
            <a href="/" class="btn btn-outline-dark text-uppercase fw-bold">Read More</a>
        </div>
    </div>

    <div class="col-sm-6">
        <img src="https://images.unsplash.com/photo-1599507593499-a3f7d7d97667?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cGhwfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" alt="">
    </div>
</div>
@endsection