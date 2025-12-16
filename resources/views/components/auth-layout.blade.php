<!DOCTYPE html>
<html class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .flow-line {
            position: absolute;
            width: 1px;
            height: 150%;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(176, 196, 177, 0.3), rgba(255, 255, 255, 0));
            animation: flow 20s linear infinite;
        }

        @keyframes flow {
            0% {
                transform: translateY(-100%) rotate(15deg);
            }

            100% {
                transform: translateY(100%) rotate(15deg);
            }
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'brand-teal': '#2A6F6A',
                        'brand-dark-teal': '#1F5753',
                        'brand-sage': '#B0C4B1',
                        'brand-terracotta': '#D6A77A',
                        'brand-offwhite': '#F7F9F7',
                    },
                    boxShadow: {
                        'shadow': 'rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px',
                    }
                }
            }
        }
    </script>
</head>

<body class="h-full font-sans antialiased text-gray-900">
    <main id="login_page" class="flex h-screen w-full overflow-hidden">

        <!-- Left Panel: Brand Hero Section -->
        <section id="brand_hero"
            class="relative hidden w-1/2 flex-col justify-between bg-gradient-to-br from-brand-teal to-brand-dark-teal p-16 text-white lg:flex">
            <!-- Decorative Elements -->
            <div class="absolute inset-0 opacity-20"
                style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;">
            </div> 

            <!-- Glow Effects -->
            <div class="absolute -left-20 -top-20 h-96 w-96 rounded-full bg-brand-sage/20 blur-3xl"></div>
            <div class="absolute -bottom-20 -right-20 h-96 w-96 rounded-full bg-brand-terracotta/20 blur-3xl"></div>

            <!-- Content -->
            <div class="z-10 mt-10">
                <div class="flex items-center space-x-3">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-white/10 backdrop-blur-sm">
                        <svg class="h-8 w-8 text-brand-terracotta" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 2L2 7l10 5 10-5-10-5zm0 9l2.5-1.25L12 8.5l-2.5 1.25L12 11zm0 2.5l-5-2.5-5 2.5L12 22l10-8.5-5-2.5-5 2.5z" />
                        </svg>
                    </div>
                    <span class="text-xl font-bold tracking-wide text-white/90">MINERAL LINK</span>
                </div>
            </div>

            <div id="hero_content" class="z-10 my-auto max-w-lg">
                <h1 class="text-5xl font-bold leading-tight tracking-tight text-white drop-shadow-sm">
                    Seamless data flow.
                </h1>
                <p class="mt-6 text-xl font-light text-brand-offwhite/80">
                    Connect Mineralware, Energy Links, and logic with precision. Empowering your energy data management.
                </p>
            </div>

            <div id="partner_logos" class="z-10">
                <div class="mb-6 h-[1px] w-24 bg-gradient-to-r from-white/40 to-transparent"></div>
                <p class="mb-6 text-xs font-semibold uppercase tracking-wider text-brand-sage/80">Trusted Integrations
                </p>
                <div class="flex items-center space-x-8">
                    <div class="group flex items-center space-x-3 opacity-70 transition-opacity hover:opacity-100">
                        <div
                            class="flex h-8 w-8 items-center justify-center rounded-full bg-white/10 text-xs font-bold ring-1 ring-white/20">
                            M</div>
                        <span class="text-sm font-medium">Mineralware</span>
                    </div>
                    <div class="group flex items-center space-x-3 opacity-70 transition-opacity hover:opacity-100">
                        <div
                            class="flex h-8 w-8 items-center justify-center rounded-full bg-white/10 text-xs font-bold ring-1 ring-white/20">
                            E</div>
                        <span class="text-sm font-medium">Energy Links</span>
                    </div>
                    <div class="group flex items-center space-x-3 opacity-70 transition-opacity hover:opacity-100">
                        <div
                            class="flex h-8 w-8 items-center justify-center rounded-full bg-white/10 text-xs font-bold ring-1 ring-white/20">
                            Q</div>
                        <span class="text-sm font-medium">QuickBooks</span>
                    </div>
                </div>
            </div>
        </section>

        {{$slot}}
    </main>
</body>

</html>
