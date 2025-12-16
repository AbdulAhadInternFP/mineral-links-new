@props(['title' => 'Dashboard'])

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=DM+Sans:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" />
    <script>
        window.FontAwesomeConfig = {
            autoReplaceSvg: 'nest'
        };
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <style>
        /* ::-webkit-scrollbar {
            display: none;
        }

        .sidebar {
            width: 64px;
            transition: width 200ms ease-in-out;
        }

        .sidebar.expanded {
            width: 240px;
        }

        .sidebar .nav-text,
        .sidebar .submenu {
            opacity: 0;
            transition: opacity 100ms ease-in-out;
        }

        .sidebar.expanded .nav-text,
        .sidebar.expanded .submenu {
            opacity: 1;
            transition-delay: 100ms;
        }

        .sidebar .fa-chevron-down {
            transition: transform 200ms ease-in-out;
        }

        .sidebar.expanded .settings-toggle.open .fa-chevron-down {
            transform: rotate(180deg);
        } */



::-webkit-scrollbar { display: none; }

.sidebar {
    width: 64px;
    transition: width 200ms ease-in-out;
    position: relative;
    z-index: 30;
}

/* Hover overlay */
.sidebar.hover-expanded {
    position: absolute;
    top: 0;
    left: 0;
    width: 240px;
}

/* Pinned sidebar */
.sidebar.pinned {
    position: relative;
    width: 240px;
}

/* Text visibility */
.sidebar .nav-text,
.sidebar .submenu {
    opacity: 0;
    transition: opacity 120ms ease-in-out;
}

.sidebar.hover-expanded .nav-text,
.sidebar.pinned .nav-text,
.sidebar.hover-expanded .submenu,
.sidebar.pinned .submenu {
    opacity: 1;
}

/* Chevron rotation */
.fa-chevron-down {
    transition: transform 200ms ease;
}
.settings-toggle.open .fa-chevron-down {
    transform: rotate(180deg);
}

#main_content {
    margin-left: 5rem;
}



.sidebar {
    width: 64px;
    transition: width 200ms ease-in-out;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 40;
}

.sidebar.hover-expanded,
.sidebar.pinned {
    width: 240px;
}

    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['DM Sans', 'sans-serif'],
                    },
                    colors: {
                        'brand-teal': '#2A6F6A',
                        'brand-sage': '#B0C4B1',
                        'brand-terracotta': '#D6A77A',
                        'brand-offwhite': '#F7F9F7',
                        'status-success': '#4CAF50',
                        'status-warning': '#D6A77A',
                        'status-error': '#E57373',
                        'status-neutral': '#B0C4B1',
                    },
                    boxShadow: {
                        'shadow': 'rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px',
                    }
                }
            }
        }
    </script>
</head>

