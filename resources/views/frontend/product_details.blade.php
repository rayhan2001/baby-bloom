@extends('frontend.layouts.app')

@section('title', $data['title'])
@section('content')
    <!-- Breadcrumb -->
    <section class="py-3 bg-light">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="shop.html" class="text-decoration-none">Shop</a></li>
                    <li class="breadcrumb-item"><a href="shop.html?category=clothing" class="text-decoration-none">Baby Clothing</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Organic Cotton Onesie</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Product Details -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Product Images -->
                <div class="col-lg-6">
                    <div class="product-gallery">
                        <!-- Main Image -->
                        <div class="main-image mb-3">
                            <img src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?w=500&h=500&fit=crop&crop=center" 
                                 alt="Organic Cotton Onesie" class="img-fluid rounded-3 w-100" id="mainImage">
                        </div>
                        <!-- Thumbnail Images -->
                        <div class="thumbnail-images">
                            <div class="row g-2">
                                <div class="col-3">
                                    <img src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?w=120&h=120&fit=crop&crop=center" 
                                         alt="Front View" class="img-fluid rounded-2 w-100 thumbnail-img active" 
                                         onclick="changeMainImage(this.src)">
                                </div>
                                <div class="col-3">
                                    <img src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?w=120&h=120&fit=crop&crop=center" 
                                         alt="Back View" class="img-fluid rounded-2 w-100 thumbnail-img" 
                                         onclick="changeMainImage(this.src)">
                                </div>
                                <div class="col-3">
                                    <img src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?w=120&h=120&fit=crop&crop=center" 
                                         alt="Side View" class="img-fluid rounded-2 w-100 thumbnail-img" 
                                         onclick="changeMainImage(this.src)">
                                </div>
                                <div class="col-3">
                                    <img src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?w=120&h=120&fit=crop&crop=center" 
                                         alt="Fabric Detail" class="img-fluid rounded-2 w-100 thumbnail-img" 
                                         onclick="changeMainImage(this.src)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-6">
                    <div class="product-details">
                        <!-- Product Title -->
                        <h1 class="fw-bold text-primary mb-3">Organic Cotton Onesie</h1>
                        
                        <!-- Rating -->
                        <div class="product-rating mb-3">
                            <div class="d-flex align-items-center">
                                <div class="stars me-2">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                                <span class="text-muted">(24 reviews)</span>
                                <a href="#reviews" class="text-decoration-none ms-2">Write a review</a>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="product-price mb-4">
                            <span class="h3 text-primary fw-bold me-3">$19.99</span>
                            <span class="h5 text-muted text-decoration-line-through">$24.99</span>
                            <span class="badge bg-danger ms-2">20% OFF</span>
                        </div>

                        <!-- Product Description -->
                        <div class="product-description mb-4">
                            <p class="text-muted">
                                Made from 100% organic cotton, this adorable onesie is perfect for your little one's 
                                sensitive skin. Features snap closures for easy diaper changes and comes in beautiful 
                                pastel colors that are perfect for any occasion.
                            </p>
                        </div>

                        <!-- Product Options -->
                        <div class="product-options mb-4">
                            <!-- Size Selection -->
                            <div class="mb-3">
                                <label class="form-label fw-bold">Size:</label>
                                <div class="size-options">
                                    <input type="radio" class="btn-check" name="size" id="size-newborn" autocomplete="off">
                                    <label class="btn btn-outline-primary rounded-pill me-2" for="size-newborn">Newborn</label>
                                    
                                    <input type="radio" class="btn-check" name="size" id="size-3m" autocomplete="off" checked>
                                    <label class="btn btn-outline-primary rounded-pill me-2" for="size-3m">0-3M</label>
                                    
                                    <input type="radio" class="btn-check" name="size" id="size-6m" autocomplete="off">
                                    <label class="btn btn-outline-primary rounded-pill me-2" for="size-6m">3-6M</label>
                                    
                                    <input type="radio" class="btn-check" name="size" id="size-9m" autocomplete="off">
                                    <label class="btn btn-outline-primary rounded-pill me-2" for="size-9m">6-9M</label>
                                    
                                    <input type="radio" class="btn-check" name="size" id="size-12m" autocomplete="off">
                                    <label class="btn btn-outline-primary rounded-pill" for="size-12m">9-12M</label>
                                </div>
                            </div>

                            <!-- Color Selection -->
                            <div class="mb-3">
                                <label class="form-label fw-bold">Color:</label>
                                <div class="color-options">
                                    <input type="radio" class="btn-check" name="color" id="color-pink" autocomplete="off" checked>
                                    <label class="btn btn-outline-pink rounded-pill me-2" for="color-pink">Pink</label>
                                    
                                    <input type="radio" class="btn-check" name="color" id="color-blue" autocomplete="off">
                                    <label class="btn btn-outline-blue rounded-pill me-2" for="color-blue">Blue</label>
                                    
                                    <input type="radio" class="btn-check" name="color" id="color-mint" autocomplete="off">
                                    <label class="btn btn-outline-mint rounded-pill me-2" for="color-mint">Mint</label>
                                    
                                    <input type="radio" class="btn-check" name="color" id="color-white" autocomplete="off">
                                    <label class="btn btn-outline-secondary rounded-pill" for="color-white">White</label>
                                </div>
                            </div>

                            <!-- Quantity -->
                            <div class="mb-4">
                                <label class="form-label fw-bold">Quantity:</label>
                                <div class="quantity-selector d-flex align-items-center">
                                    <button class="btn btn-outline-secondary rounded-pill" type="button" onclick="decreaseQuantity()">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input type="number" class="form-control text-center mx-2" value="1" min="1" max="10" id="quantity" style="width: 80px;">
                                    <button class="btn btn-outline-secondary rounded-pill" type="button" onclick="increaseQuantity()">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="product-actions mb-4">
                            <button class="btn btn-primary btn-lg rounded-pill me-3 px-4">
                                <i class="fas fa-shopping-cart me-2"></i>Add to Cart
                            </button>
                            <button class="btn btn-outline-pink btn-lg rounded-pill px-4">
                                <i class="fas fa-heart me-2"></i>Add to Wishlist
                            </button>
                        </div>

                        <!-- Product Features -->
                        <div class="product-features">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="feature-item d-flex align-items-center">
                                        <i class="fas fa-leaf text-mint me-2"></i>
                                        <span class="small">100% Organic Cotton</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item d-flex align-items-center">
                                        <i class="fas fa-shield-alt text-blue me-2"></i>
                                        <span class="small">Hypoallergenic</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item d-flex align-items-center">
                                        <i class="fas fa-sync-alt text-pink me-2"></i>
                                        <span class="small">Machine Washable</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item d-flex align-items-center">
                                        <i class="fas fa-truck text-primary me-2"></i>
                                        <span class="small">Free Shipping</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Tabs -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs justify-content-center mb-4" id="productTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active rounded-pill me-2" id="description-tab" data-bs-toggle="tab" 
                                    data-bs-target="#description" type="button" role="tab">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill me-2" id="specifications-tab" data-bs-toggle="tab" 
                                    data-bs-target="#specifications" type="button" role="tab">Specifications</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill me-2" id="care-tab" data-bs-toggle="tab" 
                                    data-bs-target="#care" type="button" role="tab">Care Instructions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill" id="reviews-tab" data-bs-toggle="tab" 
                                    data-bs-target="#reviews" type="button" role="tab">Reviews (24)</button>
                        </li>
                    </ul>
                    
                    <div class="tab-content" id="productTabsContent">
                        <!-- Description Tab -->
                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="bg-white rounded-3 p-4 shadow-sm">
                                        <h5 class="fw-bold mb-3">Product Description</h5>
                                        <p class="text-muted mb-3">
                                            Our Organic Cotton Onesie is crafted with love and care for your precious little one. 
                                            Made from 100% certified organic cotton, this onesie provides the ultimate comfort and 
                                            softness that your baby deserves.
                                        </p>
                                        <p class="text-muted mb-3">
                                            The thoughtful design features convenient snap closures at the bottom for easy diaper 
                                            changes, while the envelope neckline makes dressing and undressing a breeze. Available 
                                            in beautiful pastel colors that are perfect for both boys and girls.
                                        </p>
                                        <ul class="text-muted">
                                            <li>Made from 100% organic cotton</li>
                                            <li>Snap closure for easy diaper changes</li>
                                            <li>Envelope neckline for easy dressing</li>
                                            <li>Available in multiple sizes and colors</li>
                                            <li>Machine washable and durable</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Specifications Tab -->
                        <div class="tab-pane fade" id="specifications" role="tabpanel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="bg-white rounded-3 p-4 shadow-sm">
                                        <h5 class="fw-bold mb-3">Specifications</h5>
                                        <div class="table-responsive">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td class="fw-bold">Material:</td>
                                                        <td>100% Organic Cotton</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold">Weight:</td>
                                                        <td>180 GSM</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold">Closure:</td>
                                                        <td>Snap buttons</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold">Neckline:</td>
                                                        <td>Envelope style</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold">Available Sizes:</td>
                                                        <td>Newborn, 0-3M, 3-6M, 6-9M, 9-12M</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold">Available Colors:</td>
                                                        <td>Pink, Blue, Mint, White</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold">Country of Origin:</td>
                                                        <td>Made in USA</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Care Instructions Tab -->
                        <div class="tab-pane fade" id="care" role="tabpanel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="bg-white rounded-3 p-4 shadow-sm">
                                        <h5 class="fw-bold mb-3">Care Instructions</h5>
                                        <div class="care-instructions">
                                            <div class="care-item d-flex align-items-start mb-3">
                                                <i class="fas fa-tint text-blue me-3 mt-1"></i>
                                                <div>
                                                    <h6 class="fw-bold mb-1">Washing</h6>
                                                    <p class="text-muted mb-0">Machine wash cold with like colors. Use gentle cycle and mild detergent.</p>
                                                </div>
                                            </div>
                                            <div class="care-item d-flex align-items-start mb-3">
                                                <i class="fas fa-sun text-warning me-3 mt-1"></i>
                                                <div>
                                                    <h6 class="fw-bold mb-1">Drying</h6>
                                                    <p class="text-muted mb-0">Tumble dry low or hang dry. Avoid direct sunlight to prevent fading.</p>
                                                </div>
                                            </div>
                                            <div class="care-item d-flex align-items-start mb-3">
                                                <i class="fas fa-iron text-muted me-3 mt-1"></i>
                                                <div>
                                                    <h6 class="fw-bold mb-1">Ironing</h6>
                                                    <p class="text-muted mb-0">Iron on low heat if needed. Avoid ironing directly on prints or decorations.</p>
                                                </div>
                                            </div>
                                            <div class="care-item d-flex align-items-start">
                                                <i class="fas fa-exclamation-triangle text-danger me-3 mt-1"></i>
                                                <div>
                                                    <h6 class="fw-bold mb-1">Important</h6>
                                                    <p class="text-muted mb-0">Do not bleach. Do not dry clean. Wash before first use.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviews Tab -->
                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="bg-white rounded-3 p-4 shadow-sm">
                                        <h5 class="fw-bold mb-4">Customer Reviews</h5>
                                        
                                        <!-- Review Summary -->
                                        <div class="review-summary mb-4 p-3 bg-light rounded-3">
                                            <div class="row align-items-center">
                                                <div class="col-md-6">
                                                    <div class="d-flex align-items-center">
                                                        <span class="h4 fw-bold me-2">4.8</span>
                                                        <div class="stars me-2">
                                                            <i class="fas fa-star text-warning"></i>
                                                            <i class="fas fa-star text-warning"></i>
                                                            <i class="fas fa-star text-warning"></i>
                                                            <i class="fas fa-star text-warning"></i>
                                                            <i class="fas fa-star text-warning"></i>
                                                        </div>
                                                        <span class="text-muted">Based on 24 reviews</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 text-md-end">
                                                    <button class="btn btn-primary rounded-pill">Write a Review</button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Individual Reviews -->
                                        <div class="reviews-list">
                                            <!-- Review 1 -->
                                            <div class="review-item border-bottom pb-4 mb-4">
                                                <div class="d-flex align-items-start">
                                                    <img src="https://images.unsplash.com/photo-1494790108755-2616c9c0b8d3?w=50&h=50&fit=crop&crop=face" 
                                                         alt="Sarah M." class="rounded-circle me-3" width="50" height="50">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <h6 class="fw-bold mb-0 me-2">Sarah M.</h6>
                                                            <div class="stars me-2">
                                                                <i class="fas fa-star text-warning"></i>
                                                                <i class="fas fa-star text-warning"></i>
                                                                <i class="fas fa-star text-warning"></i>
                                                                <i class="fas fa-star text-warning"></i>
                                                                <i class="fas fa-star text-warning"></i>
                                                            </div>
                                                            <small class="text-muted">2 days ago</small>
                                                        </div>
                                                        <p class="text-muted mb-0">
                                                            "Absolutely love this onesie! The organic cotton is so soft and my baby 
                                                            seems very comfortable in it. The quality is excellent and it washes beautifully."
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Review 2 -->
                                            <div class="review-item border-bottom pb-4 mb-4">
                                                <div class="d-flex align-items-start">
                                                    <img src="https://images.unsplash.com/photo-1494790108755-2616c9c0b8d3?w=50&h=50&fit=crop&crop=face" 
                                                         alt="Mike D." class="rounded-circle me-3" width="50" height="50">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <h6 class="fw-bold mb-0 me-2">Mike D.</h6>
                                                            <div class="stars me-2">
                                                                <i class="fas fa-star text-warning"></i>
                                                                <i class="fas fa-star text-warning"></i>
                                                                <i class="fas fa-star text-warning"></i>
                                                                <i class="fas fa-star text-warning"></i>
                                                                <i class="fas fa-star text-warning"></i>
                                                            </div>
                                                            <small class="text-muted">1 week ago</small>
                                                        </div>
                                                        <p class="text-muted mb-0">
                                                            "Great quality and perfect fit! The snap closures make diaper changes so much easier. 
                                                            Highly recommend for any new parent."
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Review 3 -->
                                            <div class="review-item">
                                                <div class="d-flex align-items-start">
                                                    <img src="https://images.unsplash.com/photo-1494790108755-2616c9c0b8d3?w=50&h=50&fit=crop&crop=face" 
                                                         alt="Emma L." class="rounded-circle me-3" width="50" height="50">
                                                    <div class="flex-grow-1">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <h6 class="fw-bold mb-0 me-2">Emma L.</h6>
                                                            <div class="stars me-2">
                                                                <i class="fas fa-star text-warning"></i>
                                                                <i class="fas fa-star text-warning"></i>
                                                                <i class="fas fa-star text-warning"></i>
                                                                <i class="fas fa-star text-warning"></i>
                                                                <i class="far fa-star text-warning"></i>
                                                            </div>
                                                            <small class="text-muted">2 weeks ago</small>
                                                        </div>
                                                        <p class="text-muted mb-0">
                                                            "Beautiful colors and very soft material. My baby has sensitive skin and this 
                                                            onesie doesn't cause any irritation. Will definitely buy more!"
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary">You Might Also Like</h2>
                <p class="text-muted">Similar products that other customers loved</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="product-card bg-white rounded-3 shadow-sm h-100">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1522771930-78848d9293e8?w=250&h=200&fit=crop&crop=center" 
                                 alt="Baby Romper" class="img-fluid rounded-top">
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
                <div class="col-lg-3 col-md-6">
                    <div class="product-card bg-white rounded-3 shadow-sm h-100">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1522771930-78848d9293e8?w=250&h=200&fit=crop&crop=center" 
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
                <div class="col-lg-3 col-md-6">
                    <div class="product-card bg-white rounded-3 shadow-sm h-100">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1522771930-78848d9293e8?w=250&h=200&fit=crop&crop=center" 
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
                <div class="col-lg-3 col-md-6">
                    <div class="product-card bg-white rounded-3 shadow-sm h-100">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1522771930-78848d9293e8?w=250&h=200&fit=crop&crop=center" 
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
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        // Simple JavaScript for product functionality
        function changeMainImage(src) {
            document.getElementById('mainImage').src = src;
            
            // Update active thumbnail
            document.querySelectorAll('.thumbnail-img').forEach(img => {
                img.classList.remove('active');
            });
            event.target.classList.add('active');
        }

        function increaseQuantity() {
            const quantityInput = document.getElementById('quantity');
            const currentValue = parseInt(quantityInput.value);
            if (currentValue < 10) {
                quantityInput.value = currentValue + 1;
            }
        }

        function decreaseQuantity() {
            const quantityInput = document.getElementById('quantity');
            const currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        }
    </script>
@endsection
