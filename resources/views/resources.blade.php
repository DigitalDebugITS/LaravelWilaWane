<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="cDfJfyMoMfDpe1OV3qpw_r3BxfH9bN4XsPq63Y1sLHc" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Wila Wane Store</title>
    <meta name="description" content="Discover a wide range of Montessori wooden educational toys and books for children in Zambia. Explore our collection to support your child's creative learning journey.">
    <meta name="keywords" content="Montessori toys Zambia, educational toys Zambia, wooden toys, children's books Zambia, learning toys, Montessori learning">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="https://fonts.cdnfonts.com/css/buffalo-3?styles=153173" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/variables.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/resources.css') }}" rel="stylesheet">
    <style>
        /* Add your custom CSS styles here */
        .pagination {
            display: flex;
            justify-content: center;
            margin: 20px 0;
            list-style-type: none;
        }
        .pagination a {
            padding: 10px 15px;
            margin: 0 5px;
            background-color: #f2f2f2;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .pagination a:hover {
            background-color: #fc32c3;
            color: white;
        }
        .pagination .active {
            background-color: #fc32c3;
            color: white;
        }
        #categoryForm {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 auto 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
        }
        #categoryForm label {
            font-size: 16px;
            color: #333;
            margin-bottom: 8px;
            font-family: 'Poppins', sans-serif;
        }
        #categoryForm select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #333;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            font-family: 'Poppins', sans-serif;
        }
        #categoryForm select:focus {
            outline: none;
            border-color: #fc32c3;
            box-shadow: 0 0 5px rgba(252, 50, 195, 0.5);
        }
        .resources-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-top: 15px;
        }
        .resource-item {
            border: 1px solid #ccc;
            border-radius: 20px;
            padding: 20px;
            width: 300px;
            height: 500px;
            overflow: hidden;
            position: relative;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .resource-item:hover {
            transform: translateY(-10px);
        }
        .resource-item img {
            max-width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 20px;
            margin-bottom: 20px;
        }
        .resource-item h3 {
            color: #2c3e50;
            text-align: left;
            font-family: 'Buffalo', sans-serif;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .price {
            color: #f56b2a;
            font-weight: bold;
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .description {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            margin-bottom: 10px;
            flex-grow: 1;
        }
        .description.expanded {
            overflow: visible;
            display: block;
        }
        .see-more {
            cursor: pointer;
            color: blue;
            margin-top: 10px;
        }
        .url-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #fc32c3;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            width: 100%;
        }
        header {
            background-size: cover;
            background-position: center;
            color: #fc32c3;
            padding: 100px 20px;
            text-align: center;
            margin-bottom: 30px;
        }
        .banner-overlay {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 100px;
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin: 20px 0;
            list-style-type: none;
        }
        .pagination a {
            padding: 10px 15px;
            margin: 0 5px;
            background-color: #f2f2f2;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .pagination a:hover {
            background-color: #fc32c3;
            color: white;
        }
        .pagination a.active {
            background-color: #fc32c3;
            color: white;
        }
        #imageCarousel .carousel-inner .carousel-item img {
            border-radius: 10px;
        }
        @keyframes pulse {
            0% {
                opacity: 0.5;
            }
            50% {
                opacity: 1;
            }
            100% {
                opacity: 0.5;
            }
        }
        #heart-icon {
            animation: pulse 1.5s infinite;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <a href="{{ route('resources.index') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <img src="{{ asset('assets/img/apple-touch-icon.png') }}" alt="Logo">
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="#">Home</a></li>
                    <li><a class="nav-link" href="#about">About</a></li>
                    <li><a class="nav-link" href="#products">Products</a></li>
                    <li><a class="nav-link" href="#faq">Faq</a></li>
                    <li><a class="nav-link" href="#team">Team</a></li>
                    <li><a class="nav-link" href="#blog">Blog</a></li>
                    <li><a class="nav-link" href="#contact">Contact</a></li>
                    <li><a class="nav-link" href="https://wa.me/c/260975520847">Shop</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav>
            <a class="btn-getstarted" href="https://wa.me/c/260975520847">SHOP NOW</a>
        </div>
    </header>
    <main id="main" style="margin-top: 100px;">
        <div class="title">
            <h4 style="font-family: 'Buffalo', sans-serif; color: #F62AA0; font-size: 60px;">Resources</h4>
        </div>
        <!-- Category Filter Form -->
        <form method="GET" action="{{ route('resources.index') }}" id="categoryForm">
            <label for="category">Filter by Category:</label>
            <select name="category" id="category" onchange="this.form.submit()">
                <option value="">All</option>
                @foreach ($categories as $category)
                    <option value="{{ $category }}" @if ($selectedCategory == $category) selected @endif>{{ $category }}</option>
                @endforeach
            </select>
        </form>
        <!-- Resources Section -->
        <div id="resources" class="resources-section">
            @foreach ($resources as $resource)
                <div class="resource-item">
                    <img src="{{ asset('admin/product_images/' . $resource->image) }}" alt="{{ $resource->title }}">
                    <h3>{{ $resource->title }}</h3>
                    <p class="price">{{ $resource->price }}</p>
                    <p class="description" id="desc-{{ $resource->id }}">{{ $resource->description }}</p>
                    @if (strlen($resource->description) > 100)
                        <span class="see-more" onclick="toggleDescription('desc-{{ $resource->id }}', this)">See more</span>
                    @endif
                    <a href="{{ $resource->url }}" class="url-button" target="_blank">Learn more</a>
                </div>
            @endforeach
        </div>
        <!-- Pagination -->
        <div class="pagination">
            @for ($i = 1; $i <= $totalPages; $i++)
                <a href="?page={{ $i }}@if ($selectedCategory){{ '&category=' . urlencode($selectedCategory) }}@endif" class="{{ $page == $i ? 'active' : '' }}">{{ $i }}</a>
            @endfor
        </div>
    </main>
    <!-- Footer -->
    <footer id="footer" class="footer">
        <div class="footer-legal text-center">
            <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>WilaWane</span></strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        Designed & Developed with <i id="heart-icon" class="bi bi-heart-fill"></i> by <a href="#">Digital Debug IT Solutions</a>
                    </div>
                </div>
                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href="https://m.facebook.com/pages/Wila-Wane-Store/106955238955872/?locale=hi_IN" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/wilawane_store" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://l.instagram.com/?u=https%3A%2F%2Fwa.me%2F260975520847&e=AT29F0ZTN12zGL0_5jvEVaggF0EcbLbAbmH3NIbXHDlJXls5Xu9Hom-MJGSgM7ee-PH45Rshp_wnabKY3nhO9jTgZkZQT5abRtlxGw" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        function toggleDescription(id, button) {
            const description = document.getElementById(id);
            if (description.classList.contains('expanded')) {
                description.classList.remove('expanded');
                button.textContent = 'See more';
            } else {
                description.classList.add('expanded');
                button.textContent = 'See less';
            }
        }
    </script>
</body>

</html>