<body class="font-sans bg-brand-offwhite text-gray-800 antialiased">
    <div id="dashboard_layout" class="flex h-screen w-full overflow-hidden">

        <!-- Collapsible Sidebar -->
        <aside id="sidebar" class="sidebar h-full bg-white border-r border-gray-200 flex flex-col flex-shrink-0 z-20">
            <div class="flex-shrink-0 relative flex items-center justify-center h-16 border-b border-gray-200 px-4">
                <div id="logo-mark" class="w-8 h-8 flex-shrink-0">
                    <svg class="w-full h-full" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32 0L64 32L32 64L0 32L32 0Z" fill="#D6A77A" />
                        <path d="M32 8L56 32L32 56L8 32L32 8Z" fill="#F7F9F7" />
                        <path d="M32 16L48 32L32 48L16 32L32 16Z" fill="#2A6F6A" />
                    </svg>
                </div>
                <span class="nav-text ml-3 font-heading font-bold text-xl whitespace-nowrap">Mineral Link</span>
                <button id="pin-toggle"
                    class="w-full h-full absolute top-0 right-0 transform translate-x-1/2 flex items-center text-brand-terracotta justify-center hover:text-brand-teal focus:outline-none transition-transform duration-300">
                    <i
                        class="ri-bar-chart-horizontal-line bg-white shadow rounded-full w-8 h-8 flex items-center justify-center text-lg"></i>
                </button>
            </div>

            <nav id="main_nav" class="flex-grow pt-4 overflow-x-hidden overflow-y-auto">

                @php
                    function navActive($routes)
                    {
                        return request()->routeIs($routes)
                            ? 'border-brand-teal bg-brand-teal/10 text-brand-teal'
                            : 'border-transparent text-gray-600';
                    }

                    function iconActive($routes)
                    {
                        return request()->routeIs($routes) ? 'text-brand-teal' : 'text-gray-500';
                    }

                    $settingsRoutes = ['admin.product.mapping', 'admin.integration'];
                @endphp

                <ul class="space-y-1">

                    {{-- Dashboard --}}
                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="flex items-center h-12 rounded-xl mx-2 border-l-4 hover:bg-gray-100 {{ navActive('admin.dashboard') }}">
                            <span class="w-12 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-grip fa-fw {{ iconActive('admin.dashboard') }}"></i>
                            </span>
                            <span class="nav-text text-sm font-medium whitespace-nowrap">Dashboard</span>
                        </a>
                    </li>

                    {{-- Products --}}
                    {{-- <li>
                        <a href="{{ route('admin.product') }}"
                            class="flex items-center h-12 rounded-xl mx-2 border-l-4 hover:bg-gray-100 {{ navActive('admin.product') }}">
                            <span class="w-12 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-box fa-fw text-xl {{ iconActive('admin.product') }}"></i>
                            </span>
                            <span class="nav-text text-sm font-medium whitespace-nowrap">Products</span>
                        </a>
                    </li> --}}

                    {{-- Invoices --}}
                    <li>
                        <a href="{{ route('admin.invoices') }}"
                            class="flex items-center h-12 rounded-xl mx-2 border-l-4 hover:bg-gray-100 {{ navActive('admin.invoices') }}">
                            <span class="w-12 flex items-center justify-center flex-shrink-0">
                                <i class="ri-receipt-line text-xl {{ iconActive('admin.invoices') }}"></i>
                            </span>
                            <span class="nav-text text-sm font-medium whitespace-nowrap">Transaction</span>
                        </a>
                    </li>

                    {{-- Reports --}}
                    {{-- <li>
                        <a href="{{ route('admin.reports') }}"
                            class="flex items-center h-12 rounded-xl mx-2 border-l-4 hover:bg-gray-100 {{ navActive('admin.reports') }}">
                            <span class="w-12 flex items-center justify-center flex-shrink-0">
                                <i class="ri-file-chart-2-line text-xl {{ iconActive('admin.reports') }}"></i>
                            </span>
                            <span class="nav-text text-sm font-medium whitespace-nowrap">Reports</span>
                        </a>
                    </li> --}}

                    {{-- Settings --}}
                    <li>
                            <a href="#" id="settings-toggle"
   class="settings-toggle flex items-center justify-between h-12 rounded-xl mx-2 border-l-4 hover:bg-gray-100">


                        {{-- <a href="#" id="settings-toggle"
                            class="flex items-center justify-between h-12 rounded-xl mx-2 border-l-4 hover:bg-gray-100
               {{ navActive($settingsRoutes) }}"> --}}
                        <div class="flex items-center">
                                <span class="w-12 flex items-center justify-center flex-shrink-0">
                                    <i class="fa-solid fa-gear fa-fw text-xl {{ iconActive($settingsRoutes) }}"></i>
                                </span>
                                <span class="nav-text text-sm font-medium whitespace-nowrap">Settings</span>
                            </div>
                            <i class="fa-solid fa-chevron-down fa-xs mr-6 nav-text"></i>
                        </a>

                        <ul id="settings-submenu"
                            class="submenu mt-1 pl-10 pr-2 {{ request()->routeIs($settingsRoutes) ? '' : 'hidden' }}">

                            <li>
                                <a href="{{ route('admin.product.mapping') }}"
                                    class="flex items-center h-9 
                       {{ request()->routeIs('admin.product.mapping') ? 'text-brand-teal font-medium' : 'text-gray-500' }}">
                                    <span class="nav-text text-sm whitespace-nowrap">Product Mapping</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.integration') }}"
                                    class="flex items-center h-9 
                       {{ request()->routeIs('admin.integration') ? 'text-brand-teal font-medium' : 'text-gray-500' }}">
                                    <span class="nav-text text-sm whitespace-nowrap">Integrations</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>

            <div id="sidebar_footer" class="flex-shrink-0 py-4">
                <a href="{{route('login')}}"
                    class="flex items-center h-12 text-gray-600 hover:bg-gray-100 rounded-xl mx-2 border-l-4 border-transparent">
                    <span class="w-12 flex items-center justify-center flex-shrink-0"><i
                            class="fa-solid fa-right-from-bracket fa-fw"></i></span>
                    <span class="nav-text text-sm font-medium whitespace-nowrap">Logout</span>
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main id="main_content" class="flex-1 flex flex-col p-6 overflow-y-auto h-full w-full">
            <!-- Top Bar -->
            {{-- <header id="main_header" class="flex-shrink-0 mb-6 bg-white rounded-xl shadow px-6 py-4">
                <div class="flex items-center justify-between">
                    <h1 class="text-3xl font-bold font-heading text-gray-900">{{ $title ?? 'Dashboard' }}</h1>
                    <div class="flex items-center space-x-6">
                        <!-- Notification Bell -->
                        <div class="relative">

                            
                            
                            
                            <button id="notification-btn"
                                class="relative p-2 text-gray-400 hover:text-brand-teal transition-colors focus:outline-none">
                               
                                <i class="fa-solid fa-bell fa-lg"></i>
                                <span
                                    class="absolute top-1 right-1 block w-2.5 h-2.5 rounded-full bg-red-500 ring-2 ring-white"></span>
                            </button>

                            <!-- Notification Dropdown -->
                            <div id="notification-dropdown"
                                class="absolute right-0   w-96 origin-top-right bg-white rounded-xl shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden z-50 transform transition-all duration-200 opacity-0 scale-95"
                                role="menu">
                                <div
                                    class="p-4 border-b bg-brand-terracotta/10 border-gray-100 flex items-center justify-between">
                                    <h3 class="text-sm font-semibold text-brand-terracotta">Notifications</h3>
                                    <span
                                        class="text-xs font-medium text-brand-teal bg-brand-teal/10 px-2 py-0.5 rounded-full">3
                                        New</span>
                                </div>
                                <div class="max-h-96 overflow-y-auto">
                                    <a href="#"
                                        class="block p-4 hover:bg-gray-50 transition-colors border-b border-gray-50 last:border-0">
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <span
                                                    class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-blue-600">
                                                    <i class="fa-solid fa-sync text-xs"></i>
                                                </span>
                                            </div>
                                            <div class="ml-3 w-0 flex-1">
                                                <p class="text-sm font-medium text-gray-900">Sync Completed</p>
                                                <p class="text-xs text-gray-500 mt-1">Daily product sync finished
                                                    successfully.</p>
                                                <p class="text-xs text-gray-400 mt-1">5 mins ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#"
                                        class="block p-4 hover:bg-gray-50 transition-colors border-b border-gray-50 last:border-0">
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <span
                                                    class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-yellow-100 text-yellow-600">
                                                    <i class="fa-solid fa-exclamation-triangle text-xs"></i>
                                                </span>
                                            </div>
                                            <div class="ml-3 w-0 flex-1">
                                                <p class="text-sm font-medium text-gray-900">Reconciliation Needed</p>
                                                <p class="text-xs text-gray-500 mt-1">3 items require your attention.
                                                </p>
                                                <p class="text-xs text-gray-400 mt-1">1 hour ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="block p-4 hover:bg-gray-50 transition-colors">
                                        <div class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <span
                                                    class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-green-100 text-green-600">
                                                    <i class="fa-solid fa-check text-xs"></i>
                                                </span>
                                            </div>
                                            <div class="ml-3 w-0 flex-1">
                                                <p class="text-sm font-medium text-gray-900">System Update</p>
                                                <p class="text-xs text-gray-500 mt-1">Mineral Link core modules
                                                    updated.</p>
                                                <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-4 border-t border-gray-100 text-center">
                                    <a href="#"
                                        class="text-sm font-medium text-brand-teal hover:text-brand-dark-teal">View all
                                        notifications</a>
                                </div>
                            </div>
                        </div>

                        <!-- User Profile -->
                        <div class="relative">
                            <button class="flex items-center space-x-2 focus:outline-none">
                                <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-1.jpg"
                                    alt="User Avatar"
                                    class="w-10 h-10 rounded-full border-2 border-white shadow ring-1 ring-gray-100">
                            </button>
                        </div>
                    </div>
                </div>
            </header> --}}


    <header id="main_header" class="flex-shrink-0 mb-6 bg-white rounded-xl shadow px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Page Title -->
            <h1 class="text-3xl font-bold font-heading text-gray-900">{{ $title ?? 'Dashboard' }}</h1>

            <!-- Right Side: RisingPhoenix + Bell + User -->
            <div class="flex items-center space-x-6">
                
                <!-- RisingPhoenix + Notification Bell -->
                <div class="relative flex items-center space-x-4">
                    <!-- RisingPhoenix Text -->
                    <select 
                        name="fund" 
                        id="fund" 
                        class="min-w-[130px] border border-gray-300 bg-white text-gray-800 rounded px-3 py-2 focus:outline-none focus:ring-2"
                    >
                        <option value="RisingPhoenix" selected>Rising Phoenix</option>
                        <option value="Fund1">Fund 1</option>
                        <option value="Fund2">Fund 2</option>
                        <option value="Fund3">Fund 3</option>
                        <option value="Fund4">Fund 4</option>
                    </select>


                    <!-- Notification Bell -->
                    <div class="relative">
                        <button id="notification-btn"
                            class="relative p-2 text-gray-400 hover:text-brand-teal transition-colors focus:outline-none">
                            <i class="fa-solid fa-bell fa-lg"></i>
                            <span
                                class="absolute top-1 right-1 block w-2.5 h-2.5 rounded-full bg-red-500 ring-2 ring-white"></span>
                        </button>

                        <!-- Notification Dropdown -->
                        <div id="notification-dropdown"
                            class="absolute right-0 w-96 origin-top-right bg-white rounded-xl shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden z-50 transform transition-all duration-200 opacity-0 scale-95"
                            role="menu">
                            <div
                                class="p-4 border-b bg-brand-terracotta/10 border-gray-100 flex items-center justify-between">
                                <h3 class="text-sm font-semibold text-brand-terracotta">Notifications</h3>
                                <span
                                    class="text-xs font-medium text-brand-teal bg-brand-teal/10 px-2 py-0.5 rounded-full">3
                                    New</span>
                            </div>
                            <div class="max-h-96 overflow-y-auto">
                                <a href="#"
                                    class="block p-4 hover:bg-gray-50 transition-colors border-b border-gray-50 last:border-0">
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <span
                                                class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-blue-600">
                                                <i class="fa-solid fa-sync text-xs"></i>
                                            </span>
                                        </div>
                                        <div class="ml-3 w-0 flex-1">
                                            <p class="text-sm font-medium text-gray-900">Sync Completed</p>
                                            <p class="text-xs text-gray-500 mt-1">Daily product sync finished successfully.</p>
                                            <p class="text-xs text-gray-400 mt-1">5 mins ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#"
                                    class="block p-4 hover:bg-gray-50 transition-colors border-b border-gray-50 last:border-0">
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <span
                                                class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-yellow-100 text-yellow-600">
                                                <i class="fa-solid fa-exclamation-triangle text-xs"></i>
                                            </span>
                                        </div>
                                        <div class="ml-3 w-0 flex-1">
                                            <p class="text-sm font-medium text-gray-900">Reconciliation Needed</p>
                                            <p class="text-xs text-gray-500 mt-1">3 items require your attention.</p>
                                            <p class="text-xs text-gray-400 mt-1">1 hour ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="block p-4 hover:bg-gray-50 transition-colors">
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <span
                                                class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-green-100 text-green-600">
                                                <i class="fa-solid fa-check text-xs"></i>
                                            </span>
                                        </div>
                                        <div class="ml-3 w-0 flex-1">
                                            <p class="text-sm font-medium text-gray-900">System Update</p>
                                            <p class="text-xs text-gray-500 mt-1">Mineral Link core modules updated.</p>
                                            <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-4 border-t border-gray-100 text-center">
                                <a href="#"
                                    class="text-sm font-medium text-brand-teal hover:text-brand-dark-teal">View all
                                    notifications</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- User Profile -->
                <div class="relative">
                    <button class="flex items-center space-x-2 focus:outline-none">
                        <img src="https://storage.googleapis.com/uxpilot-auth.appspot.com/avatars/avatar-1.jpg"
                            alt="User Avatar"
                            class="w-10 h-10 rounded-full border-2 border-white shadow ring-1 ring-gray-100">
                    </button>
                </div>
            </div>
        </div>
    </header>


            <div id="content">
                {{ $slot }}
            </div>
        </main>
    </div>


    <script>
//         document.addEventListener('DOMContentLoaded', function() {
//             const sidebar = document.getElementById('sidebar');
//             const pinToggle = document.getElementById('pin-toggle');
//             const settingsToggle = document.getElementById('settings-toggle');
//             const settingsSubmenu = document.getElementById('settings-submenu');

//             let isPinned = false;

//             function expandSidebar() {
//                 sidebar.classList.add('expanded');
//             }

//             function collapseSidebar() {
//                 if (!isPinned) {
//                     sidebar.classList.remove('expanded');
//                     settingsToggle.classList.remove('open');
//                     settingsSubmenu.style.display = 'none';
//                 }
//             }

//             sidebar.addEventListener('mouseenter', expandSidebar);
//             sidebar.addEventListener('mouseleave', collapseSidebar);

//             pinToggle.addEventListener('click', () => {
//                 isPinned = !isPinned;
//                 pinToggle.classList.toggle('text-brand-teal', isPinned);
//                 if (isPinned) {
//                     expandSidebar();
//                 } else {
//                     collapseSidebar();
//                 }
//             });

//             settingsToggle.addEventListener('click', (e) => {
//                 e.preventDefault();
//                 if (sidebar.classList.contains('expanded')) {
//                     settingsToggle.classList.toggle('open');
//                     settingsSubmenu.style.display = settingsSubmenu.style.display === 'block' ? 'none' :
//                         'block';
//                 }
//             });
//         });



document.addEventListener('DOMContentLoaded', function() {

    // Notification Logic
    const notificationBtn = document.getElementById('notification-btn');
    const notificationDropdown = document.getElementById('notification-dropdown');

    if (notificationBtn && notificationDropdown) {
        notificationBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            if (notificationDropdown.classList.contains('hidden')) {
                notificationDropdown.classList.remove('hidden');
                // Small delay to allow display:block to apply before opacity transition
                setTimeout(() => {
                    notificationDropdown.classList.remove('opacity-0', 'scale-95');
                    notificationDropdown.classList.add('opacity-100', 'scale-100');
                }, 10);
            } else {
                closeDropdown();
            }
        });

        document.addEventListener('click', function(e) {
            if (!notificationDropdown.contains(e.target) && !notificationBtn.contains(e.target)) {
                closeDropdown();
            }
        });

        function closeDropdown() {
            notificationDropdown.classList.remove('opacity-100', 'scale-100');
            notificationDropdown.classList.add('opacity-0', 'scale-95');
            setTimeout(() => {
                notificationDropdown.classList.add('hidden');
            }, 200);
        }
    }
});






