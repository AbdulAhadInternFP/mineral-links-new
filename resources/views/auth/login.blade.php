<x-auth-layout>

    <!-- Right Panel: Login Form -->
    <section id="login_form_panel" class="flex w-full items-center justify-center bg-brand-offwhite p-8 lg:w-1/2">
        <div id="login_card" class="w-full max-w-md rounded-xl bg-white p-10 shadow shadow-gray-200/50">
            <div class="mb-10 text-center">
                <h2 class="text-3xl font-bold text-gray-900">Welcome back</h2>
                <p class="mt-2 text-gray-500">Sign in to access your dashboard.</p>
            </div>

            <form action="#" method="POST" class="space-y-6">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email"
                            class="block w-full rounded-lg border border-gray-300 px-4 py-3 shadow-sm placeholder:text-gray-400 focus:border-brand-teal focus:outline-none focus:ring-1 focus:ring-brand-teal sm:text-sm"
                            placeholder="you@company.com">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="current-password"
                            class="block w-full rounded-lg border border-gray-300 px-4 py-3 shadow-sm placeholder:text-gray-400 focus:border-brand-teal focus:outline-none focus:ring-1 focus:ring-brand-teal sm:text-sm"
                            placeholder="••••••••">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox"
                            class="h-4 w-4 rounded border-gray-300 text-brand-teal focus:ring-brand-teal accent-brand-teal">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                    </div>

                    <div class="text-sm">
                        <a href="#" class="font-medium text-brand-teal hover:text-brand-dark-teal">Forgot
                            password?</a>
                    </div>
                </div>

                <div>
                    <a href="{{ route('admin.dashboard') }}"
                        class="flex w-full justify-center rounded-lg border border-transparent bg-brand-terracotta px-4 py-3 text-base font-medium text-white shadow-sm transition-colors duration-200 hover:bg-brand-terracotta/90 focus:outline-none focus:ring-2 focus:ring-brand-terracotta focus:ring-offset-2">
                        Sign In
                    </a>
                </div>
            </form>

            <div class="mt-8 text-center">
                <p class="text-sm text-gray-600">
                    Doesn't have an account.
                    <a href="{{ route('signup') }}" class="font-medium text-brand-teal hover:underline">Sign up</a>
                </p>
            </div>
        </div>
    </section>

</x-auth-layout>
