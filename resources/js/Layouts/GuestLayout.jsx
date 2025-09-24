import ApplicationLogo from '@/Components/ApplicationLogo';
import { Link } from '@inertiajs/react';

export default function GuestLayout({ children }) {
    return (
        <div className="min-h-screen bg-gradient-to-br from-green-50 to-green-100 flex flex-col justify-center items-center">
            {/* Header dengan Logo MONA */}
            <div className="mb-8">
                <Link href="/">
                    <div className="flex items-center space-x-3">
                        <div className="w-12 h-12 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center shadow-lg">
                            <span className="text-white font-bold text-xl">M</span>
                        </div>
                        <span className="text-3xl font-bold text-green-600">MONA</span>
                    </div>
                </Link>
            </div>

            {/* Main Content */}
            <div className="w-full max-w-md">
                {children}
            </div>
        </div>
    );
}
