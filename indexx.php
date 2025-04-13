<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickCart - Online Grocery Delivery in Minutes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#16a34a',
                        secondary: '#15803d',
                        accent: '#f59e0b',
                        dark: '#1e293b',
                        light: '#f8fafc'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }
        
        .category-card:hover .category-icon {
            transform: scale(1.1);
            transition: all 0.3s ease;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
   <!-- Navigation -->
<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <a href="#" class="text-2xl font-bold text-dark">QuickCart</a>
        </div>
        
        <div class="hidden md:flex space-x-8">
            <a href="index.html" class="text-dark hover:text-primary font-medium">Home</a>
            <a href="#categories" class="text-dark hover:text-primary font-medium">Categories</a>
            <a href="allprod.html" class="text-dark hover:text-primary font-medium">Products</a>
            <a href="#offers" class="text-dark hover:text-primary font-medium">Offers</a>
            <a href="#how-it-works" class="text-dark hover:text-primary font-medium">How It Works</a>
        </div>
        
        <div class="flex items-center space-x-4">
          
        <a href="signup1.php" class="bg-blue-500 text-white px-4 py-2 rounded-md font-medium hover:bg-blue-700">Sign Up</a>
        <a href="login1.php" class="bg-primary text-white px-4 py-2 rounded-md font-medium hover:bg-secondary">Login</a>
        </div>
    </div>
</nav>
    <!-- Hero Section -->
    <section class="bg-primary text-white py-20 md:py-32">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Fresh Groceries Delivered to Your Doorstep</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Get your daily essentials delivered in as little as 30 minutes. No queues, no hassles - just fresh products at your doorstep.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="shopnow.php" class="bg-white hover:bg-gray-100 text-primary px-8 py-4 rounded-lg font-bold text-lg">Shop Now</a>
                <a href="#how-it-works" class="bg-dark hover:bg-gray-800 text-white px-8 py-4 rounded-lg font-bold text-lg">How It Works</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 rounded-lg">
                    <div class="bg-primary bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-bolt text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Fast Delivery</h3>
                    <p class="text-gray-600">Get your groceries in 30-45 minutes with our express delivery service.</p>
                </div>
                
                <div class="text-center p-6 rounded-lg">
                    <div class="bg-primary bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-leaf text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Fresh Products</h3>
                    <p class="text-gray-600">Direct from farm to your home - the freshest produce available.</p>
                </div>
                
                <div class="text-center p-6 rounded-lg">
                    <div class="bg-primary bg-opacity-10 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-rupee-sign text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Best Prices</h3>
                    <p class="text-gray-600">Competitive prices with regular discounts and offers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categories" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4">Shop by Categories</h2>
            <p class="text-gray-600 text-center max-w-2xl mx-auto mb-12">Browse through our wide range of grocery categories to find what you need</p>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <a href="fruits.html" class="category-card bg-white rounded-lg shadow-sm p-6 text-center hover:shadow-md transition-all">
                    <div class="bg-primary bg-opacity-10 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-apple-alt text-3xl text-primary category-icon"></i>
                    </div>
                    <h3 class="font-medium text-dark">Fruits</h3>
                </a>
                
                <a href="vegetables.html" class="category-card bg-white rounded-lg shadow-sm p-6 text-center hover:shadow-md transition-all">
                    <div class="bg-primary bg-opacity-10 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-carrot text-3xl text-primary category-icon"></i>
                    </div>
                    <h3 class="font-medium text-dark">Vegetables</h3>
                </a>
                
                <a href="dairy.html" class="category-card bg-white rounded-lg shadow-sm p-6 text-center hover:shadow-md transition-all">
                    <div class="bg-primary bg-opacity-10 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-wine-bottle text-3xl text-primary category-icon"></i>
                    </div>
                    <h3 class="font-medium text-dark">Dairy</h3>
                </a>
                
                <a href="meat.html" class="category-card bg-white rounded-lg shadow-sm p-6 text-center hover:shadow-md transition-all">
                    <div class="bg-primary bg-opacity-10 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-drumstick-bite text-3xl text-primary category-icon"></i>
                    </div>
                    <h3 class="font-medium text-dark">Meat</h3>
                </a>
                
                <a href="bakery.html" class="category-card bg-white rounded-lg shadow-sm p-6 text-center hover:shadow-md transition-all">
                    <div class="bg-primary bg-opacity-10 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-bread-slice text-3xl text-primary category-icon"></i>
                    </div>
                    <h3 class="font-medium text-dark">Bakery</h3>
                </a>
                
                <a href="#" class="category-card bg-white rounded-lg shadow-sm p-6 text-center hover:shadow-md transition-all">
                    <div class="bg-primary bg-opacity-10 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-wine-glass-alt text-3xl text-primary category-icon"></i>
                    </div>
                    <h3 class="font-medium text-dark">Beverages</h3>
                </a>
            </div>
        </div>
    </section>

    <!-- Popular Products -->
    <section id="products" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4">Popular Products</h2>
            <p class="text-gray-600 text-center max-w-2xl mx-auto mb-12">Our customers love these products. Try them today!</p>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <!-- Product 1 -->
                <div class="product-card bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300">
                    <div class="relative">
                        <img src="snowflakeApple.jpg" alt="Fresh Apples" class="w-full h-48 object-cover">
                        <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded absolute top-2 left-2">20% OFF</span>
                        <button class="absolute bottom-2 right-2 bg-primary text-white p-2 rounded-full hover:bg-secondary">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <span class="text-xs text-gray-500">Fruits</span>
                        <h3 class="font-medium text-dark mb-1">Fresh Apples</h3>
                        <div class="flex items-center justify-between mt-2">
                            <div>
                                <span class="text-primary font-bold">₹120</span>
                                <span class="text-xs text-gray-500 line-through ml-1">₹150</span>
                            </div>
                            <span class="text-xs text-gray-500">1kg</span>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="product-card bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300">
                    <div class="relative">
                        <img src="tomato.jpg" alt="Organic Tomatoes" class="w-full h-48 object-cover">
                        <button class="absolute bottom-2 right-2 bg-primary text-white p-2 rounded-full hover:bg-secondary">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <span class="text-xs text-gray-500">Vegetables</span>
                        <h3 class="font-medium text-dark mb-1">Organic Tomatoes</h3>
                        <div class="flex items-center justify-between mt-2">
                            <div>
                                <span class="text-primary font-bold">₹80</span>
                            </div>
                            <span class="text-xs text-gray-500">1kg</span>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="product-card bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1550583724-b2692b85b150?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="Fresh Milk" class="w-full h-48 object-cover">
                        <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded absolute top-2 left-2">15% OFF</span>
                        <button class="absolute bottom-2 right-2 bg-primary text-white p-2 rounded-full hover:bg-secondary">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <span class="text-xs text-gray-500">Dairy</span>
                        <h3 class="font-medium text-dark mb-1">Fresh Milk</h3>
                        <div class="flex items-center justify-between mt-2">
                            <div>
                                <span class="text-primary font-bold">₹68</span>
                                <span class="text-xs text-gray-500 line-through ml-1">₹80</span>
                            </div>
                            <span class="text-xs text-gray-500">1L</span>
                        </div>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="product-card bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300">
                    <div class="relative">
                        <img src="Whole Wheat Bread.jpg" alt="Brown Bread" class="w-full h-48 object-cover">
                        <button class="absolute bottom-2 right-2 bg-primary text-white p-2 rounded-full hover:bg-secondary">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                    <div class="p-4">
                        <span class="text-xs text-gray-500">Bakery</span>
                        <h3 class="font-medium text-dark mb-1">Whole Wheat Bread</h3>
                        <div class="flex items-center justify-between mt-2">
                            <div>
                                <span class="text-primary font-bold">₹45</span>
                            </div>
                            <span class="text-xs text-gray-500">400g</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="allprod.html" class="inline-block bg-primary hover:bg-secondary text-white px-8 py-3 rounded-lg font-medium">View All Products</a>
            </div>
        </div>
    </section>

    <!-- Special Offers -->
    <section id="offers" class="py-16 bg-primary bg-opacity-5">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4">Special Offers</h2>
            <p class="text-gray-600 text-center max-w-2xl mx-auto mb-12">Don't miss out on these amazing deals and discounts</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Offer 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3">
                            <img src="https://images.unsplash.com/photo-1568702846914-96b305d2aaeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Offer" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6 md:w-2/3">
                            <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">Limited Time</span>
                            <h3 class="text-xl font-bold mt-2 mb-1">Buy 1 Get 1 Free on Selected Fruits</h3>
                            <p class="text-gray-600 mb-4">Enjoy this amazing offer on apples, bananas, and oranges. Limited stock available!</p>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-500 mr-2">Valid till:</span>
                                <span class="font-medium">12 April 2025 </span>
                            </div>
                            <button class="mt-4 bg-primary hover:bg-secondary text-white px-4 py-2 rounded-md">Shop Now</button>
                        </div>
                    </div>
                </div>
                
                <!-- Offer 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/3">
                            <img src="https://images.unsplash.com/photo-1603569283847-aa295f0d016a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1528&q=80" alt="Offer" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6 md:w-2/3">
                            <span class="bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">New</span>
                            <h3 class="text-xl font-bold mt-2 mb-1">30% Off on First Order</h3>
                            <p class="text-gray-600 mb-4">New customers get 30% discount on their first order above ₹500. Use code WELCOME30 at checkout.</p>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-500 mr-2">Valid till:</span>
                                <span class="font-medium">14 April 2025</span>
                            </div>
                            <button class="mt-4 bg-primary hover:bg-secondary text-white px-4 py-2 rounded-md">Shop Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-4">How QuickCart Works</h2>
            <p class="text-gray-600 text-center max-w-2xl mx-auto mb-12">Get your groceries in just 3 simple steps</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="bg-primary text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">1</div>
                    <h3 class="text-xl font-bold mb-2">Browse & Add to Cart</h3>
                    <p class="text-gray-600">Select from 5000+ products across categories and add them to your cart.</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="bg-primary text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">2</div>
                    <h3 class="text-xl font-bold mb-2">Choose Delivery Slot</h3>
                    <p class="text-gray-600">Select your preferred delivery time - as fast as 30 minutes or schedule for later.</p>
                </div>
                
                <div class="text-center p-6">
                    <div class="bg-primary text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">3</div>
                    <h3 class="text-xl font-bold mb-2">Get Delivery & Enjoy</h3>
                    <p class="text-gray-600">Sit back and relax while we deliver fresh groceries to your doorstep.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">What Our Customers Say</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="kushagra.jpg" alt="Customer" class="w-12 h-12 rounded-full object-cover">
                        <div class="ml-4">
                            <h4 class="font-bold">Kushagra Singh</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"QuickCart has made my weekly grocery shopping so convenient. The delivery is always on time and the products are fresh. Highly recommended!"</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="my2.jpg" alt="Customer" class="w-12 h-12 rounded-full object-cover">
                        <div class="ml-4">
                            <h4 class="font-bold">Abdul Ahad</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"I love the variety of products available. The mobile app is very user-friendly and the customer service is excellent."</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <img src="sharad1.jpg" alt="Customer" class="w-12 h-12 rounded-full object-cover">
                        <div class="ml-4">
                            <h4 class="font-bold">Sharad</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600">"The express delivery option is a game-changer. I can get my groceries delivered before I even finish my work. Amazing service!"</p>
                </div>
            </div>
        </div>
    </section>

    <!-- App Download -->
    <section class="py-16 bg-primary text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h2 class="text-3xl font-bold mb-4">Download Our Mobile App</h2>
                    <p class="text-lg mb-6">Get exclusive app-only offers and faster checkout experience. Available on both Android and iOS platforms.</p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#" class="bg-black hover:bg-gray-900 text-white px-6 py-3 rounded-lg flex items-center justify-center">
                            <i class="fab fa-google-play text-2xl mr-2"></i>
                            <div>
                                <span class="text-xs block">Get it on</span>
                                <span class="font-bold">Google Play</span>
                            </div>
                        </a>
                        <a href="#" class="bg-black hover:bg-gray-900 text-white px-6 py-3 rounded-lg flex items-center justify-center">
                            <i class="fab fa-apple text-2xl mr-2"></i>
                            <div>
                                <span class="text-xs block">Download on the</span>
                                <span class="font-bold">App Store</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <img src="https://cdn.pixabay.com/photo/2017/01/22/12/07/imac-1999636_1280.png" alt="App Screenshot" class="w-full max-w-md">
                </div>
            </div>
        </div>
    </section>

    

    <footer class="bg-dark text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <i class="fas fa-shopping-basket text-2xl text-primary"></i>
                        <span class="text-xl font-bold">QuickCart</span>
                    </div>
                    <p class="text-gray-400 mb-4">Your one-stop solution for all grocery needs. Fast delivery, fresh products, and great prices.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/abdul-ahad-856541241/" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="font-bold text-lg mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Home</a></li>
                        <li><a href="#products" class="text-gray-400 hover:text-white">Products</a></li>
                        <li><a href="#offers" class="text-gray-400 hover:text-white">Offers</a></li>
                        <li><a href="#how-it-works" class="text-gray-400 hover:text-white">How It Works</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold text-lg mb-4">Customer Service</h4>
                    <ul class="space-y-2">
                        <li><a href="contact.php" class="text-gray-400 hover:text-white">Contact Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">FAQs</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Shipping Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Returns & Refunds</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-bold text-lg mb-4">Contact Info</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-2 text-primary"></i>
                            <span>Phagwara, Kapurthala, 144411, Punjab, India</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-2 text-primary"></i>
                            <span>+91 7292907225</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2 text-primary"></i>
                            <span>support@quickcart.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2025 QuickCart. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>