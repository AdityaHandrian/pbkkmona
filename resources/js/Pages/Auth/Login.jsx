import Checkbox from '@/Components/Checkbox';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import GuestLayout from '@/Layouts/GuestLayout';
import { Head, Link, useForm } from '@inertiajs/react';

export default function Login({ status, canResetPassword }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: '',
        password: '',
        remember: false,
    });

    const submit = (e) => {
        e.preventDefault();
        post(route('login'), {
            onFinish: () => reset('password'),
        });
    };

    return (
        <GuestLayout>
            <Head title="Log in" />

            {/* Main Container */}
            <div className="min-h-screen flex items-center justify-center px-4" style={{ backgroundColor: '#F8F7F0' }}>
                <div className="w-full max-w-md">
                    {/* Logo Section */}
                    <div className="text-center mb-8">
                        <div className="flex justify-center mb-6">
                            <div className="flex items-center space-x-2">
                                <img 
                                    src="/images/logo.png" 
                                    alt="Mona Logo" 
                                    className="h-12 w-12 object-contain"
                                />
                                <span className="text-2xl font-bold" style={{ color: '#058743' }}>
                                    MONA
                                </span>
                            </div>
                        </div>
                    </div>

                    {/* Login Card */}
                    <div className="bg-white rounded-3xl shadow-lg p-8">
                        {/* Header */}
                        <div className="text-center mb-6">
                            <h2 className="text-2xl font-bold mb-2" style={{ color: '#2C2C2C' }}>
                                Welcome Back!
                            </h2>
                            <p className="text-sm" style={{ color: '#757575' }}>
                                Log in to your account
                            </p>
                        </div>

                        {/* Status Message */}
                        {status && (
                            <div className="mb-4 text-sm font-medium text-green-600">
                                {status}
                            </div>
                        )}

                        {/* Login Form */}
                        <form onSubmit={submit} className="space-y-4">
                            {/* Email Field */}
                            <div>
                                <TextInput
                                    id="email"
                                    type="email"
                                    name="email"
                                    value={data.email}
                                    className="mt-1 block w-full px-4 py-3 border-0 rounded-xl focus:ring-2 focus:ring-offset-0 text-sm"
                                    style={{ 
                                        backgroundColor: '#F8F7F0',
                                        focusRingColor: '#058743'
                                    }}
                                    autoComplete="username"
                                    isFocused={true}
                                    onChange={(e) => setData('email', e.target.value)}
                                    placeholder="Email Address"
                                />
                                <InputError message={errors.email} className="mt-2" />
                            </div>

                            {/* Password Field */}
                            <div>
                                <TextInput
                                    id="password"
                                    type="password"
                                    name="password"
                                    value={data.password}
                                    className="mt-1 block w-full px-4 py-3 border-0 rounded-xl focus:ring-2 focus:ring-offset-0 text-sm"
                                    style={{ 
                                        backgroundColor: '#F8F7F0',
                                        focusRingColor: '#058743'
                                    }}
                                    autoComplete="current-password"
                                    onChange={(e) => setData('password', e.target.value)}
                                    placeholder="Password"
                                />
                                <InputError message={errors.password} className="mt-2" />
                            </div>

                            {/* Remember Me */}
                            <div className="flex items-center mt-4">
                                <label className="flex items-center">
                                    <Checkbox
                                        name="remember"
                                        checked={data.remember}
                                        onChange={(e) => setData('remember', e.target.checked)}
                                        className="rounded text-sm"
                                        style={{ 
                                            accentColor: '#058743',
                                            color: '#058743'
                                        }}
                                    />
                                    <span className="ml-2 text-sm" style={{ color: '#757575' }}>
                                        Remember me
                                    </span>
                                </label>
                            </div>

                            {/* Login Button */}
                            <div className="mt-6">
                                <PrimaryButton
                                    className="w-full justify-center py-3 px-4 rounded-xl font-semibold text-white shadow-lg hover:shadow-xl transition-all duration-200 text-sm"
                                    style={{ backgroundColor: '#058743' }}
                                    disabled={processing}
                                >
                                    Log In
                                </PrimaryButton>
                            </div>

                            {/* Footer Links */}
                            <div className="text-center mt-6 space-y-3">
                                {canResetPassword && (
                                    <div>
                                        <Link
                                            href={route('password.request')}
                                            className="text-sm underline"
                                            style={{ color: '#058743' }}
                                        >
                                            Forgot your password?
                                        </Link>
                                    </div>
                                )}
                                
                                <div className="text-sm">
                                    <span style={{ color: '#757575' }}>Don't have an account? </span>
                                    <Link
                                        href={route('register')}
                                        className="underline font-medium"
                                        style={{ color: '#058743' }}
                                    >
                                        Sign Up
                                    </Link>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </GuestLayout>
    );
}
