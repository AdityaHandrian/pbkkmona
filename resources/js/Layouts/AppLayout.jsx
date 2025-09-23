import { Head, Link } from '@inertiajs/react';

export default function AppLayout({ children, title, auth, navigation }) {
    return (
        <>
            <Head title={title} />
            <div className="min-h-screen bg-[#F8F7F0] font-sans">
                {/* Reusable Header */}
                <header className="border-b border-[#E0E0E0] bg-white">
                    <div className="max-w-[1500px] mx-auto px-6 py-6 flex items-center justify-between">
                        {/* Logo */}
                        <Link href="/" className="flex items-center space-x-3">
                            <img src="/images/logo.png" alt="MONA Logo" className="max-h-20"/>
                            <span className="text-2xl font-bold text-[#058743] flex items-center">MONA</span>
                        </Link>

                        {/* Dynamic Navigation - only shows if explicitly provided */}
                        {navigation}
                    </div>
                </header>

                {/* Page Content */}
                <main>
                    {children}
                </main>
            </div>
        </>
    );
}