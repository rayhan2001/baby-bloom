<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | BabyBloom</title>
    <link href="{{ asset('frontendAssets/asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('frontendAssets/asset/css/css2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontendAssets/asset/css/styles.css') }}">
    <style>
        .error-page {
            min-height: 100vh;
            background: linear-gradient(135deg, var(--soft-pink) 0%, var(--light-blue) 50%, var(--light-mint) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .floating-toys {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .toy {
            position: absolute;
            font-size: 2rem;
            opacity: 0.3;
            animation: float 6s ease-in-out infinite;
        }

        .toy:nth-child(1) {
            top: 10%;
            left: 10%;
            animation-delay: 0s;
            color: var(--baby-pink);
        }

        .toy:nth-child(2) {
            top: 20%;
            right: 15%;
            animation-delay: 1s;
            color: var(--sky-blue);
        }

        .toy:nth-child(3) {
            bottom: 30%;
            left: 20%;
            animation-delay: 2s;
            color: var(--mint-green);
        }

        .toy:nth-child(4) {
            bottom: 15%;
            right: 25%;
            animation-delay: 3s;
            color: var(--baby-pink);
        }

        .toy:nth-child(5) {
            top: 50%;
            left: 5%;
            animation-delay: 4s;
            color: var(--sky-blue);
        }

        .toy:nth-child(6) {
            top: 70%;
            right: 10%;
            animation-delay: 5s;
            color: var(--mint-green);
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(10deg);
            }
        }

        .error-container {
            text-align: center;
            background: rgba(255, 255, 255, 0.95);
            padding: 60px 40px;
            border-radius: 30px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            max-width: 600px;
            position: relative;
            z-index: 2;
        }

        .error-number {
            font-size: 8rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--primary-color), var(--baby-pink));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin: 0;
            line-height: 1;
            animation: bounce 2s ease-in-out infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-20px);
            }
            60% {
                transform: translateY(-10px);
            }
        }

        .baby-icon {
            font-size: 4rem;
            color: var(--baby-pink);
            margin: 20px 0;
            animation: wiggle 1s ease-in-out infinite;
        }

        @keyframes wiggle {
            0%, 100% {
                transform: rotate(0deg);
            }
            25% {
                transform: rotate(-10deg);
            }
            75% {
                transform: rotate(10deg);
            }
        }

        .error-title {
            color: var(--text-dark);
            font-size: 2.5rem;
            font-weight: 600;
            margin: 20px 0;
            animation: fadeInUp 1s ease-out;
        }

        .error-message {
            color: var(--text-muted);
            font-size: 1.2rem;
            margin: 20px 0 40px;
            animation: fadeInUp 1s ease-out 0.2s both;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .action-buttons {
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        .btn-home {
            background: linear-gradient(135deg, var(--primary-color), var(--baby-pink));
            border: none;
            color: white;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            margin: 0 10px;
            text-decoration: none;
            display: inline-block;
        }

        .btn-home:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(107, 115, 255, 0.3);
            color: white;
        }

        .btn-search {
            background: transparent;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            padding: 13px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            margin: 0 10px;
            text-decoration: none;
            display: inline-block;
        }

        .btn-search:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(107, 115, 255, 0.3);
        }

        .search-suggestions {
            margin-top: 40px;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .suggestion-item {
            display: inline-block;
            background: var(--soft-pink);
            color: var(--text-dark);
            padding: 8px 20px;
            margin: 5px;
            border-radius: 25px;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .suggestion-item:hover {
            background: var(--baby-pink);
            color: white;
            transform: translateY(-2px);
        }

        .hearts {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .heart {
            position: absolute;
            color: var(--baby-pink);
            font-size: 1rem;
            opacity: 0;
            animation: heartFloat 8s linear infinite;
        }

        .heart:nth-child(odd) {
            animation-delay: 2s;
        }

        .heart:nth-child(even) {
            animation-delay: 4s;
        }

        @keyframes heartFloat {
            0% {
                opacity: 0;
                transform: translateY(100vh) scale(0);
            }
            10% {
                opacity: 1;
                transform: translateY(90vh) scale(1);
            }
            90% {
                opacity: 1;
                transform: translateY(-10vh) scale(1);
            }
            100% {
                opacity: 0;
                transform: translateY(-20vh) scale(0);
            }
        }

        @media (max-width: 768px) {
            .error-container {
                margin: 20px;
                padding: 40px 20px;
            }

            .error-number {
                font-size: 6rem;
            }

            .error-title {
                font-size: 2rem;
            }

            .error-message {
                font-size: 1rem;
            }

            .btn-home, .btn-search {
                display: block;
                margin: 10px 0;
                width: 100%;
            }

            .toy {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="error-page">
        <!-- Floating Background Elements -->
        <div class="floating-toys">
            <div class="toy"><i class="fas fa-baby"></i></div>
            <div class="toy"><i class="fas fa-teddy-bear"></i></div>
            <div class="toy"><i class="fas fa-baby-carriage"></i></div>
            <div class="toy"><i class="fas fa-rattle"></i></div>
            <div class="toy"><i class="fas fa-baby"></i></div>
            <div class="toy"><i class="fas fa-teddy-bear"></i></div>
        </div>

        <!-- Floating Hearts -->
        <div class="hearts">
            <div class="heart" style="left: 10%;"><i class="fas fa-heart"></i></div>
            <div class="heart" style="left: 20%;"><i class="fas fa-heart"></i></div>
            <div class="heart" style="left: 30%;"><i class="fas fa-heart"></i></div>
            <div class="heart" style="left: 40%;"><i class="fas fa-heart"></i></div>
            <div class="heart" style="left: 50%;"><i class="fas fa-heart"></i></div>
            <div class="heart" style="left: 60%;"><i class="fas fa-heart"></i></div>
            <div class="heart" style="left: 70%;"><i class="fas fa-heart"></i></div>
            <div class="heart" style="left: 80%;"><i class="fas fa-heart"></i></div>
            <div class="heart" style="left: 90%;"><i class="fas fa-heart"></i></div>
        </div>

        <!-- Main Error Content -->
        <div class="error-container">
            <div class="error-number">404</div>
            <div class="baby-icon">
                <i class="fas fa-baby-carriage"></i>
            </div>
            <h1 class="error-title">Oops! Page Not Found</h1>
            <p class="error-message">
                Looks like this little one crawled away! The page you're looking for seems to have wandered off to play. 
                Don't worry, let's get you back to our wonderful baby products!
            </p>
            
            <div class="action-buttons">
                <a href="{{ route('frontend.home') }}" class="btn-home">
                    <i class="fas fa-home me-2"></i>Go Home
                </a>
                <a href="{{ route('frontend.shop') }}" class="btn-search">
                    <i class="fas fa-shopping-bag me-2"></i>Shop Now
                </a>
            </div>

            <div class="search-suggestions">
                <p class="mb-3"><strong>Popular Pages:</strong></p>
                <a href="{{ route('frontend.shop') }}" class="suggestion-item">
                    <i class="fas fa-shopping-bag me-1"></i>Shop
                </a>
                <a href="{{ route('frontend.contact') }}" class="suggestion-item">
                    <i class="fas fa-envelope me-1"></i>Contact
                </a>

                <a href="{{ route('frontend.faq') }}" class="suggestion-item">
                    <i class="fas fa-question me-1"></i>Faq
                </a>

                <a href="{{ route('frontend.shipping_info') }}" class="suggestion-item">
                    <i class="fas fa-truck me-1"></i>Shipping Info
                </a>
                <a href="{{ route('frontend.return_policy') }}" class="suggestion-item">
                    <i class="fas fa-undo me-1"></i>Return Policy
                </a>
                <a href="{{ route('frontend.size_guide') }}" class="suggestion-item">
                    <i class="fas fa-ruler me-1"></i>Size Guide
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('frontendAssets/asset/js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- Custom Animation Script -->
    <script>
        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Create more floating hearts dynamically
            const heartsContainer = document.querySelector('.hearts');
            
            setInterval(() => {
                const heart = document.createElement('div');
                heart.className = 'heart';
                heart.innerHTML = '<i class="fas fa-heart"></i>';
                heart.style.left = Math.random() * 100 + '%';
                heart.style.animationDuration = (Math.random() * 3 + 5) + 's';
                heartsContainer.appendChild(heart);
                
                // Remove heart after animation
                setTimeout(() => {
                    heart.remove();
                }, 8000);
            }, 2000);

            // Add click effect to buttons
            const buttons = document.querySelectorAll('.btn-home, .btn-search');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    // Create ripple effect
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;
                    
                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.classList.add('ripple');
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });

            // Add hover effect to baby icon
            const babyIcon = document.querySelector('.baby-icon');
            babyIcon.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.2) rotate(10deg)';
            });
            
            babyIcon.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1) rotate(0deg)';
            });
        });
    </script>

    <style>
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.6);
            transform: scale(0);
            animation: ripple-animation 0.6s linear;
            pointer-events: none;
        }

        @keyframes ripple-animation {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }

        .btn-home, .btn-search {
            position: relative;
            overflow: hidden;
        }

        .baby-icon {
            transition: all 0.3s ease;
            cursor: pointer;
        }
    </style>
</body>
</html>
