<!-- resources/views/books/index.blade.php -->

@extends('layouts.app')

@section('title', 'Create Page')
@section('content')
    <div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-3"></div>
            <div class="card"
                style="margin-top:10px; width: 50%; left:0; right: 0; bottom: 0; top: 0; margin: auto; padding-top: 10px">
                <div class="card-body">
                    <h1 class="text-center mb-3">Adding a new Bok</h1>
                    <div class="mb-3 row g-2 align-items-center">
                        <div class="col-auto">
                            <label for="title" class="form-label">Book Title</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" class="form-control" name="title" id="title"
                                placeholder="Enter the book title" required>
                        </div>
                    </div>
                    <div class="mb-3 row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="formGroupExampleInput" class="form-label">ISBN no.</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" class="form-control" name="isbn_no" id="isbn_no"
                                placeholder="Enter the book title" required>
                        </div>
                    </div>
                    <div class="mb-3 row g-4 align-items-center">
                        <div class="col-auto">
                            <label for="author" class="form-label">Author</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" class="form-control" name="author" id="author"
                                placeholder="Enter the author of the book" required>
                        </div>
                    </div>
                    <div class="mb-3 row g-2 align-items-center">
                        <div class="col-auto">
                            <label for="publisher" class="form-label">Publisher</label>
                        </div>
                        <div class="col-auto"><input type="text" class="form-control" name="publisher" id="publisher"
                                placeholder="Eg. Amazon publishing">
                        </div>
                    </div>
                    <div class="mb-3 row g-4 align-items-center">
                        <div class="col-auto">
                            <label for="edition" class="form-label">Edition</label>
                        </div>
                        <div class="col-auto"><input type="text" class="form-control" name="edition" id="edition"
                                placeholder="Eg. 2nd Edition">
                        </div>
                    </div>
                    <div class="mb-3 row g-2 align-items-center">
                        <div class="col-auto">
                            <label for="edition" class="form-label">Category</label>
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="comics" value="Comic">
                                <label class="form-check-label" for="comics">
                                    Comics
                                </label>
                            </div>
                            <div class="form-check">
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" name="category" id="fiction" value="Fiction">
                                </div>
                                <label class="form-check-label" for="fiction">
                                    Fiction
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="history" value="History">
                                <label class="form-check-label" for="history">
                                    History
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="classic" value="Classic">
                                <label class="form-check-label" for="classic">
                                    Classic
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="romance" value="Romance">
                                <label class="form-check-label" for="romance">
                                    Romance
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="horror" value="Horror">
                                <label class="form-check-label" for="horror">
                                    Horror
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="category" id="fantasyFiction" value="FantasyFiction">
                                <label class="form-check-label" for="fantasyFiction">
                                    Fantasy Fiction
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row g-4 align-items-center">
                        <div class="col-auto">
                            <label for="floatingSelect">Rack</label>
                        </div>
                        <div class="col-auto">
                            <select class="form-select" id="rack" name="rack">
                                <option selected>Select Rack</option>
                                 @for ($i = 1; $i <= 10; $i++)
                                    <option value='{{ $i }}'>
                                        {{ $i }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row g-4 align-items-center">
                        <div class="col-auto">
                            <label for="quantity" class="form-label">Total of copy</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" class="form-control" name="quantity" id="quantity" required>
                        </div>
                    </div>
                    <div class="mb-3 row g-4 align-items-center">
                        <div class="col-auto">
                            <label for="price" class="form-label">Price</label>
                        </div>
                        <div class="col-auto">
                            <input type="number" class="form-control" name="price" id="price" required>
                        </div>
                    </div>
                    <div class="mb-3 row g-4 align-items-center">
                        <div class="col-auto">
                            <label for="image" class="col-form-label">Book Cover Image</label>
                        </div>
                        <div class="col-auto ">
                            <input type="file" id="image" name="image" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center gap-2 mt-3">
                <button type="" class="btn btn-danger">Cancel</button>
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>

    </div>
@endsection
