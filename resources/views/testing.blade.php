<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONA - Your Personal AI Financial Assistant</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        /* Applying the Inter font family */
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Simple scroll-behavior */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-900 text-white antialiased">

    <!-- Header -->
    <header class="bg-gray-900/80 backdrop-blur-md fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-white">
                <a href="#">MONA</a>
            </div>
            <nav class="hidden md:flex space-x-8 items-center">
                <a href="#features" class="text-gray-300 hover:text-white transition-colors duration-300">Features</a>
                <a href="#how-it-works" class="text-gray-300 hover:text-white transition-colors duration-300">How It Works</a>
                <a href="#testimonials" class="text-gray-300 hover:text-white transition-colors duration-300">Testimonials</a>
            </nav>
            <a href="#" class="bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-2 px-5 rounded-lg transition-all duration-300 ease-in-out shadow-lg shadow-indigo-600/30">
                Get Started
            </a>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
            <div class="absolute inset-0 bg-grid-gray-700/[0.2] [mask-image:linear-gradient(to_bottom,white_5%,transparent_90%)]"></div>
            <div class="container mx-auto px-6 text-center relative">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500 mb-6 leading-tight">
                    Meet MONA, Your AI Financial Co-pilot.
                </h1>
                <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto mb-10">
                    Stop guessing your financial future. MONA leverages cutting-edge AI to provide personalized insights, automate budgeting, and help you grow your wealth smarter and faster.
                </p>
                <div class="flex justify-center items-center gap-4">
                    <a href="#" class="bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3 px-8 rounded-lg transition-all duration-300 ease-in-out text-lg shadow-lg shadow-indigo-600/40">
                        Sign Up for Free
                    </a>
                </div>
                <div class="mt-20">
                     <!-- App Mockup Image -->
                     <div class="relative w-full max-w-4xl mx-auto">
                        <div class="absolute -inset-2 rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 blur-xl opacity-20"></div>
                        <img src="https://placehold.co/1200x675/111827/7C3AED?text=MONA+App+Dashboard" alt="MONA App Dashboard" class="relative rounded-xl border border-gray-700 shadow-2xl shadow-indigo-900/40">
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-20 bg-gray-900">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">The Future of Financial Management</h2>
                    <p class="text-gray-400 max-w-2xl mx-auto">Everything you need to take control of your money, powered by AI.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Feature 1: AI Assistant -->
                    <div class="bg-gray-800/50 p-8 rounded-xl border border-gray-700 transform hover:-translate-y-2 transition-transform duration-300">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-600 text-white mb-6">
                             <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" /></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Your Personal AI Assistant</h3>
                        <p class="text-gray-400">Ask MONA anything about your finances in plain English. Get instant insights, spending forecasts, and saving recommendations.</p>
                    </div>

                    <!-- Feature 2: Smart Budgeting -->
                    <div class="bg-gray-800/50 p-8 rounded-xl border border-gray-700 transform hover:-translate-y-2 transition-transform duration-300">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-600 text-white mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" /></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Automated Budgeting</h3>
                        <p class="text-gray-400">MONA automatically categorizes your transactions and creates a personalized budget that adapts to your spending habits.</p>
                    </div>

                    <!-- Feature 3: Investment Tracking -->
                    <div class="bg-gray-800/50 p-8 rounded-xl border border-gray-700 transform hover:-translate-y-2 transition-transform duration-300">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-600 text-white mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" /></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Investment Portfolio Hub</h3>
                        <p class="text-gray-400">Connect all your investment accounts in one place. Track your performance, analyze your diversification, and discover new opportunities.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section id="how-it-works" class="py-20">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Get Started in Minutes</h2>
                    <p class="text-gray-400 max-w-2xl mx-auto">A seamless setup for a lifetime of financial clarity.</p>
                </div>
                <div class="relative">
                    <!-- The connecting line -->
                    <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-gray-700 -translate-y-1/2"></div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative">
                        <!-- Step 1 -->
                        <div class="text-center">
                            <div class="relative inline-block">
                                <div class="w-20 h-20 flex items-center justify-center bg-gray-800 border-2 border-indigo-500 rounded-full text-2xl font-bold text-indigo-400 mb-4">1</div>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Connect Your Accounts</h3>
                            <p class="text-gray-400">Securely link your bank accounts, credit cards, and investment portfolios using bank-level encryption.</p>
                        </div>
                        <!-- Step 2 -->
                        <div class="text-center">
                            <div class="relative inline-block">
                                <div class="w-20 h-20 flex items-center justify-center bg-gray-800 border-2 border-indigo-500 rounded-full text-2xl font-bold text-indigo-400 mb-4">2</div>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Let MONA Analyze</h3>
                            <p class="text-gray-400">Our AI gets to work, analyzing your spending patterns, identifying savings opportunities, and tracking your net worth.</p>
                        </div>
                        <!-- Step 3 -->
                        <div class="text-center">
                            <div class="relative inline-block">
                                <div class="w-20 h-20 flex items-center justify-center bg-gray-800 border-2 border-indigo-500 rounded-full text-2xl font-bold text-indigo-400 mb-4">3</div>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Achieve Your Goals</h3>
                            <p class="text-gray-400">Receive personalized insights and actionable advice to help you reach your financial goals faster than ever.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="py-20 bg-gray-900">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Loved by People Like You</h2>
                    <p class="text-gray-400 max-w-2xl mx-auto">Don't just take our word for it. Here's what our users are saying.</p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="bg-gray-800 p-8 rounded-xl border border-gray-700">
                        <p class="text-gray-300 mb-6">"MONA has completely changed how I see my money. The AI assistant is a game-changer. I finally feel in control of my finances for the first time."</p>
                        <div class="flex items-center">
                            <img class="w-12 h-12 rounded-full mr-4" src="https://placehold.co/100x100/312e81/ffffff?text=SJ" alt="Avatar of Sarah J.">
                            <div>
                                <p class="font-bold text-white">Sarah J.</p>
                                <p class="text-gray-400 text-sm">Freelance Designer</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="bg-gray-800 p-8 rounded-xl border border-gray-700">
                        <p class="text-gray-300 mb-6">"The automated budgeting and investment tracking are incredible. I've saved more in the last 3 months with MONA than I did in the entire previous year."</p>
                        <div class="flex items-center">
                            <img class="w-12 h-12 rounded-full mr-4" src="https://placehold.co/100x100/312e81/ffffff?text=MK" alt="Avatar of Michael K.">
                            <div>
                                <p class="font-bold text-white">Michael K.</p>
                                <p class="text-gray-400 text-sm">Software Engineer</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="bg-gray-800 p-8 rounded-xl border border-gray-700">
                        <p class="text-gray-300 mb-6">"As a small business owner, MONA helps me track both my personal and business expenses effortlessly. The weekly summary from the AI is my favorite feature!"</p>
                        <div class="flex items-center">
                            <img class="w-12 h-12 rounded-full mr-4" src="https://placehold.co/100x100/312e81/ffffff?text=DW" alt="Avatar of David W.">
                            <div>
                                <p class="font-bold text-white">David W.</p>
                                <p class="text-gray-400 text-sm">Cafe Owner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20">
            <div class="container mx-auto px-6 text-center">
                <div class="bg-gradient-to-r from-indigo-700 to-purple-800 rounded-xl p-10 md:p-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Transform Your Financial Life?</h2>
                    <p class="text-indigo-200 max-w-2xl mx-auto mb-8">Join thousands of users who are building a better financial future with MONA. It's free to get started.</p>
                    <a href="#" class="bg-white text-indigo-700 hover:bg-gray-200 font-bold py-3 px-8 rounded-lg transition-colors duration-300 text-lg shadow-2xl">
                        Start Your Journey Now
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 border-t border-gray-800">
        <div class="container mx-auto px-6 py-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-center md:text-left mb-4 md:mb-0">
                    <p class="text-lg font-semibold">MONA</p>
                    <p class="text-gray-400 text-sm">&copy; {{ date('Y') }} MONA Inc. All rights reserved.</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors"><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg></a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors"><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg></a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors"><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12.019c0 4.438 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.031-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.03 1.595 1.03 2.688 0 3.848-2.338 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.001 10.001 0 0022 12.019C22 6.477 17.523 2 12 2z" clip-rule="evenodd" /></svg></a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
