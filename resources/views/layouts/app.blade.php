<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Books - @yield('title', '')</title>
</head>

<body>
    {{-- <div class="offcanvas offcanvas-start show text-bg-dark" tabindex="10000" id="offcanvasDark" data-bs-backdrop="static"
        aria-labelledby="offcanvasDarkLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkLabel">Offcanvas</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvasDark"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p>Place offcanvas content here.</p>
        </div>
    </div> --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Book Inventory</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <form class="d-flex  mx-3" role="search" action="{{ route('search') }}" method="GET">
                    <input class="form-control me-2" type="search"  name="query"  placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> 
                <ul class="navbar-nav ms-3 d-flex">
                    <li class="nav-item">
                        <a class="nav-link" href="#">name@gmail.com  |  </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex gap-3">
        <div style="width: 20%; background-color: white;">
            <a href="/" class="btn text-primary ms-3" type="button" >
                Dashboard
            </a>
            <div class="dropdown mt-3 m-3">
                <a class="btn text-primary " type="button" data-bs-toggle="dropdown">
                    Books
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item"  href="/books">Manage Book</a></li>
                    <li><a class="dropdown-item"  href="{{ route('books.create') }}">Category</a></li>
                    <li><a class="dropdown-item"  href="{{ route('books.create') }}">Author</a></li>
                    <li><a class="dropdown-item"  href="{{ route('books.create') }}">Publisher</a></li>
                    <li><a class="dropdown-item"  href="{{ route('books.create') }}">Rack</a></li>
                </ul>
            </div>
            <div>
                <a class="btn text-primary ms-3" type="button" >
                    Issue Book
                </a>
            </div>
            <div>
                <a class="btn text-primary ms-3" type="button" >
                    User
                </a>
            </div>
            <div>
                <a class="btn text-primary ms-3" type="button" >
                    Logout
                </a>
            </div>

        </div>
        <div style="width: 70%">
            <main>
                @yield('content')
            </main>
        </div>
    </div>
    <footer class="text-center p-3">
        &copy; {{ date('Y') }} Book Inventory
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
