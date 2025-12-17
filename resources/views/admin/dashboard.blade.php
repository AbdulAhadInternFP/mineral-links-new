<x-layout>
    <div id="reconciliation_alert"
        class="flex items-center justify-between bg-white border-l-4 border-brand-terracotta rounded-r-lg shadow-sm px-6 py-4 mb-6">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <i class="fa-solid fa-triangle-exclamation text-brand-terracotta text-xl"></i>
            </div>
            <div class="ml-4">
                <p class="font-medium text-gray-900">Attention Required</p>
                <p class="text-sm text-gray-500">3 line items need reconciliation.</p>
            </div>
        </div>
        <button
            class="px-4 py-2 text-sm font-medium text-white bg-brand-terracotta rounded-xl hover:bg-brand-terracotta/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-terracotta transition-colors">
            Review Items
        </button>
    </div>

    <!-- Stats Row -->
    <section id="stats_row" class="grid grid-cols-4 gap-6 mb-6">
        <div id="stat_card_synced" class=" rounded-xl shadow">
            <div class="bg-white rounded-xl p-4 flex flex-col justify-between h-full">
                <div class="flex items-center justify-between text-gray-500">
                    <span class="text-sm font-medium">Total Products Synced</span>
                    <i class="fa-solid fa-cubes text-brand-teal"></i>
                </div>
                <div class="flex items-end justify-between mt-2">
                    <span class="text-4xl font-bold text-gray-800">12,842</span>
                    <svg class="w-20 h-8" fill="none" stroke="currentColor" viewBox="0 0 80 32">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M1 28 C 10 10, 15 10, 25 20 S 40 30, 50 15 S 60 2, 70 10 S 79 22, 79 22"
                            stroke="#4CAF50" />
                    </svg>
                </div>
            </div>
        </div>
        <div id="stat_card_last_sync" class=" rounded-xl shadow">
            <div class="bg-white rounded-xl p-4 flex flex-col justify-between h-full">
                <span class="text-sm font-medium text-gray-500">Last Sync</span>
                <div class="mt-2">
                    <p class="text-xl font-semibold text-gray-800">12/10/2025 18:45:12</p>
                    <div class="flex items-center text-sm text-gray-500 mt-1">
                        <span class="w-2 h-2 rounded-full bg-status-success mr-2"></span>
                        <span>Successful in 42s</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="stat_card_pending" class=" rounded-xl shadow">
            <div class="bg-white rounded-xl p-4 flex flex-col justify-between h-full">
                <span class="text-sm font-medium text-gray-500">Pending Transactions</span>
                <div class="flex items-end justify-between mt-2">
                    <span class="text-4xl font-bold text-gray-800">8</span>

                </div>
            </div>
        </div>
        <div id="stat_card_errors" class=" rounded-xl shadow">
            <div class="bg-white rounded-xl p-4 flex flex-col justify-between h-full">
                <span class="text-sm font-medium text-gray-500">Sync Errors (24h)</span>
                <div class="flex items-end justify-between mt-2">
                    <span class="text-4xl font-bold text-status-warning">1</span>

                </div>
            </div>
        </div>
    </section>

    <!-- Integration Status Section -->
    <section id="integration_status_section" class="mb-6">
        <h2 class="text-lg font-semibold text-gray-700 mb-4">Integration Status</h2>

        <section id="charts_section" class="grid grid-cols-3 gap-6 mb-6">
            <!-- Revenue & Volume Chart -->
            <div class="col-span-2 bg-white p-6 rounded-xl shadow">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-semibold text-gray-800">Revenue & Volume Trends</h3>
                    <span class="text-xs font-medium text-gray-500 bg-gray-100 px-2.5 py-1 rounded-full">Last 6
                        Months</span>
                </div>
                <div id="revenueChart" class="w-full h-[300px]"></div>
            </div>

            <!-- Sync Health Chart -->
            <div class="bg-white p-6 rounded-xl shadow flex flex-col">
                <h3 class="font-semibold text-gray-800 mb-4">Integration Health</h3>
                <div class="flex-1 flex items-center justify-center relative">
                    <div id="syncChart" class="w-full"></div>
                    <!-- Center Text Overlay -->
                    <div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none">
                        <span class="text-3xl font-bold text-gray-800">98%</span>
                        <span class="text-xs text-gray-500 font-medium uppercase tracking-wide">Success</span>
                    </div>
                </div>
                <div class="mt-4 grid grid-cols-2 gap-4 text-center">
                    <div class="p-2 rounded-lg bg-gray-50">
                        <span class="block text-xs text-gray-500">Synced</span>
                        <span class="block font-semibold text-gray-800">12,842</span>
                    </div>
                    <div class="p-2 rounded-lg bg-gray-50">
                        <span class="block text-xs text-gray-500">Failed</span>
                        <span class="block font-semibold text-status-warning">145</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ApexCharts Script -->
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Revenue & Volume Chart
                const revenueOptions = {
                    series: [{
                        name: 'Net Revenue',
                        type: 'area', // Area chart for Revenue
                        data: [45000, 52000, 38000, 64000, 58000, 72000]
                    }, {
                        name: 'Volume (bbl)',
                        type: 'column', // Bar chart for Volume
                        data: [850, 920, 780, 1100, 950, 1250]
                    }],
                    chart: {
                        height: 300,
                        type: 'line', // Mixed type
                        fontFamily: 'Inter, sans-serif',
                        toolbar: {
                            show: false
                        },
                        zoom: {
                            enabled: false
                        }
                    },
                    stroke: {
                        width: [3, 0],
                        curve: 'smooth'
                    },
                    plotOptions: {
                        bar: {
                            columnWidth: '30%',
                            borderRadius: 4
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    fill: {
                        opacity: [0.1, 1],
                        gradient: {
                            inverseColors: false,
                            shade: 'light',
                            type: "vertical",
                            opacityFrom: 0.85,
                            opacityTo: 0.55,
                            stops: [0, 100, 100, 100]
                        }
                    },
                    colors: ['#2A6F6A', '#D6A77A'], // Brand Teal & Terracotta
                    labels: ['Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    xaxis: {
                        axisBorder: {
                            show: false
                        },
                        axisTicks: {
                            show: false
                        },
                        tooltip: {
                            enabled: false
                        }
                    },
                    yaxis: [{
                        title: {
                            text: 'Revenue ($)',
                            style: {
                                color: '#2A6F6A',
                                fontWeight: 600
                            }
                        },
                        labels: {
                            formatter: (val) => {
                                return "$" + (val / 1000).toFixed(0) + "k"
                            }
                        }
                    }, {
                        opposite: true,
                        title: {
                            text: 'Volume (bbl)',
                            style: {
                                color: '#D6A77A',
                                fontWeight: 600
                            }
                        }
                    }],
                    legend: {
                        position: 'top',
                        horizontalAlign: 'right'
                    },
                    grid: {
                        borderColor: '#f1f1f1',
                        strokeDashArray: 4
                    }
                };

                const revenueChart = new ApexCharts(document.querySelector("#revenueChart"), revenueOptions);
                revenueChart.render();


                // Sync Health Donut Chart
                const syncOptions = {
                    series: [12842, 145, 50], // Synced, Error, Pending
                    labels: ['Synced', 'Errors', 'Pending'],
                    chart: {
                        type: 'donut',
                        height: 240,
                        fontFamily: 'Inter, sans-serif',
                    },
                    colors: ['#4CAF50', '#E57373', '#D6A77A'], // Success, Error, Warning colors
                    plotOptions: {
                        pie: {
                            donut: {
                                size: '75%',
                                labels: {
                                    show: false
                                } // We have custom overlay
                            }
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    legend: {
                        show: false
                    },
                    stroke: {
                        show: false
                    },
                    tooltip: {
                        enabled: true,
                        y: {
                            formatter: function(val) {
                                return val + " items"
                            }
                        }
                    }
                };

                const syncChart = new ApexCharts(document.querySelector("#syncChart"), syncOptions);
                syncChart.render();
            });
        </script>
    </section>

    <!-- Bottom Section -->
    <section id="bottom_section" class="grid grid-cols-5 gap-6 flex-1">
        <div id="recent_activity_card" class="col-span-3 bg-white p-6 rounded-xl shadow">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Recent Activity</h2>
            <ul class="space-y-3">
                <li class="flex items-center justify-between text-sm">
                    <div class="flex items-center">
                        <span class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center mr-3"><i
                                class="fa-solid fa-check text-green-600"></i></span>
                        <div>
                            <p class="font-medium text-gray-700">Sync completed successfully</p>
                            <p class="text-xs text-gray-500">18:45:12</p>
                        </div>
                    </div>
                    <span
                        class="text-xs font-medium bg-status-success/20 text-status-success px-2 py-0.5 rounded-full">Success</span>
                </li>
                <li class="flex items-center justify-between text-sm">
                    <div class="flex items-center">
                        <span class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center mr-3"><i
                                class="fa-solid fa-arrows-rotate text-blue-600"></i></span>
                        <div>
                            <p class="font-medium text-gray-700">Manual sync initiated</p>
                            <p class="text-xs text-gray-500">18:44:30</p>
                        </div>
                    </div>
                    <span class="text-xs font-medium bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full">System</span>
                </li>
                <li class="flex items-center justify-between text-sm">
                    <div class="flex items-center">
                        <span class="w-8 h-8 rounded-full bg-yellow-100 flex items-center justify-center mr-3"><i
                                class="fa-solid fa-triangle-exclamation text-yellow-600"></i></span>
                        <div>
                            <p class="font-medium text-gray-700">QBO connection requires re-authentication</p>
                            <p class="text-xs text-gray-500">17:50:02</p>
                        </div>
                    </div>
                    <span
                        class="text-xs font-medium bg-status-warning/20 text-yellow-800 px-2 py-0.5 rounded-full">Warning</span>
                </li>
                <li class="flex items-center justify-between text-sm">
                    <div class="flex items-center">
                        <span class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center mr-3"><i
                                class="fa-solid fa-right-left text-purple-600"></i></span>
                        <div>
                            <p class="font-medium text-gray-700">Product mapping "SKU-123" updated</p>
                            <p class="text-xs text-gray-500">16:12:45</p>
                        </div>
                    </div>
                    <span class="text-xs font-medium bg-purple-100 text-purple-700 px-2 py-0.5 rounded-full">User
                        Action</span>
                </li>
                <li class="flex items-center justify-between text-sm">
                    <div class="flex items-center">
                        <span class="w-8 h-8 rounded-full bg-red-100 flex items-center justify-center mr-3"><i
                                class="fa-solid fa-xmark text-red-600"></i></span>
                        <div>
                            <p class="font-medium text-gray-700">Sync failed: API timeout on Mineralware</p>
                            <p class="text-xs text-gray-500">15:30:19</p>
                        </div>
                    </div>
                    <span
                        class="text-xs font-medium bg-status-error/20 text-status-error px-2 py-0.5 rounded-full">Error</span>
                </li>
            </ul>
        </div>
        <div id="quick_actions_card" class="col-span-2 bg-white p-6 rounded-xl shadow">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Quick Actions</h2>
            <div class="space-y-3">
                <button
                    class="w-full text-left flex items-center p-3 bg-gray-50 hover:bg-gray-100 rounded-xl transition-colors">
                    <i class="fa-solid fa-arrows-rotate fa-fw w-6 text-brand-teal"></i>
                    <span class="ml-3 font-medium text-gray-700">Manual Sync</span>
                </button>
                <button
                    class="w-full text-left flex items-center p-3 bg-gray-50 hover:bg-gray-100 rounded-xl transition-colors">
                    <i class="fa-solid fa-bug fa-fw w-6 text-brand-teal"></i>
                    <span class="ml-3 font-medium text-gray-700">View Errors</span>
                </button>
                <button
                    class="w-full text-left flex items-center p-3 bg-gray-50 hover:bg-gray-100 rounded-xl transition-colors">
                    <i class="fa-solid fa-right-left fa-fw w-6 text-brand-teal"></i>
                    <span class="ml-3 font-medium text-gray-700">Product Mapping</span>
                </button>
            </div>
        </div>
    </section>

</x-layout>
