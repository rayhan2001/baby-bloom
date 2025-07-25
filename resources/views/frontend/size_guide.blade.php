@extends('frontend.layouts.app')

@section('title', @$data['title'])

@section('content')
    <!-- Breadcrumb -->
    <section class="py-3 bg-light">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Size Guide</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Size Guide Header -->
    <section class="py-5 bg-gradient-soft">
        <div class="container text-center">
            <h1 class="fw-bold text-primary mb-3">Size Guide</h1>
            <p class="text-muted lead">Find the perfect fit for your little one</p>
        </div>
    </section>

    <!-- Size Guide Content -->
    <section class="py-5">
        <div class="container">
            <!-- Size Guide Navigation -->
            <div class="size-guide-nav mb-5">
                <div class="row g-3">
                    <div class="col-md-3">
                        <button class="btn btn-outline-primary rounded-pill w-100 active" data-category="clothing">Baby
                            Clothing</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-outline-primary rounded-pill w-100" data-category="shoes">Baby Shoes</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-outline-primary rounded-pill w-100"
                            data-category="accessories">Accessories</button>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-outline-primary rounded-pill w-100" data-category="tips">Sizing Tips</button>
                    </div>
                </div>
            </div>

            <!-- Baby Clothing Sizes -->
            <div class="size-category" id="clothing">
                <div class="bg-white rounded-3 shadow-sm p-4 mb-4">
                    <h3 class="fw-bold text-primary mb-4">Baby Clothing Size Chart</h3>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Size</th>
                                    <th>Age Range</th>
                                    <th>Weight (lbs)</th>
                                    <th>Height (inches)</th>
                                    <th>Chest (inches)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Preemie</strong></td>
                                    <td>Up to 1 month</td>
                                    <td>4-6 lbs</td>
                                    <td>15-17"</td>
                                    <td>12-13"</td>
                                </tr>
                                <tr>
                                    <td><strong>Newborn</strong></td>
                                    <td>0-1 month</td>
                                    <td>6-9 lbs</td>
                                    <td>17-21"</td>
                                    <td>13-14"</td>
                                </tr>
                                <tr>
                                    <td><strong>0-3 Months</strong></td>
                                    <td>0-3 months</td>
                                    <td>9-12 lbs</td>
                                    <td>21-24"</td>
                                    <td>14-15"</td>
                                </tr>
                                <tr>
                                    <td><strong>3-6 Months</strong></td>
                                    <td>3-6 months</td>
                                    <td>12-16 lbs</td>
                                    <td>24-26"</td>
                                    <td>15-16"</td>
                                </tr>
                                <tr>
                                    <td><strong>6-9 Months</strong></td>
                                    <td>6-9 months</td>
                                    <td>16-20 lbs</td>
                                    <td>26-28"</td>
                                    <td>16-17"</td>
                                </tr>
                                <tr>
                                    <td><strong>9-12 Months</strong></td>
                                    <td>9-12 months</td>
                                    <td>20-24 lbs</td>
                                    <td>28-30"</td>
                                    <td>17-18"</td>
                                </tr>
                                <tr>
                                    <td><strong>12-18 Months</strong></td>
                                    <td>12-18 months</td>
                                    <td>24-28 lbs</td>
                                    <td>30-32"</td>
                                    <td>18-19"</td>
                                </tr>
                                <tr>
                                    <td><strong>18-24 Months</strong></td>
                                    <td>18-24 months</td>
                                    <td>28-32 lbs</td>
                                    <td>32-34"</td>
                                    <td>19-20"</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- How to Measure -->
                <div class="bg-white rounded-3 shadow-sm p-4">
                    <h4 class="fw-bold text-primary mb-4">How to Measure Your Baby</h4>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="measurement-guide">
                                <h6 class="fw-bold mb-3">
                                    <i class="fas fa-ruler text-primary me-2"></i>Height/Length
                                </h6>
                                <p class="text-muted mb-2">For babies under 2 years:</p>
                                <ul class="text-muted small">
                                    <li>Lay baby on their back on a flat surface</li>
                                    <li>Measure from top of head to bottom of feet</li>
                                    <li>Keep legs straight and feet flexed</li>
                                    <li>Use a soft measuring tape</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="measurement-guide">
                                <h6 class="fw-bold mb-3">
                                    <i class="fas fa-weight text-primary me-2"></i>Weight
                                </h6>
                                <p class="text-muted mb-2">For accurate weight measurement:</p>
                                <ul class="text-muted small">
                                    <li>Use a digital baby scale if available</li>
                                    <li>Weigh baby without clothes or diaper</li>
                                    <li>Take measurement at the same time of day</li>
                                    <li>Record weight in pounds and ounces</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Baby Shoes Sizes -->
            <div class="size-category d-none" id="shoes">
                <div class="bg-white rounded-3 shadow-sm p-4 mb-4">
                    <h3 class="fw-bold text-primary mb-4">Baby Shoe Size Chart</h3>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>US Size</th>
                                    <th>Age Range</th>
                                    <th>Foot Length (inches)</th>
                                    <th>EU Size</th>
                                    <th>UK Size</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>0</strong></td>
                                    <td>0-2 months</td>
                                    <td>3.25"</td>
                                    <td>16</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td><strong>1</strong></td>
                                    <td>2-4 months</td>
                                    <td>3.5"</td>
                                    <td>17</td>
                                    <td>0.5</td>
                                </tr>
                                <tr>
                                    <td><strong>2</strong></td>
                                    <td>4-6 months</td>
                                    <td>3.75"</td>
                                    <td>18</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td><strong>3</strong></td>
                                    <td>6-9 months</td>
                                    <td>4"</td>
                                    <td>19</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td><strong>4</strong></td>
                                    <td>9-12 months</td>
                                    <td>4.25"</td>
                                    <td>20</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td><strong>5</strong></td>
                                    <td>12-15 months</td>
                                    <td>4.5"</td>
                                    <td>21</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td><strong>6</strong></td>
                                    <td>15-18 months</td>
                                    <td>4.75"</td>
                                    <td>22</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td><strong>7</strong></td>
                                    <td>18-24 months</td>
                                    <td>5"</td>
                                    <td>23</td>
                                    <td>6</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Shoe Fitting Tips -->
                <div class="bg-white rounded-3 shadow-sm p-4">
                    <h4 class="fw-bold text-primary mb-4">Shoe Fitting Tips</h4>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="tip-card border rounded-3 p-3">
                                <h6 class="fw-bold mb-2">
                                    <i class="fas fa-ruler-combined text-primary me-2"></i>Measuring Feet
                                </h6>
                                <ul class="text-muted small mb-0">
                                    <li>Measure both feet (they may differ)</li>
                                    <li>Measure in the afternoon when feet are largest</li>
                                    <li>Allow 1/4 to 1/2 inch growing room</li>
                                    <li>Check fit every 2-3 months</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tip-card border rounded-3 p-3">
                                <h6 class="fw-bold mb-2">
                                    <i class="fas fa-shoe-prints text-primary me-2"></i>Proper Fit
                                </h6>
                                <ul class="text-muted small mb-0">
                                    <li>Shoes should not slip off easily</li>
                                    <li>No red marks or indentations</li>
                                    <li>Toes should have wiggle room</li>
                                    <li>Heel should not slide up and down</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Accessories Sizes -->
            <div class="size-category d-none" id="accessories">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="bg-white rounded-3 shadow-sm p-4">
                            <h4 class="fw-bold text-primary mb-4">Hat Size Chart</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Age</th>
                                            <th>Head Circumference</th>
                                            <th>Hat Size</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>0-3 months</td>
                                            <td>13-15"</td>
                                            <td>XS</td>
                                        </tr>
                                        <tr>
                                            <td>3-6 months</td>
                                            <td>15-17"</td>
                                            <td>S</td>
                                        </tr>
                                        <tr>
                                            <td>6-12 months</td>
                                            <td>17-18"</td>
                                            <td>M</td>
                                        </tr>
                                        <tr>
                                            <td>12-24 months</td>
                                            <td>18-19"</td>
                                            <td>L</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-white rounded-3 shadow-sm p-4">
                            <h4 class="fw-bold text-primary mb-4">Mitten & Sock Sizes</h4>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Age</th>
                                            <th>Mitten Size</th>
                                            <th>Sock Size</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>0-3 months</td>
                                            <td>XS</td>
                                            <td>0-3</td>
                                        </tr>
                                        <tr>
                                            <td>3-6 months</td>
                                            <td>S</td>
                                            <td>3-6</td>
                                        </tr>
                                        <tr>
                                            <td>6-12 months</td>
                                            <td>M</td>
                                            <td>6-12</td>
                                        </tr>
                                        <tr>
                                            <td>12-24 months</td>
                                            <td>L</td>
                                            <td>12-24</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sizing Tips -->
            <div class="size-category d-none" id="tips">
                <div class="bg-white rounded-3 shadow-sm p-4 mb-4">
                    <h3 class="fw-bold text-primary mb-4">Expert Sizing Tips</h3>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="tip-section">
                                <h5 class="fw-bold text-success mb-3">
                                    <i class="fas fa-check-circle me-2"></i>Do's
                                </h5>
                                <ul class="text-muted">
                                    <li>Measure your baby regularly (every 2-3 months)</li>
                                    <li>Consider your baby's growth rate</li>
                                    <li>Check size charts for each brand</li>
                                    <li>Read customer reviews for fit feedback</li>
                                    <li>When in doubt, size up for longer wear</li>
                                    <li>Keep receipts for exchanges</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tip-section">
                                <h5 class="fw-bold text-danger mb-3">
                                    <i class="fas fa-times-circle me-2"></i>Don'ts
                                </h5>
                                <ul class="text-muted">
                                    <li>Don't rely solely on age for sizing</li>
                                    <li>Don't buy too many items in one size</li>
                                    <li>Don't ignore weight and height measurements</li>
                                    <li>Don't assume all brands fit the same</li>
                                    <li>Don't buy clothes too far in advance</li>
                                    <li>Don't forget about seasonal considerations</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Growth Patterns -->
                <div class="bg-white rounded-3 shadow-sm p-4">
                    <h4 class="fw-bold text-primary mb-4">Baby Growth Patterns</h4>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="growth-card text-center p-3 border rounded-3">
                                <i class="fas fa-baby fa-2x text-primary mb-3"></i>
                                <h6 class="fw-bold">0-3 Months</h6>
                                <p class="text-muted small">Rapid growth period. Babies typically outgrow clothes every 4-6
                                    weeks.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="growth-card text-center p-3 border rounded-3">
                                <i class="fas fa-child fa-2x text-success mb-3"></i>
                                <h6 class="fw-bold">3-12 Months</h6>
                                <p class="text-muted small">Steady growth. Size changes every 2-3 months on average.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="growth-card text-center p-3 border rounded-3">
                                <i class="fas fa-walking fa-2x text-info mb-3"></i>
                                <h6 class="fw-bold">12+ Months</h6>
                                <p class="text-muted small">Slower growth rate. Clothes may last 3-6 months.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Size Calculator -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bg-white rounded-3 shadow-sm p-4">
                        <h3 class="fw-bold text-primary mb-4 text-center">Size Calculator</h3>
                        <p class="text-muted text-center mb-4">Enter your baby's measurements to get size recommendations
                        </p>

                        <form class="size-calculator">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label">Age (months)</label>
                                    <input type="number" class="form-control" placeholder="6" min="0"
                                        max="24">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Weight (lbs)</label>
                                    <input type="number" class="form-control" placeholder="16" min="4"
                                        max="35">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Height (inches)</label>
                                    <input type="number" class="form-control" placeholder="26" min="15"
                                        max="36">
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill px-5">Get Size
                                    Recommendation</button>
                            </div>
                        </form>

                        <div class="size-result mt-4 d-none">
                            <div class="alert alert-success rounded-3">
                                <h5 class="fw-bold mb-2">Recommended Size: <span class="recommended-size"></span></h5>
                                <p class="mb-0">Based on your baby's measurements, we recommend this size for the best
                                    fit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script>
        // Size Guide Category Navigation
        document.querySelectorAll('[data-category]').forEach(button => {
            if (button.tagName === 'BUTTON') {
                button.addEventListener('click', function() {
                    const category = this.getAttribute('data-category');

                    // Update active button
                    document.querySelectorAll('.size-guide-nav button').forEach(btn => {
                        btn.classList.remove('active');
                    });
                    this.classList.add('active');

                    // Show/hide size categories
                    document.querySelectorAll('.size-category').forEach(section => {
                        section.classList.add('d-none');
                    });
                    document.getElementById(category).classList.remove('d-none');
                });
            }
        });

        // Size Calculator
        document.querySelector('.size-calculator').addEventListener('submit', function(e) {
            e.preventDefault();

            const age = parseInt(document.querySelector('input[placeholder="6"]').value);
            const weight = parseInt(document.querySelector('input[placeholder="16"]').value);
            const height = parseInt(document.querySelector('input[placeholder="26"]').value);

            let recommendedSize = '';

            if (age <= 1 && weight <= 9 && height <= 21) {
                recommendedSize = 'Newborn';
            } else if (age <= 3 && weight <= 12 && height <= 24) {
                recommendedSize = '0-3 Months';
            } else if (age <= 6 && weight <= 16 && height <= 26) {
                recommendedSize = '3-6 Months';
            } else if (age <= 9 && weight <= 20 && height <= 28) {
                recommendedSize = '6-9 Months';
            } else if (age <= 12 && weight <= 24 && height <= 30) {
                recommendedSize = '9-12 Months';
            } else if (age <= 18 && weight <= 28 && height <= 32) {
                recommendedSize = '12-18 Months';
            } else {
                recommendedSize = '18-24 Months';
            }

            document.querySelector('.recommended-size').textContent = recommendedSize;
            document.querySelector('.size-result').classList.remove('d-none');
        });
    </script>
@endpush
