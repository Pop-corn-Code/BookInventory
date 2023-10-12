@extends('layouts.app')

@section('title', 'Home Page')
@section('content')
    <div class="container">
        <h1>Books</h1>
        <a href="{{ route('books.create') }}" class="btn btn-primary flex justify-end">Add Book</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">ISBN No</th>
                    <th scope="col">Author</th>
                    <th scope="col">Publisher</th>
                    <th scope="col">Edition</th>
                    <th scope="col">Category</th>
                    <th scope="col">Rack</th>
                    <th scope="col">Total copy</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <th scope="row">
                            <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->name }}" width="70" />
                            {{-- <img src="{{ asset('storage/' . $book->image) }}" alt="Book Image">     --}}
                        </th>
                        <td>{{ $book->title }}</td>
                        <td>IS{{ $book->isbn_no }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->publisher }}</td>
                        <td>{{ $book->edition }}</td>
                        <td>{{ $book->category }}</td>
                        <td>{{ $book->rack }}</td>
                        <td>{{ $book->quantity }}</td>
                        <td>Rs. {{ $book->price }}</td>
                        <td>
                            {{-- <a class="btn btn-info" href="{{ route('books.show', $book->id) }}">Show</a> --}}

                            <a class="btn btn-primary" href="{{ route('books.edit', $book->id) }}">Edit</a>

                            <a class="btn btn-danger" data-bs-toggle="modal" href="#dltbookM{{ $book->id }}"
                                role="button">Delete</a>
                            <div class="btn-group me-2" role="group" aria-label="Second group">
                                <div class="modal fade" id="dltbookM{{ $book->id }}" data-bs-backdrop="static"
                                    aria-hidden="true" aria-labelledby="dltLabel" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="dltLabel">Confirmation</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure to delete this book ?
                                            </div>
                                            <div class="modal-footer">
                                                <a class="btn btn-outline-primary"
                                                    href="{{ route('books.destroy', $book->id) }}">Yes</a>
                                                <button class="btn btn-outline-danger" data-bs-dismiss="modal">No</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
               
            </tfoot>
        </table>
         <div class="pagination justify-content-end">
                    {!! $books->links('vendor.pagination.bootstrap-5') !!}
                </div>
    </div>
@endsection
