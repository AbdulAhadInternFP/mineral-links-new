<x-layout title="Reports">

    <div id="filters_bar" class="flex-shrink-0 bg-white border-b mb-7 border-gray-200 px-6 py-4  rounded-xl shadow">
        <div class="flex items-center justify-between space-x-4">
            <div class="flex items-center space-x-4 flex-1">
                <div class="relative">
                    <input type="text" id="date-range" value="Last 30 Days" readonly
                        class="w-48 h-11 pl-10 pr-4 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-sage text-sm cursor-pointer">
                    <i class="fa-solid fa-calendar absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>

                <select id="entity-filter"
                    class="h-11 px-4 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-sage text-sm w-48">
                    <option>All Entities</option>
                    <option>West Basin Energy</option>
                    <option>Permian Resources</option>
                    <option>Eagle Ford LLC</option>
                    <option>Bakken Minerals</option>
                </select>

                <select id="invoice-status-filter"
                    class="h-11 px-4 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-sage text-sm w-40">
                    <option>All Invoices</option>
                    <option>Matched</option>
                    <option>Mismatched</option>
                    <option>Posted</option>
                </select>

                <select id="reconciliation-filter"
                    class="h-11 px-4 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-sage text-sm w-44">
                    <option>All Reconciliations</option>
                    <option>Reconciled</option>
                    <option>Pending</option>
                    <option>Errors</option>
                </select>

                <div class="relative flex-1 max-w-xs">
                    <input type="text" placeholder="Search invoices or transactions..."
                        class="w-full h-11 pl-10 pr-4 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-sage text-sm">
                    <i class="fa-solid fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
            </div>

            <div class="flex items-center space-x-3">
                <button id="apply-filters"
                    class="bg-brand-terracotta text-white font-semibold px-5 py-2.5 rounded-lg hover:bg-brand-terracotta/90 transition-colors text-sm">
                    Apply
                </button>
                <button id="reset-filters"
                    class="border border-gray-300 text-gray-700 font-semibold px-5 py-2.5 rounded-lg hover:bg-gray-50 transition-colors text-sm">
                    Reset
                </button>
            </div>
        </div>
    </div>
    <section id="kpi_cards_section" class="grid grid-cols-4 gap-6 mb-6">
        <div id="kpi_revenue"
            class=" rounded-xl shadow cursor-pointer ">
            <div class="bg-white rounded-xl p-5 flex items-center justify-between h-full">
                <div>
                    <span class="text-sm font-medium text-gray-500">Total Revenue</span>
                    <div class="flex items-end mt-2">
                        <span class="text-4xl font-bold text-gray-800">$2.4M</span>
                    </div>
                    <span class="text-xs text-status-success mt-1 inline-block">
                        <i class="fa-solid fa-arrow-up"></i> 12.5%
                    </span>
                </div>
                <i class="fa-solid fa-dollar-sign text-3xl text-brand-teal"></i>
            </div>
        </div>

        <div id="kpi_errors"
            class=" rounded-xl shadow cursor-pointer ">
            <div class="bg-white rounded-xl p-5 flex items-center justify-between h-full">
                <div>
                    <span class="text-sm font-medium text-gray-500">Errors</span>
                    <div class="flex items-end mt-2">
                        <span class="text-4xl font-bold text-gray-800">12</span>
                    </div>
                    <span class="text-xs text-status-error mt-1 inline-block">
                        Requires attention
                    </span>
                </div>
                <i class="fa-solid fa-circle-exclamation text-3xl text-status-error"></i>
            </div>
        </div>

        <div id="kpi_reconciled"
            class=" rounded-xl shadow cursor-pointer ">
            <div class="bg-white rounded-xl p-5 flex items-center justify-between h-full">
                <div>
                    <span class="text-sm font-medium text-gray-500">Reconciliations Completed</span>
                    <div class="flex items-end mt-2">
                        <span class="text-4xl font-bold text-gray-800">847</span>
                        <span class="w-2 h-2 rounded-full bg-status-success ml-3 mb-3"></span>
                    </div>
                </div>
                <i class="fa-solid fa-check-double text-3xl text-status-success"></i>
            </div>
        </div>

        <div id="kpi_pending"
            class=" rounded-xl shadow cursor-pointer ">
            <div class="bg-white rounded-xl p-5 flex items-center justify-between h-full">
                <div>
                    <span class="text-sm font-medium text-gray-500">Pending Reconciliations</span>
                    <div class="flex items-end mt-2">
                        <span class="text-4xl font-bold text-gray-800">34</span>
                        <span class="w-2 h-2 rounded-full bg-status-warning ml-3 mb-3"></span>
                    </div>
                </div>
                <i class="fa-solid fa-clock text-3xl text-status-warning"></i>
            </div>
        </div>
    </section>

    <section id="charts_section" class="grid grid-cols-3 gap-6 mb-6">
        <div id="revenue_chart_card" class="bg-white rounded-xl shadow p-5 col-span-2">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Revenue Over Time</h3>
            <div id="revenue-chart" style="height: 300px;"></div>
        </div>

        <div id="errors_chart_card" class="bg-white rounded-xl shadow p-5">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Errors by Type</h3>
            <div id="errors-chart" style="height: 300px;"></div>
        </div>
    </section>

    <section id="reconciliation_chart_section" class="grid grid-cols-3 gap-6 mb-6">
        <div id="reconciliation_status_card" class="bg-white rounded-xl shadow p-5">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Reconciliation Status</h3>
            <div id="reconciliation-chart" style="height: 300px;"></div>
        </div>

        <div id="entity_performance_card"
            class="bg-white rounded-xl shadow p-5 col-span-2">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Entity Performance</h3>
            <div id="entity-chart" style="height: 300px;"></div>
        </div>
    </section>