document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.getElementById('sidebar');
    const navArea = document.getElementById('main_nav');
    const pinToggle = document.getElementById('pin-toggle');
    const settingsToggle = document.getElementById('settings-toggle');
    
    const settingsSubmenu = document.getElementById('settings-submenu');  
    const content = document.getElementById('main_content');  

    let isPinned = false;

    /* Hover ONLY on menu area */
    navArea.addEventListener('mouseenter', () => {
        if (!isPinned) {
            sidebar.classList.add('hover-expanded');
        }
    });

    navArea.addEventListener('mouseleave', () => {
        if (!isPinned) {
            sidebar.classList.remove('hover-expanded');
            settingsSubmenu.style.display = 'none';
            settingsToggle.classList.remove('open');
        }
    });

    /* Pin toggle (NO CONTENT MOVE) */
    pinToggle.addEventListener('click', (e) => {
        e.stopPropagation();
        isPinned = !isPinned;
        content.style.marginLeft = '0px';
        sidebar.classList.toggle('pinned', isPinned);
        pinToggle.classList.toggle('text-brand-teal', isPinned);

        if (!isPinned) {
            content.style.marginLeft = '5rem';
            settingsSubmenu.style.display = 'none';
            settingsToggle.classList.remove('open');
        }
    });

    /* Settings submenu */
    settingsToggle.addEventListener('click', (e) => {
        console.log('Content',content)
        e.preventDefault();
        if (sidebar.classList.contains('hover-expanded') || sidebar.classList.contains('pinned')) {
            settingsToggle.classList.toggle('open');
            settingsSubmenu.style.display =
                settingsSubmenu.style.display === 'block' ? 'none' : 'block';
           
        }
    });
});



    </script>
</body>

</html>
