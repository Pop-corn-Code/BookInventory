<!-- resources/views/books/index.blade.php -->

@extends('layouts.app')

@section('title', 'Preview Page')
@section('content')
    <div class="container">
       
            <div class="mt-3"></div>
            <div class="card"
                style="margin-top:10px; width: 50%; left:0; right: 0; bottom: 0; top: 0; margin: auto; padding-top: 10px">
                <div class="card-body">
                    <h1 class="text-center mb-3">Editing a Bok</h1>
                    <img class="rounded mx-auto d-block" src="{{ asset('storage/' . $book->image) }}" width="300px">
                    <div class="mb-3 row g-2 align-items-center">
                        <div class="col-auto">
                            <strong class="form-label">Book Title</strong>
                        </div>
                        <div class="col-auto">
                            <span>{{ $book->title }}</span>
                        </div>
                    </div>
                    <div class="mb-3 row g-3 align-items-center">
                        <div class="col-auto">
                            <strong class="form-label">ISBN no.</strong>
                        </div>
                        <div class="col-auto">
                            <span>{{ $book->isbn_no }}</span>
                        </div>
                    </div>
                    <div class="mb-3 row g-4 align-items-center">
                        <div class="col-auto">
                            <strong class="form-label">Author</strong>
                        </div>
                        <div class="col-auto">
                           <span>{{$book->author}}</span>
                        </div>
                    </div>
                    <div class="mb-3 row g-2 align-items-center">
                        <div class="col-auto">
                            <strong class="form-label">Publisher</strong>
                        </div>
                        <div class="col-auto">
                            <span>{{ $book->publisher }}</span>
                        </div>
                    </div>
                    <div class="mb-3 row g-4 align-items-center">
                        <div class="col-auto">
                            <strong class="form-label">Edition</strong>
                        </div>
                        <div class="col-auto">
                            <span>{{$book->edition}}</span>
                        </div>
                    </div>
                    <div class="mb-3 row g-2 align-items-center">
                        <div class="col-auto">
                            <strong>Category</strong>
                        </div>
                        <div class="col-auto">
                            <span>{{$book->category}}</span>
                        </div>
                    </div>
                    <div class="mb-3 row g-4 align-items-center">
                        <div class="col-auto">
                            <strong>Rack</strong>
                        </div>
                        <div class="col-auto">
                           <span>{{$book->rack}}</span>
                        </div>
                    </div>
                    <div class="mb-3 row g-4 align-items-center">
                        <div class="col-auto">
                            <strong class="form-label">Total of copy</strong>
                        </div>
                        <div class="col-auto">
                            <span>{{$book->quantity}}</span>
                        </div>
                    </div>
                    <div class="mb-3 row g-4 align-items-center">
                        <div class="col-auto">
                            <strong class="form-label">Price: </strong>
                        </div>
                        <div class="col-auto">
                           <span>{{$book->price}} usd</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center gap-2 mt-3">
                <a type="button" class="btn btn-primary" href="/books">Back Home</a>
    </div>
@endsection
