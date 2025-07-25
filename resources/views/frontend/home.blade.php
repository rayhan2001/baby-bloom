@extends('frontend.layouts.app')

@section('title', @$data['title'])

@section('content')
    <!-- Hero Section -->
    <section class="hero-section bg-gradient-soft">
        <div class="container">
            <div class="row align-items-center min-vh-50">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="display-4 fw-bold text-primary mb-4">
                            Everything Your Baby Needs
                        </h1>
                        <p class="lead text-muted mb-4">
                            Discover our curated collection of safe, high-quality baby products.
                            From clothing to toys, we have everything to keep your little one happy and healthy.
                        </p>
                        <div class="hero-buttons">
                            <a href="shop.html" class="btn btn-primary btn-lg rounded-pill me-3">
                                Shop Now <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                            <a href="#featured" class="btn btn-outline-primary btn-lg rounded-pill">
                                View Categories
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image text-center">
                        <img src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?w=500&h=400&fit=crop&crop=center"
                            alt="Happy Baby" class="img-fluid rounded-3">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Categories -->
    <section id="featured" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary">Shop by Category</h2>
                <p class="text-muted">Find exactly what you need for your little one</p>
            </div>
            <div class="row g-4">
                <div class="col-md-3 col-sm-6">
                    <div class="category-card text-center p-4 rounded-3 h-100">
                        <div class="category-icon mb-3">
                            <i class="fas fa-tshirt fa-3x text-pink"></i>
                        </div>
                        <h5 class="fw-bold">Baby Clothing</h5>
                        <p class="text-muted small">Soft, comfortable clothes for every occasion</p>
                        <a href="shop.html?category=clothing" class="btn btn-outline-pink rounded-pill">Shop Now</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="category-card text-center p-4 rounded-3 h-100">
                        <div class="category-icon mb-3">
                            <i class="fas fa-puzzle-piece fa-3x text-blue"></i>
                        </div>
                        <h5 class="fw-bold">Toys & Games</h5>
                        <p class="text-muted small">Educational and fun toys for development</p>
                        <a href="shop.html?category=toys" class="btn btn-outline-blue rounded-pill">Shop Now</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="category-card text-center p-4 rounded-3 h-100">
                        <div class="category-icon mb-3">
                            <i class="fas fa-baby-carriage fa-3x text-mint"></i>
                        </div>
                        <h5 class="fw-bold">Baby Gear</h5>
                        <p class="text-muted small">Strollers, car seats, and essential gear</p>
                        <a href="shop.html?category=gear" class="btn btn-outline-mint rounded-pill">Shop Now</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="category-card text-center p-4 rounded-3 h-100">
                        <div class="category-icon mb-3">
                            <i class="fas fa-heart fa-3x text-pink"></i>
                        </div>
                        <h5 class="fw-bold">Baby Care</h5>
                        <p class="text-muted small">Gentle care products for your baby</p>
                        <a href="shop.html?category=care" class="btn btn-outline-pink rounded-pill">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-5 bg-light-mint">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary">Featured Products</h2>
                <p class="text-muted">Our most popular items this month</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="product-card bg-white rounded-3 shadow-sm h-100">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1522771930-78848d9293e8?w=300&h=250&fit=crop&crop=center"
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
                <div class="col-lg-3 col-md-6">
                    <div class="product-card bg-white rounded-3 shadow-sm h-100">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1522771930-78848d9293e8?w=300&h=250&fit=crop&crop=center"
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
                <div class="col-lg-3 col-md-6">
                    <div class="product-card bg-white rounded-3 shadow-sm h-100">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1522771930-78848d9293e8?w=300&h=250&fit=crop&crop=center"
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
                <div class="col-lg-3 col-md-6">
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
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary">What Parents Say</h2>
                <p class="text-muted">Real reviews from happy customers</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card bg-white rounded-3 shadow-sm p-4 h-100">
                        <div class="testimonial-rating mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="text-muted mb-3">
                            "Amazing quality products! My baby loves everything we've bought from BabyBloom.
                            Fast shipping and excellent customer service."
                        </p>
                        <div class="testimonial-author d-flex align-items-center">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616c9c0b8d3?w=50&h=50&fit=crop&crop=face"
                                alt="Sarah M." class="rounded-circle me-3" width="50" height="50">
                            <div>
                                <h6 class="mb-0 fw-bold">Sarah M.</h6>
                                <small class="text-muted">Mother of 2</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card bg-white rounded-3 shadow-sm p-4 h-100">
                        <div class="testimonial-rating mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="text-muted mb-3">
                            "The organic cotton clothes are so soft and comfortable.
                            My little one has sensitive skin and these products are perfect!"
                        </p>
                        <div class="testimonial-author d-flex align-items-center">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616c9c0b8d3?w=50&h=50&fit=crop&crop=face"
                                alt="Mike D." class="rounded-circle me-3" width="50" height="50">
                            <div>
                                <h6 class="mb-0 fw-bold">Mike D.</h6>
                                <small class="text-muted">New Dad</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card bg-white rounded-3 shadow-sm p-4 h-100">
                        <div class="testimonial-rating mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                        </div>
                        <p class="text-muted mb-3">
                            "Great selection and competitive prices. The educational toys have been
                            fantastic for my baby's development. Highly recommend!"
                        </p>
                        <div class="testimonial-author d-flex align-items-center">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616c9c0b8d3?w=50&h=50&fit=crop&crop=face"
                                alt="Emma L." class="rounded-circle me-3" width="50" height="50">
                            <div>
                                <h6 class="mb-0 fw-bold">Emma L.</h6>
                                <small class="text-muted">First-time Mom</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-5 bg-gradient-soft">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h3 class="fw-bold text-primary mb-3">Stay Updated</h3>
                    <p class="text-muted mb-4">
                        Get the latest baby care tips, product updates, and exclusive offers delivered to your inbox.
                    </p>
                    <form class="newsletter-form">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control rounded-pill-start"
                                placeholder="Enter your email address">
                            <button class="btn btn-primary rounded-pill-end" type="submit">
                                Subscribe <i class="fas fa-paper-plane ms-1"></i>
                            </button>
                        </div>
                        <small class="text-muted">
                            We respect your privacy. Unsubscribe at any time.
                        </small>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
