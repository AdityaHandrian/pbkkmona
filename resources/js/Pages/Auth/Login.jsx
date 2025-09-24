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

            {/* Welcome Back Card */}
            <div className="bg-white rounded-2xl shadow-xl p-8 border border-green-100">
                {/* Header */}
                <div className="text-center mb-8">
                    <h1 className="text-3xl font-bold text-gray-800 mb-2">Welcome Back!</h1>
                    <p className="text-gray-600">Log in to your account</p>
                </div>

                {status && (
                    <div className="mb-4 text-sm font-medium text-green-600 bg-green-50 p-3 rounded-lg border border-green-200">
                        {status}
                    </div>
                )}

                <form onSubmit={submit} className="space-y-6">
                    {/* Email Field */}
                    <div>
                        <TextInput
                            id="email"
                            type="email"
                            name="email"
                            value={data.email}
                            className="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500 bg-gray-50"
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
                            className="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-green-500 focus:border-green-500 bg-gray-50"
                            autoComplete="current-password"
                            onChange={(e) => setData('password', e.target.value)}
                            placeholder="Password"
                        />
                        <InputError message={errors.password} className="mt-2" />
                    </div>

                    {/* Remember Me */}
                    <div className="flex items-center">
                        <Checkbox
                            name="remember"
                            checked={data.remember}
                            onChange={(e) => setData('remember', e.target.checked)}
                            className="rounded border-gray-300 text-green-600 shadow-sm focus:ring-green-500"
                        />
                        <span className="ml-2 text-sm text-gray-600">Remember me</span>
                    </div>

                    {/* Login Button */}
                    <div>
                        <PrimaryButton 
                            className="w-full justify-center py-3 bg-green-600 hover:bg-green-700 focus:ring-green-500 rounded-lg font-semibold text-white shadow-lg hover:shadow-xl transition-all duration-200"
                            disabled={processing}
                        >
                            Log In
                        </PrimaryButton>
                    </div>

                    {/* Footer Links */}
                    <div className="text-center space-y-3">
                        {canResetPassword && (
                            <Link
                                href={route('password.request')}
                                className="text-sm text-green-600 hover:text-green-800 underline"
                            >
                                Forgot your password?
                            </Link>
                        )}
                        
                        <div className="text-sm text-gray-600">
                            Don't have an account?{' '}
                            <Link
                                href={route('register')}
                                className="text-green-600 hover:text-green-800 underline font-medium"
                            >
                                Sign Up
                            </Link>
                        </div>
                    </div>
                </form>
            </div>
        </GuestLayout>
    );
}
