<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin panel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('assets/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{route('admin')}}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Admin panel</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="ms-3">
                        <h6 class="mb-0">{{session()->get('admin')->first_name.' '.session()->get('admin')->last_name}}</h6>
                        <span>{{session()->get('admin')->email}}</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{route('admin')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex">Menu</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a class="dropdown-item" href="{{route('index')}}">Home</a>
                            <a class="dropdown-item" href="{{route('products')}}">Our Products</a>
                            <a class="dropdown-item" href="{{route('about')}}">About Us</a>
                            <a class="dropdown-item" href="{{route('contact')}}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Average price</p>
                                <h6 class="mb-0">{{$avgPrice}} RSD</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">№ of genres</p>
                                <h6 class="mb-0">{{$genreNumber}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">№ of publishers</p>
                                <h6 class="mb-0">{{$publisherNumber}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">№ of products</p>
                                <h6 class="mb-0">{{$productNumber}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent products</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">Number</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Genre</th>
                                    <th scope="col">Publisher</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($latestProducts as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->genre->name}}</td>
                                    <td>{{$product->publisher->name}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td><a class="btn btn-sm btn-primary" href="{{ route('product', ["product" => $product->id]) }}">Detail</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

                    <!-- Add product form -->
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add product</h6>
                            @if(session()->get('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{session()->get('error')}}
                                </div>
                            @endif
                            @if(session()->get('success'))
                                <div class="alert alert-success" role="alert">
                                    {{session()->get('success')}}
                                </div>
                            @endif

                            <form action="{{route('store')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Product name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="price" name="price">
                                </div>
                                <label for="genre" class="form-label">Genre</label>
                                <select class="form-select form-select-sm mb-3" id="genre" name="genre">
                                    <option selected>Select genre</option>
                                    @foreach($genres as $genre)
                                    <option value="{{$genre->id}}">{{$genre->name}}</option>
                                    @endforeach
                                </select>
                                <label for="publisher" class="form-label">Genre</label>
                                <select class="form-select form-select-sm mb-3" id="publisher" name="publisher">
                                    <option selected>Select publisher</option>
                                    @foreach($publishers as $publisher)
                                        <option value="{{$publisher->id}}">{{$publisher->name}}</option>
                                    @endforeach
                                </select>
                                <label for="category" class="form-label">Genre</label>
                                <select class="form-select form-select-sm mb-3" id="category" name="category">
                                    <option selected>Select category</option>
                                    @foreach($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description"></textarea>
                                <div class="mb-3">
                                    <label for="imageLink" class="form-label">Image link</label>
                                    <input type="text" class="form-control" id="imageLink" name="imageLink">
                                </div>
                                <div class="mb-3">
                                    <label for="releaseDate" class="form-label">Release date</label>
                                    <input type="date" class="form-control" id="releaseDate" name="releaseDate">
                                </div>
                                <button type="submit" class="btn btn-primary">Add product</button>
                            </form>
                        </div>
                    </div>
                    <!-- End of Add product form -->

                    <!-- Update product form -->
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Update product</h6>
                            @if(session()->get('errorUpdate'))
                                <div class="alert alert-danger" role="alert">
                                    {{session()->get('errorUpdate')}}
                                </div>
                            @endif
                            @if(session()->get('successUpdate'))
                                <div class="alert alert-success" role="alert">
                                    {{session()->get('successUpdate')}}
                                </div>
                            @endif

                            <form action="{{route('updateStore')}}" method="POST">
                                @csrf
                                <select class="form-select mb-3" id="productUpdate" name="productUpdate">
                                    <option selected value="0">Select product to update</option>
                                    @foreach($products as $product)
                                        <option value="{{$product->id}}">{{$product->name}}</option>
                                    @endforeach
                                </select>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Product name</label>
                                    <input type="text" class="form-control" id="nameUpdate" name="nameUpdate">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="priceUpdate" name="priceUpdate">
                                </div>
                                <label for="genre" class="form-label">Genre</label>
                                <select class="form-select form-select-sm mb-3" id="genreUpdate" name="genreUpdate">
                                    <option selected>Select genre</option>
                                    @foreach($genres as $genre)
                                        <option value="{{$genre->id}}">{{$genre->name}}</option>
                                    @endforeach
                                </select>
                                <label for="publisher" class="form-label">Genre</label>
                                <select class="form-select form-select-sm mb-3" id="publisherUpdate" name="publisherUpdate">
                                    <option selected>Select publisher</option>
                                    @foreach($publishers as $publisher)
                                        <option value="{{$publisher->id}}">{{$publisher->name}}</option>
                                    @endforeach
                                </select>
                                <label for="category" class="form-label">Genre</label>
                                <select class="form-select form-select-sm mb-3" id="categoryUpdate" name="categoryUpdate">
                                    <option selected>Select category</option>
                                    @foreach($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="descriptionUpdate" name="descriptionUpdate"></textarea>
                                <div class="mb-3">
                                    <label for="imageLink" class="form-label">Image link</label>
                                    <input type="text" class="form-control" id="imageLinkUpdate" name="imageLinkUpdate">
                                </div>
                                <div class="mb-3">
                                    <label for="releaseDate" class="form-label">Release date</label>
                                    <input type="date" class="form-control" id="releaseDateUpdate" name="releaseDateUpdate">
                                </div>
                                <button type="submit" class="btn btn-primary">Update product</button>
                            </form>
                        </div>
                    </div>
                    <!-- End of Update product form -->

                    <!-- Delete product form -->
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Delete product</h6>
                            @if(session()->get('errorDelete'))
                                <div class="alert alert-danger" role="alert">
                                    {{session()->get('errorDelete')}}
                                </div>
                            @endif
                            @if(session()->get('successDelete'))
                                <div class="alert alert-success" role="alert">
                                    {{session()->get('successDelete')}}
                                </div>
                            @endif

                            <form action="{{route('deleteStore')}}" method="POST">
                                @csrf
                                <select class="form-select mb-3" id="productDelete" name="productDelete">
                                    <option selected value="0">Select product to delete</option>
                                    @foreach($products as $product)
                                        <option value="{{$product->id}}">{{$product->name}}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-danger">Delete product</button>
                            </form>
                        </div>
                    </div>
                    <!-- End of Delete product form -->
                </div>
            </div>


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
