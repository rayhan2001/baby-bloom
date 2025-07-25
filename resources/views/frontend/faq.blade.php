@extends('frontend.layouts.app')

@section('title', @$data['title'])

@section('content')
    <!-- Breadcrumb -->
    <section class="py-3 bg-light">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- FAQ Header -->
    <section class="py-5 bg-gradient-soft">
        <div class="container text-center">
            <h1 class="fw-bold text-primary mb-3">Frequently Asked Questions</h1>
            <p class="text-muted lead">Find answers to common questions about our products and services</p>
        </div>
    </section>

    <!-- FAQ Content -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- Search FAQ -->
                    <div class="search-faq mb-5">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg rounded-pill-start"
                                placeholder="Search FAQ...">
                            <button class="btn btn-primary btn-lg rounded-pill-end" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>

                    <!-- FAQ Categories -->
                    <div class="faq-categories mb-5">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <button class="btn btn-outline-primary rounded-pill w-100 active" data-category="all">All
                                    Questions</button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-outline-primary rounded-pill w-100"
                                    data-category="orders">Orders</button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-outline-primary rounded-pill w-100"
                                    data-category="shipping">Shipping</button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-outline-primary rounded-pill w-100"
                                    data-category="products">Products</button>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Accordion -->
                    <div class="accordion" id="faqAccordion">
                        <!-- Orders Category -->
                        <div class="accordion-item mb-3 border-0 shadow-sm rounded-3" data-category="orders">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq1">
                                    How do I place an order?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Placing an order is easy! Simply browse our products, add items to your cart, and
                                        proceed to checkout. You'll need to provide your shipping information and payment
                                        details. Once your order is confirmed, you'll receive an email confirmation with
                                        your order details.</p>
                                    <ul>
                                        <li>Browse products and add to cart</li>
                                        <li>Click on the cart icon to review your items</li>
                                        <li>Proceed to checkout and fill in your details</li>
                                        <li>Choose your payment method and complete the order</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm rounded-3" data-category="orders">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Can I modify or cancel my order?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>You can modify or cancel your order within 1 hour of placing it, provided it hasn't
                                        been processed yet. After this time, please contact our customer service team for
                                        assistance.</p>
                                    <p><strong>To modify/cancel:</strong></p>
                                    <ul>
                                        <li>Log into your account and go to "Order History"</li>
                                        <li>Find your recent order and click "Modify" or "Cancel"</li>
                                        <li>If the option isn't available, contact us at support@babybloom.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm rounded-3" data-category="orders">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    What payment methods do you accept?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>We accept various payment methods to make shopping convenient for you:</p>
                                    <ul>
                                        <li>Credit Cards (Visa, MasterCard, American Express)</li>
                                        <li>PayPal</li>
                                        <li>Apple Pay</li>
                                        <li>Google Pay</li>
                                        <li>Shop Pay</li>
                                    </ul>
                                    <p>All payments are processed securely through encrypted connections.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Shipping Category -->
                        <div class="accordion-item mb-3 border-0 shadow-sm rounded-3" data-category="shipping">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq4">
                                    How long does shipping take?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Shipping times depend on your location and chosen shipping method:</p>
                                    <ul>
                                        <li><strong>Standard Shipping:</strong> 5-7 business days</li>
                                        <li><strong>Express Shipping:</strong> 2-3 business days</li>
                                        <li><strong>Overnight Shipping:</strong> 1 business day</li>
                                    </ul>
                                    <p>Orders placed before 2 PM EST are processed the same day. Weekend orders are
                                        processed on the next business day.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm rounded-3" data-category="shipping">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq5">
                                    Do you offer free shipping?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Yes! We offer free standard shipping on orders over $50 within the continental United
                                        States.</p>
                                    <p><strong>Free Shipping Benefits:</strong></p>
                                    <ul>
                                        <li>Orders over $50 qualify automatically</li>
                                        <li>No promo code needed</li>
                                        <li>Applies to standard shipping only</li>
                                        <li>Available for US addresses only</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm rounded-3" data-category="shipping">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq6">
                                    Can I track my order?
                                </button>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Once your order ships, you'll receive a tracking number via email.</p>
                                    <p><strong>How to track:</strong></p>
                                    <ul>
                                        <li>Check your email for the shipping confirmation</li>
                                        <li>Click the tracking link in the email</li>
                                        <li>Or log into your account and view order status</li>
                                        <li>You can also track directly on our shipping partner's website</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Products Category -->
                        <div class="accordion-item mb-3 border-0 shadow-sm rounded-3" data-category="products">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq7">
                                    Are your products safe for babies?
                                </button>
                            </h2>
                            <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Safety is our top priority. All our products meet or exceed safety standards:</p>
                                    <ul>
                                        <li>CPSC (Consumer Product Safety Commission) compliant</li>
                                        <li>Non-toxic materials and dyes</li>
                                        <li>BPA-free and phthalate-free</li>
                                        <li>Regular third-party safety testing</li>
                                        <li>Age-appropriate design and construction</li>
                                    </ul>
                                    <p>We work only with certified manufacturers who share our commitment to baby safety.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm rounded-3" data-category="products">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq8">
                                    How do I choose the right size?
                                </button>
                            </h2>
                            <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>We provide detailed size guides for all our clothing items:</p>
                                    <ul>
                                        <li>Check the size chart on each product page</li>
                                        <li>Measure your baby's height and weight</li>
                                        <li>Consider your baby's growth rate</li>
                                        <li>Read customer reviews for fit feedback</li>
                                    </ul>
                                    <p>If you're between sizes, we generally recommend sizing up for comfort and longer
                                        wear. Visit our <a href="size-guide.html">Size Guide</a> for detailed measurements.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm rounded-3" data-category="products">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq9">
                                    Do you offer organic products?
                                </button>
                            </h2>
                            <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Yes! We have a wide selection of organic baby products:</p>
                                    <ul>
                                        <li>GOTS certified organic cotton clothing</li>
                                        <li>Organic bamboo fiber products</li>
                                        <li>Natural and organic baby care items</li>
                                        <li>Wooden toys made from sustainable materials</li>
                                    </ul>
                                    <p>Look for the "Organic" badge on product listings to easily identify organic options.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- General Category -->
                        <div class="accordion-item mb-3 border-0 shadow-sm rounded-3" data-category="general">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq10">
                                    How can I contact customer service?
                                </button>
                            </h2>
                            <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>We're here to help! You can reach us through multiple channels:</p>
                                    <ul>
                                        <li><strong>Email:</strong> support@babybloom.com</li>
                                        <li><strong>Phone:</strong> 1-800-BABY-BLOOM (1-800-222-9256)</li>
                                        <li><strong>Live Chat:</strong> Available on our website 9 AM - 6 PM EST</li>
                                        <li><strong>Contact Form:</strong> Visit our <a href="contact.html">Contact
                                                Page</a></li>
                                    </ul>
                                    <p>Our customer service team is available Monday-Friday, 9 AM - 6 PM EST.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-3 border-0 shadow-sm rounded-3" data-category="general">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq11">
                                    Do you have a return policy?
                                </button>
                            </h2>
                            <div id="faq11" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>Yes! We offer a 30-day return policy for your peace of mind:</p>
                                    <ul>
                                        <li>Items must be unused and in original condition</li>
                                        <li>Original packaging and tags must be included</li>
                                        <li>Return shipping is free for defective items</li>
                                        <li>Refunds processed within 5-7 business days</li>
                                    </ul>
                                    <p>For detailed return instructions, please visit our <a href="returns.html">Returns
                                            Page</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Still Need Help -->
                    <div class="text-center mt-5">
                        <div class="bg-light-pink rounded-3 p-4">
                            <h4 class="fw-bold text-primary mb-3">Still Need Help?</h4>
                            <p class="text-muted mb-4">Can't find the answer you're looking for? Our customer service team
                                is here to help!</p>
                            <a href="contact.html" class="btn btn-primary rounded-pill me-3">Contact Us</a>
                            <a href="mailto:support@babybloom.com" class="btn btn-outline-primary rounded-pill">Email
                                Support</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