</x-layout>
<script src="https://cdn.plot.ly/plotly-3.1.1.min.js"></script>
<script>
    window.addEventListener('load', function() {
        try {
            const revenueData = [{
                type: 'scatter',
                mode: 'lines',
                name: 'Revenue',
                x: ['Nov 9', 'Nov 16', 'Nov 23', 'Nov 30', 'Dec 7'],
                y: [1850000, 2100000, 2250000, 2350000, 2400000],
                line: {
                    color: '#2A6F6A',
                    width: 3
                },
                fill: 'tozeroy',
                fillcolor: 'rgba(42, 111, 106, 0.1)'
            }];

            const revenueLayout = {
                title: {
                    text: '',
                    font: {
                        size: 0
                    }
                },
                xaxis: {
                    title: ''
                },
                yaxis: {
                    title: 'Revenue ($)',
                    tickformat: '$,.0f'
                },
                margin: {
                    t: 20,
                    r: 20,
                    b: 40,
                    l: 80
                },
                plot_bgcolor: '#F7F9F7',
                paper_bgcolor: 'white',
                showlegend: false
            };

            Plotly.newPlot('revenue-chart', revenueData, revenueLayout, {
                responsive: true,
                displayModeBar: false,
                displaylogo: false
            });

            const errorsData = [{
                type: 'bar',
                x: ['Data Mismatch', 'Missing Fields', 'Duplicate Entry', 'Format Error', 'Validation'],
                y: [5, 3, 2, 1, 1],
                marker: {
                    color: ['#E57373', '#E57373', '#E57373', '#E57373', '#E57373']
                }
            }];

            const errorsLayout = {
                title: {
                    text: '',
                    font: {
                        size: 0
                    }
                },
                xaxis: {
                    title: ''
                },
                yaxis: {
                    title: 'Count'
                },
                margin: {
                    t: 20,
                    r: 20,
                    b: 80,
                    l: 50
                },
                plot_bgcolor: '#F7F9F7',
                paper_bgcolor: 'white',
                showlegend: false
            };

            Plotly.newPlot('errors-chart', errorsData, errorsLayout, {
                responsive: true,
                displayModeBar: false,
                displaylogo: false
            });

            const reconciliationData = [{
                type: 'pie',
                labels: ['Reconciled', 'Pending', 'Errors'],
                values: [847, 34, 12],
                marker: {
                    colors: ['#4CAF50', '#D6A77A', '#E57373']
                },
                hole: 0.4
            }];

            const reconciliationLayout = {
                title: {
                    text: '',
                    font: {
                        size: 0
                    }
                },
                margin: {
                    t: 20,
                    r: 20,
                    b: 20,
                    l: 20
                },
                plot_bgcolor: '#F7F9F7',
                paper_bgcolor: 'white',
                showlegend: true,
                legend: {
                    orientation: 'v',
                    x: 1,
                    y: 0.5
                }
            };

            Plotly.newPlot('reconciliation-chart', reconciliationData, reconciliationLayout, {
                responsive: true,
                displayModeBar: false,
                displaylogo: false
            });

            const entityData = [{
                type: 'bar',
                name: 'West Basin Energy',
                x: ['Nov', 'Dec'],
                y: [520000, 580000],
                marker: {
                    color: '#2A6F6A'
                }
            }, {
                type: 'bar',
                name: 'Permian Resources',
                x: ['Nov', 'Dec'],
                y: [480000, 510000],
                marker: {
                    color: '#B0C4B1'
                }
            }, {
                type: 'bar',
                name: 'Eagle Ford LLC',
                x: ['Nov', 'Dec'],
                y: [610000, 640000],
                marker: {
                    color: '#D6A77A'
                }
            }, {
                type: 'bar',
                name: 'Bakken Minerals',
                x: ['Nov', 'Dec'],
                y: [590000, 670000],
                marker: {
                    color: '#4A90A4'
                }
            }];

            const entityLayout = {
                title: {
                    text: '',
                    font: {
                        size: 0
                    }
                },
                xaxis: {
                    title: ''
                },
                yaxis: {
                    title: 'Revenue ($)',
                    tickformat: '$,.0f'
                },
                margin: {
                    t: 20,
                    r: 20,
                    b: 40,
                    l: 80
                },
                plot_bgcolor: '#F7F9F7',
                paper_bgcolor: 'white',
                barmode: 'group',
                showlegend: true,
                legend: {
                    orientation: 'h',
                    x: 0,
                    y: -0.2
                }
            };

            Plotly.newPlot('entity-chart', entityData, entityLayout, {
                responsive: true,
                displayModeBar: false,
                displaylogo: false
            });

        } catch (e) {
            console.error('Chart rendering error:', e);
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('sidebar');
        const pinToggle = document.getElementById('pin-toggle');
        const settingsToggle = document.getElementById('settings-toggle');
        const settingsSubmenu = document.getElementById('settings-submenu');

        let isPinned = false;

        function expandSidebar() {
            sidebar.classList.add('expanded');
        }

        function collapseSidebar() {
            if (!isPinned) {
                sidebar.classList.remove('expanded');
                settingsToggle.classList.remove('open');
                settingsSubmenu.style.display = 'none';
            }
        }

        sidebar.addEventListener('mouseenter', expandSidebar);
        sidebar.addEventListener('mouseleave', collapseSidebar);

        pinToggle.addEventListener('click', () => {
            isPinned = !isPinned;
            pinToggle.classList.toggle('text-brand-teal', isPinned);
            if (isPinned) {
                expandSidebar();
            } else {
                collapseSidebar();
            }
        });

        settingsToggle.addEventListener('click', (e) => {
            e.preventDefault();
            if (sidebar.classList.contains('expanded')) {
                settingsToggle.classList.toggle('open');
                settingsSubmenu.style.display = settingsSubmenu.style.display === 'block' ? 'none' :
                    'block';
            }
        });

        const kpiCards = document.querySelectorAll('[id^="kpi_"]');
        kpiCards.forEach(card => {
            card.addEventListener('click', function() {
                console.log('KPI card clicked:', this.id);
            });
        });

        const syncBtn = document.getElementById('sync-data-btn');
        syncBtn.addEventListener('click', function() {
            this.innerHTML = '<i class="fa-solid fa-rotate fa-spin mr-2"></i>Syncing...';
            setTimeout(() => {
                this.innerHTML = '<i class="fa-solid fa-rotate mr-2"></i>Sync Data';
            }, 2000);
        });

        const resetFilters = document.getElementById('reset-filters');
        resetFilters.addEventListener('click', function() {
            document.getElementById('entity-filter').value = 'All Entities';
            document.getElementById('invoice-status-filter').value = 'All Invoices';
            document.getElementById('reconciliation-filter').value = 'All Reconciliations';
            document.querySelector('input[placeholder="Search invoices or transactions..."]').value =
                '';
        });
    });
</script>
