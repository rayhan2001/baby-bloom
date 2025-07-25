@extends('frontend.layouts.app')

@section('title', @$data['title'])
@section('content')
    <!-- Breadcrumb -->
    <section class="py-3 bg-light">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Account</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Account Header -->
    <section class="py-4 bg-gradient-soft">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="d-flex align-items-center">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616c9c0b8d3?w=80&h=80&fit=crop&crop=face"
                            alt="Profile" class="rounded-circle me-3" width="80" height="80">
                        <div>
                            <h1 class="fw-bold text-primary mb-1">Welcome back, Sarah!</h1>
                            <p class="text-muted mb-0">Manage your account and track your orders</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-md-end">
                    <span class="badge bg-success rounded-pill px-3 py-2">
                        <i class="fas fa-crown me-1"></i>Premium Member
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Account Content -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Sidebar -->
                <div class="col-lg-3">
                    <div class="account-sidebar bg-white rounded-3 shadow-sm p-4">
                        <h5 class="fw-bold text-primary mb-4">Account Menu</h5>
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item mb-2">
                                <a class="nav-link active rounded-pill" href="#dashboard" data-bs-toggle="pill">
                                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="nav-link rounded-pill" href="#orders" data-bs-toggle="pill">
                                    <i class="fas fa-shopping-bag me-2"></i>Order History
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="nav-link rounded-pill" href="#profile" data-bs-toggle="pill">
                                    <i class="fas fa-user me-2"></i>Profile Settings
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="nav-link rounded-pill" href="#addresses" data-bs-toggle="pill">
                                    <i class="fas fa-map-marker-alt me-2"></i>Addresses
                                </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a class="nav-link rounded-pill" href="#wishlist" data-bs-toggle="pill">
                                    <i class="fas fa-heart me-2"></i>Wishlist
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link rounded-pill text-danger" href="login.html">
                                    <i class="fas fa-sign-out-alt me-2"></i>Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-lg-9">
                    <div class="tab-content">
                        <!-- Dashboard Tab -->
                        <div class="tab-pane fade show active" id="dashboard">
                            <div class="row g-4 mb-5">
                                <div class="col-md-3">
                                    <div class="stat-card bg-white rounded-3 shadow-sm p-4 text-center">
                                        <i class="fas fa-shopping-bag fa-2x text-primary mb-3"></i>
                                        <h4 class="fw-bold text-primary">12</h4>
                                        <p class="text-muted mb-0">Total Orders</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="stat-card bg-white rounded-3 shadow-sm p-4 text-center">
                                        <i class="fas fa-heart fa-2x text-pink mb-3"></i>
                                        <h4 class="fw-bold text-primary">8</h4>
                                        <p class="text-muted mb-0">Wishlist Items</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="stat-card bg-white rounded-3 shadow-sm p-4 text-center">
                                        <i class="fas fa-star fa-2x text-warning mb-3"></i>
                                        <h4 class="fw-bold text-primary">5</h4>
                                        <p class="text-muted mb-0">Reviews Written</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="stat-card bg-white rounded-3 shadow-sm p-4 text-center">
                                        <i class="fas fa-gift fa-2x text-mint mb-3"></i>
                                        <h4 class="fw-bold text-primary">150</h4>
                                        <p class="text-muted mb-0">Reward Points</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Recent Orders -->
                            <div class="bg-white rounded-3 shadow-sm p-4 mb-4">
                                <h5 class="fw-bold text-primary mb-4">Recent Orders</h5>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Order #</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#BB001234</td>
                                                <td>Dec 15, 2024</td>
                                                <td><span class="badge bg-success rounded-pill">Delivered</span></td>
                                                <td>$89.97</td>
                                                <td><a href="#"
                                                        class="btn btn-outline-primary btn-sm rounded-pill">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>#BB001235</td>
                                                <td>Dec 10, 2024</td>
                                                <td><span class="badge bg-primary rounded-pill">Shipped</span></td>
                                                <td>$45.99</td>
                                                <td><a href="#"
                                                        class="btn btn-outline-primary btn-sm rounded-pill">Track</a></td>
                                            </tr>
                                            <tr>
                                                <td>#BB001236</td>
                                                <td>Dec 5, 2024</td>
                                                <td><span class="badge bg-warning rounded-pill">Processing</span></td>
                                                <td>$129.99</td>
                                                <td><a href="#"
                                                        class="btn btn-outline-primary btn-sm rounded-pill">View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Orders Tab -->
                        <div class="tab-pane fade" id="orders">
                            <div class="bg-white rounded-3 shadow-sm p-4">
                                <h5 class="fw-bold text-primary mb-4">Order History</h5>
                                <div class="order-filters mb-4">
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <select class="form-select">
                                                <option>All Orders</option>
                                                <option>Delivered</option>
                                                <option>Shipped</option>
                                                <option>Processing</option>
                                                <option>Cancelled</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-primary rounded-pill">Filter</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Order Items -->
                                <div class="order-item border rounded-3 p-4 mb-3">
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <div>
                                            <h6 class="fw-bold">Order #BB001234</h6>
                                            <p class="text-muted mb-0">Placed on December 15, 2024</p>
                                        </div>
                                        <span class="badge bg-success rounded-pill">Delivered</span>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-md-2">
                                            <img src="https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4?w=80&h=80&fit=crop&crop=center"
                                                alt="Product" class="img-fluid rounded-3">
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="mb-1">Organic Cotton Onesie</h6>
                                            <p class="text-muted small mb-1">Size: 0-3M, Color: Pink</p>
                                            <p class="text-muted small">Quantity: 2</p>
                                        </div>
                                        <div class="col-md-2">
                                            <p class="fw-bold">$39.98</p>
                                        </div>
                                        <div class="col-md-2">
                                            <button
                                                class="btn btn-outline-primary btn-sm rounded-pill w-100 mb-2">Reorder</button>
                                            <button
                                                class="btn btn-outline-secondary btn-sm rounded-pill w-100">Review</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Profile Tab -->
                        <div class="tab-pane fade" id="profile">
                            <div class="bg-white rounded-3 shadow-sm p-4">
                                <h5 class="fw-bold text-primary mb-4">Profile Settings</h5>
                                <form>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="firstName" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="firstName" value="Sarah">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lastName" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="lastName" value="Mitchell">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                value="sarah.mitchell@email.com">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="tel" class="form-control" id="phone"
                                                value="+1 (555) 123-4567">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="birthDate" class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control" id="birthDate"
                                                value="1990-05-15">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="gender" class="form-label">Gender</label>
                                            <select class="form-select" id="gender">
                                                <option value="female" selected>Female</option>
                                                <option value="male">Male</option>
                                                <option value="other">Other</option>
                                                <option value="prefer-not-to-say">Prefer not to say</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary rounded-pill me-2">Save
                                            Changes</button>
                                        <button type="button"
                                            class="btn btn-outline-secondary rounded-pill">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Addresses Tab -->
                        <div class="tab-pane fade" id="addresses">
                            <div class="bg-white rounded-3 shadow-sm p-4">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h5 class="fw-bold text-primary">Saved Addresses</h5>
                                    <button class="btn btn-primary rounded-pill">Add New Address</button>
                                </div>

                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="address-card border rounded-3 p-4">
                                            <div class="d-flex justify-content-between align-items-start mb-3">
                                                <h6 class="fw-bold">Home</h6>
                                                <span class="badge bg-primary rounded-pill">Default</span>
                                            </div>
                                            <p class="mb-1">Sarah Mitchell</p>
                                            <p class="mb-1">123 Main Street, Apt 4B</p>
                                            <p class="mb-1">New York, NY 10001</p>
                                            <p class="mb-3">+1 (555) 123-4567</p>
                                            <div class="address-actions">
                                                <button
                                                    class="btn btn-outline-primary btn-sm rounded-pill me-2">Edit</button>
                                                <button class="btn btn-outline-danger btn-sm rounded-pill">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="address-card border rounded-3 p-4">
                                            <div class="d-flex justify-content-between align-items-start mb-3">
                                                <h6 class="fw-bold">Work</h6>
                                            </div>
                                            <p class="mb-1">Sarah Mitchell</p>
                                            <p class="mb-1">456 Business Ave, Suite 200</p>
                                            <p class="mb-1">New York, NY 10002</p>
                                            <p class="mb-3">+1 (555) 123-4567</p>
                                            <div class="address-actions">
                                                <button
                                                    class="btn btn-outline-primary btn-sm rounded-pill me-2">Edit</button>
                                                <button class="btn btn-outline-danger btn-sm rounded-pill">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wishlist Tab -->
                        <div class="tab-pane fade" id="wishlist">
                            <div class="bg-white rounded-3 shadow-sm p-4">
                                <h5 class="fw-bold text-primary mb-4">My Wishlist</h5>
                                <div class="row g-4">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="wishlist-item border rounded-3 p-3">
                                            <div class="position-relative mb-3">
                                                <img src="https://images.unsplash.com/photo-1522771930-78848d9293e8?w=250&h=200&fit=crop&crop=center"
                                                    alt="Product" class="img-fluid rounded-3">
                                                <button
                                                    class="btn btn-outline-danger btn-sm position-absolute top-0 end-0 m-2">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                            <h6 class="fw-bold mb-2">Cotton Romper Set</h6>
                                            <p class="text-primary fw-bold mb-3">$34.99</p>
                                            <button class="btn btn-primary rounded-pill w-100">Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="wishlist-item border rounded-3 p-3">
                                            <div class="position-relative mb-3">
                                                <img src="https://images.unsplash.com/photo-1522771930-78848d9293e8?w=250&h=200&fit=crop&crop=center"
                                                    alt="Product" class="img-fluid rounded-3">
                                                <button
                                                    class="btn btn-outline-danger btn-sm position-absolute top-0 end-0 m-2">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                            <h6 class="fw-bold mb-2">Soft Baby Blanket</h6>
                                            <p class="text-primary fw-bold mb-3">$39.99</p>
                                            <button class="btn btn-primary rounded-pill w-100">Add to Cart</button>
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
@endsection
