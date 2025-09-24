import ApplicationLogo from '@/Components/ApplicationLogo';
import { Link } from '@inertiajs/react';

export default function Guest({ children }) {
    return (
        <div className="flex min-h-screen flex-col items-center pt-6 sm:justify-center sm:pt-0" 
             style={{ backgroundColor: '#F8F7F0' }}>
            {children}
        </div>
    );
}
