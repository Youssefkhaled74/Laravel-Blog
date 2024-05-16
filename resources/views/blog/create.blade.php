@extends('layouts.app')
@section('content')
<div class="m-auto text-center pt-4 pb-4">
    <h1 class="fs-9 fw-bold"> Add Post</h1>
</div>
<div class="m-auto text-center p-4 container border border-4 mb-4">
    <form action="/blog" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-bold fs-3">Titel</label>
            <input type="text" class="form-control" name="titel">
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold fs-3">Subject</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div>
            <label class="form-label fw-bold fs-3">Choose Image</label>
            <input class="form-control form-control-lg fw-bold" type="file" name="image">
        </div>
        <div class="d-grid gap-1 mt-4">
            <button type="submit" class="btn btn-dark">Submit</button>
        </div>
    </form>
</div>
@endsection