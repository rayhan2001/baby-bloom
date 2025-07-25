@extends('frontend.layouts.app')

@section('title', @$data['title'])

@section('content')
    <!-- Breadcrumb -->
    <section class="py-3 bg-light">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Shop Header -->
    <section class="py-4 bg-gradient-soft">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="fw-bold text-primary mb-2">Baby Products</h1>
                    <p class="text-muted mb-0">Discover our complete collection of baby essentials</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="d-flex align-items-center justify-content-md-end">
                        <span class="text-muted me-3">Showing 1-12 of 48 products</span>
                        <select class="form-select w-auto">
                            <option>Sort by: Featured</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Newest First</option>
                            <option>Best Selling</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Sidebar Filters -->
                <div class="col-lg-3 mb-4">
                    <div class="filters-sidebar">
                        <!-- Categories Filter -->
                        <div class="filter-section bg-white rounded-3 shadow-sm p-4 mb-4">
                            <h6 class="fw-bold mb-3">Categories</h6>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="clothing">
                                <label class="form-check-label" for="clothing">
                                    Baby Clothing <span class="text-muted">(24)</span>
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="toys">
                                <label class="form-check-label" for="toys">
                                    Toys & Games <span class="text-muted">(18)</span>
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="feeding">
                                <label class="form-check-label" for="feeding">
                                    Feeding <span class="text-muted">(15)</span>
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="care">
                                <label class="form-check-label" for="care">
                                    Baby Care <span class="text-muted">(12)</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gear">
                                <label class="form-check-label" for="gear">
                                    Baby Gear <span class="text-muted">(8)</span>
                                </label>
                            </div>
                        </div>

                        <!-- Age Filter -->
                        <div class="filter-section bg-white rounded-3 shadow-sm p-4 mb-4">
                            <h6 class="fw-bold mb-3">Age Range</h6>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="newborn">
                                <label class="form-check-label" for="newborn">
                                    Newborn (0-3 months)
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="infant">
                                <label class="form-check-label" for="infant">
                                    Infant (3-12 months)
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="toddler">
                                <label class="form-check-label" for="toddler">
                                    Toddler (1-3 years)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="preschool">
                                <label class="form-check-label" for="preschool">
                                    Preschool (3-5 years)
                                </label>
                            </div>
                        </div>

                        <!-- Price Filter -->
                        <div class="filter-section bg-white rounded-3 shadow-sm p-4 mb-4">
                            <h6 class="fw-bold mb-3">Price Range</h6>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="under25">
                                <label class="form-check-label" for="under25">
                                    Under $25
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="25to50">
                                <label class="form-check-label" for="25to50">
                                    $25 - $50
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="50to100">
                                <label class="form-check-label" for="50to100">
                                    $50 - $100
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="over100">
                                <label class="form-check-label" for="over100">
                                    Over $100
                                </label>
                            </div>
                        </div>

                        <!-- Brand Filter -->
                        <div class="filter-section bg-white rounded-3 shadow-sm p-4 mb-4">
                            <h6 class="fw-bold mb-3">Brand</h6>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="babybloom">
                                <label class="form-check-label" for="babybloom">
                                    BabyBloom
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="littleones">
                                <label class="form-check-label" for="littleones">
                                    Little Ones
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="sweetbaby">
                                <label class="form-check-label" for="sweetbaby">
                                    Sweet Baby
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="tinytreasures">
                                <label class="form-check-label" for="tinytreasures">
                                    Tiny Treasures
                                </label>
                            </div>
                        </div>

                        <!-- Clear Filters -->
                        <button class="btn btn-outline-primary rounded-pill w-100">
                            Clear All Filters
                        </button>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="col-lg-9">
                    <div class="row g-4">
                        <!-- Product 1 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="product-card bg-white rounded-3 shadow-sm h-100">
                                <div class="product-image">
                                    <img src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?w=300&h=250&fit=crop&crop=center" 
                                         alt="Baby Onesie" class="img-fluid rounded-top">
                                    <div class="product-badge">
                                        <span class="badge bg-danger rounded-pill">Sale</span>
                                    </div>
                                </div>
                                <div class="product-info p-3">
                                    <h6 class="fw-bold mb-2">Organic Cotton Onesie</h6>
                                    <div class="product-rating mb-2">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <span class="text-muted small">(24)</span>
                                    </div>
                                    <div class="product-price mb-3">
                                        <span class="h6 text-primary fw-bold">$19.99</span>
                                        <span class="text-muted text-decoration-line-through small">$24.99</span>
                                    </div>
                                    <a href="product-details.html" class="btn btn-primary rounded-pill w-100">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="product-card bg-white rounded-3 shadow-sm h-100">
                                <div class="product-image">
                                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=300&h=250&fit=crop&crop=center" 
                                         alt="Baby Blocks" class="img-fluid rounded-top">
                                </div>
                                <div class="product-info p-3">
                                    <h6 class="fw-bold mb-2">Soft Building Blocks</h6>
                                    <div class="product-rating mb-2">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <span class="text-muted small">(18)</span>
                                    </div>
                                    <div class="product-price mb-3">
                                        <span class="h6 text-primary fw-bold">$29.99</span>
                                    </div>
                                    <a href="product-details.html" class="btn btn-primary rounded-pill w-100">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="product-card bg-white rounded-3 shadow-sm h-100">
                                <div class="product-image">
                                    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=300&h=250&fit=crop&crop=center" 
                                         alt="Baby Bottle" class="img-fluid rounded-top">
                                </div>
                                <div class="product-info p-3">
                                    <h6 class="fw-bold mb-2">Anti-Colic Baby Bottle</h6>
                                    <div class="product-rating mb-2">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <span class="text-muted small">(32)</span>
                                    </div>
                                    <div class="product-price mb-3">
                                        <span class="h6 text-primary fw-bold">$15.99</span>
                                    </div>
                                    <a href="product-details.html" class="btn btn-primary rounded-pill w-100">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="product-card bg-white rounded-3 shadow-sm h-100">
                                <div class="product-image">
                                    <img src="https://images.unsplash.com/photo-1522771930-78848d9293e8?w=300&h=250&fit=crop&crop=center" 
                                         alt="Baby Stroller" class="img-fluid rounded-top">
                                </div>
                                <div class="product-info p-3">
                                    <h6 class="fw-bold mb-2">Lightweight Stroller</h6>
                                    <div class="product-rating mb-2">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <span class="text-muted small">(15)</span>
                                    </div>
                                    <div class="product-price mb-3">
                                        <span class="h6 text-primary fw-bold">$199.99</span>
                                    </div>
                                    <a href="product-details.html" class="btn btn-primary rounded-pill w-100">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Product 5 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="product-card bg-white rounded-3 shadow-sm h-100">
                                <div class="product-image">
                                    <img src="https://images.unsplash.com/photo-1522771930-78848d9293e8?w=300&h=250&fit=crop&crop=center" 
                                         alt="Baby Romper" class="img-fluid rounded-top">
                                    <div class="product-badge">
                                        <span class="badge bg-success rounded-pill">New</span>
                                    </div>
                                </div>
                                <div class="product-info p-3">
                                    <h6 class="fw-bold mb-2">Cotton Romper Set</h6>
                                    <div class="product-rating mb-2">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <span class="text-muted small">(8)</span>
                                    </div>
                                    <div class="product-price mb-3">
                                        <span class="h6 text-primary fw-bold">$34.99</span>
                                    </div>
                                    <a href="product-details.html" class="btn btn-primary rounded-pill w-100">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Product 6 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="product-card bg-white rounded-3 shadow-sm h-100">
                                <div class="product-image">
                                    <img src="https://images.unsplash.com/photo-1522771930-78848d9293e8?w=300&h=250&fit=crop&crop=center" 
                                         alt="Baby Rattle" class="img-fluid rounded-top">
                                </div>
                                <div class="product-info p-3">
                                    <h6 class="fw-bold mb-2">Musical Baby Rattle</h6>
                                    <div class="product-rating mb-2">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <span class="text-muted small">(12)</span>
                                    </div>
                                    <div class="product-price mb-3">
                                        <span class="h6 text-primary fw-bold">$12.99</span>
                                    </div>
                                    <a href="product-details.html" class="btn btn-primary rounded-pill w-100">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Product 7 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="product-card bg-white rounded-3 shadow-sm h-100">
                                <div class="product-image">
                                    <img src="https://images.unsplash.com/photo-1522771930-78848d9293e8?w=300&h=250&fit=crop&crop=center" 
                                         alt="Baby Blanket" class="img-fluid rounded-top">
                                </div>
                                <div class="product-info p-3">
                                    <h6 class="fw-bold mb-2">Soft Baby Blanket</h6>
                                    <div class="product-rating mb-2">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <span class="text-muted small">(28)</span>
                                    </div>
                                    <div class="product-price mb-3">
                                        <span class="h6 text-primary fw-bold">$39.99</span>
                                    </div>
                                    <a href="product-details.html" class="btn btn-primary rounded-pill w-100">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Product 8 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="product-card bg-white rounded-3 shadow-sm h-100">
                                <div class="product-image">
                                    <img src="https://images.unsplash.com/photo-1522771930-78848d9293e8?w=300&h=250&fit=crop&crop=center" 
                                         alt="Baby Shoes" class="img-fluid rounded-top">
                                </div>
                                <div class="product-info p-3">
                                    <h6 class="fw-bold mb-2">First Walker Shoes</h6>
                                    <div class="product-rating mb-2">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="far fa-star text-warning"></i>
                                        <span class="text-muted small">(20)</span>
                                    </div>
                                    <div class="product-price mb-3">
                                        <span class="h6 text-primary fw-bold">$24.99</span>
                                    </div>
                                    <a href="product-details.html" class="btn btn-primary rounded-pill w-100">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Product 9 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="product-card bg-white rounded-3 shadow-sm h-100">
                                <div class="product-image">
                                    <img src="https://images.unsplash.com/photo-1522771930-78848d9293e8?w=300&h=250&fit=crop&crop=center" 
                                         alt="Baby Bib" class="img-fluid rounded-top">
                                </div>
                                <div class="product-info p-3">
                                    <h6 class="fw-bold mb-2">Waterproof Baby Bib</h6>
                                    <div class="product-rating mb-2">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <span class="text-muted small">(16)</span>
                                    </div>
                                    <div class="product-price mb-3">
                                        <span class="h6 text-primary fw-bold">$8.99</span>
                                    </div>
                                    <a href="product-details.html" class="btn btn-primary rounded-pill w-100">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <nav aria-label="Product pagination" class="mt-5">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link rounded-pill" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link rounded-pill" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link rounded-pill" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link rounded-pill" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link rounded-pill" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link rounded-pill" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection