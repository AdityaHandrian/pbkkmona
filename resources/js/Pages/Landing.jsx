import { Head, Link } from '@inertiajs/react';

export default function Landing({ auth }) {
    return (
        <>
            <Head title="MONA - Take Full Control of Your Financial Future" />
            <div className="min-h-screen bg-[#F8F7F0] font-sans">
                {/* Header */}
                <header className="border-b border-[#E0E0E0] bg-white">
                    <div className="max-w-[1500px] mx-auto px-6 py-6 flex items-center justify-between">
                        {/* Logo */}
                        <div className="flex items-center space-x-3">
                            <img src="/images/logo.png" alt="MONA Logo" className="max-h-20"/>
                            <span className="text-2xl font-bold text-[#058743] flex items-center">MONA</span>
                        </div>

                        {/* Get Started Button */}
                        <a
                            href="/scan-receipt"
                            className="bg-[#058743] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#046635] transition-colors duration-200"
                        >
                            Get Started
                        </a>
                    </div>
                </header>

                {/* Hero Section */}
                <section className="text-center py-20">
                    <div className="max-w-[1500px] mx-auto px-6">
                        <div className="max-w-6xl mx-auto">
                        <h1 className="text-4xl lg:text-6xl font-bold text-[#2C2C2C] leading-tight mb-6">
                            Take Full Control of Your{' '}
                            <span className="text-[#058743]">Financial Future</span>
                        </h1>
                        
                        <p className="text-xl lg:text-xl text-[#2C2C2C] mb-8 max-w-2xl mx-auto leading-relaxed">
                            <span className="font-bold text-[#058743]">MONA</span> is the simplest way to manage your personal finances. Track spending, create budgets, and achieve your savings goals with ease.
                        </p>

                        <a
                            href="/scan-receipt"
                            className="inline-block bg-[#058743] text-white px-10 py-4 rounded-lg text-xl font-semibold hover:bg-[#046635] transition-colors duration-200"
                        >
                            Sign Up For Free
                        </a>
                        </div>
                    </div>
                </section>

                {/* Features Section */}
                <section className="py-20">
                    <div className="max-w-[1500px] mx-auto px-6">
                        <div className="text-center mb-16">
                            <h2 className="text-3xl lg:text-5xl font-bold text-[#2C2C2C] mb-4">
                                Everything You Need in One Place
                            </h2>
                            <p className="text-lg lg:text-xl text-[#2C2C2C] max-w-2xl mx-auto">
                                Manage your money effortlessly with our powerful features.
                            </p>
                        </div>

                        {/* Feature Cards */}
                        <div className="grid md:grid-cols-3 gap-8">
                            {/* Financial Dashboard */}
                            <div className="bg-white rounded-2xl p-8 border border-[#E0E0E0] hover:shadow-lg transition-shadow duration-200">
                                <img src="/images/icons/dashboard-icon.svg" alt="Dashboard" className="max-h-15 mb-5"/>
                                <h3 className="text-xl font-bold text-[#2C2C2C] mb-3">
                                    Financial Dashboard
                                </h3>
                                <p className="text-[#2C2C2C] leading-relaxed">
                                    Get a clear overview of your income, expenses, and savings at a single glance.
                                </p>
                            </div>

                            {/* Smart Expense Tracking */}
                            <div className="bg-white rounded-2xl p-8 border border-[#E0E0E0] hover:shadow-lg transition-shadow duration-200">
                                <img src="/images/icons/expense-icon.svg" alt="Expense Tracking" className="max-h-15 mb-5"/>
                                <h3 className="text-xl font-bold text-[#2C2C2C] mb-3">
                                    Smart Expense Tracking
                                </h3>
                                <p className="text-[#2C2C2C] leading-relaxed">
                                    Automatically categorize your transactions and understand where your money is going.
                                </p>
                            </div>

                            {/* Flexible Budgeting */}
                            <div className="bg-white rounded-2xl p-8 border border-[#E0E0E0] hover:shadow-lg transition-shadow duration-200">
                                <img src="/images/icons/budgeting-icon.svg" alt="Budgeting" className="max-h-15 mb-5"/>
                                <h3 className="text-xl font-bold text-[#2C2C2C] mb-3">
                                    Flexible Budgeting
                                </h3>
                                <p className="text-[#2C2C2C] leading-relaxed">
                                    Create monthly budgets that work for you and get notified when you're close to your limits.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                {/* Footer */}
                <footer className="border-t border-[#E0E0E0] bg-white">
                    <div className="max-w-[1500px] mx-auto px-6 py-4 text-center">
                        <p className="text-[#2C2C2C] text-sm">
                        © 2025 MONA. All Rights Reserved. Built with{' '}
                            <span className="text-red-500">❤</span> for better financial habits.
                        </p>
                    </div>
                </footer>
            </div>
        </>
    );
}