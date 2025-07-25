<footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="footer-brand mb-4">
                    <h4 class="fw-bold">
                        <i class="fas fa-baby text-pink me-2"></i>BabyBloom
                    </h4>
                    <p class="text-muted">
                        Your trusted partner in providing the best products for your little ones.
                        Quality, safety, and happiness guaranteed.
                    </p>
                </div>
                <div class="social-links">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3">Quick Links</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('frontend.home') }}" class="text-muted text-decoration-none">Home</a></li>
                    <li><a href="{{ route('frontend.shop') }}" class="text-muted text-decoration-none">Shop</a></li>
                    <li><a href="{{ route('frontend.contact') }}" class="text-muted text-decoration-none">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3">Categories</h6>
                <ul class="list-unstyled">
                    <li><a href="shop.html?category=clothing" class="text-muted text-decoration-none">Baby Clothing</a>
                    </li>
                    <li><a href="shop.html?category=toys" class="text-muted text-decoration-none">Toys & Games</a></li>
                    <li><a href="shop.html?category=feeding" class="text-muted text-decoration-none">Feeding</a></li>
                    <li><a href="shop.html?category=care" class="text-muted text-decoration-none">Baby Care</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3">Support</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('frontend.faq') }}" class="text-muted text-decoration-none">FAQ</a></li>
                    <li><a href="{{ route('frontend.shipping_info') }}" class="text-muted text-decoration-none">Shipping Info</a></li>
                    <li><a href="{{ route('frontend.return_policy') }}" class="text-muted text-decoration-none">Returns</a></li>
                    <li><a href="{{ route('frontend.size_guide') }}" class="text-muted text-decoration-none">Size Guide</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3">Account</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('frontend.login') }}" class="text-muted text-decoration-none">Login</a></li>
                    <li>
                        <a href="{{ route('frontend.login') }}" class="text-muted text-decoration-none">
                            {{ auth()->check() ? 'My Account' : 'Login to access your account' }}
                        </a>
                    </li>
                    <li><a href="cart.html" class="text-muted text-decoration-none">Cart</a></li>
                    <li><a href="#" class="text-muted text-decoration-none">Wishlist</a></li>
                </ul>
            </div>
        </div>
        <hr class="my-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="text-muted mb-0">&copy; 2024 BabyBloom. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <div class="payment-methods">
                    <i class="fab fa-cc-visa text-muted me-2"></i>
                    <i class="fab fa-cc-mastercard text-muted me-2"></i>
                    <i class="fab fa-cc-paypal text-muted me-2"></i>
                    <i class="fab fa-cc-apple-pay text-muted"></i>
                </div>
            </div>
        </div>
    </div>
</footer>
