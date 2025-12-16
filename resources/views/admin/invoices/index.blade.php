<x-layout title="Transaction">
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

    <section id="tabs_and_actions_row" class="bg-white rounded-xl shadow px-6 py-3 mb-6">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <button
                    class="filter-tab active flex items-center space-x-2 px-5 py-2.5 rounded-full text-sm font-semibold bg-brand-teal text-white transition-colors"
                    data-filter="all">
                    <span>All</span>
                    <span
                        class="inline-flex items-center justify-center px-2 py-0.5 text-xs font-bold bg-white/20 text-white rounded-full">24</span>
                </button>
                <button
                    class="filter-tab flex items-center space-x-2 px-5 py-2.5 rounded-full text-sm font-semibold bg-transparent text-gray-600 hover:bg-gray-100 transition-colors"
                    data-filter="matched">
                    <span>Matched</span>
                    <span
                        class="inline-flex items-center justify-center px-2 py-0.5 text-xs font-bold bg-brand-teal/20 text-brand-teal rounded-full">21</span>
                </button>
                <button
                    class="filter-tab flex items-center space-x-2 px-5 py-2.5 rounded-full text-sm font-semibold bg-transparent text-gray-600 hover:bg-gray-100 transition-colors"
                    data-filter="mismatched">
                    <span>Mismatched</span>
                    <span
                        class="inline-flex items-center justify-center px-2 py-0.5 text-xs font-bold bg-brand-teal/20 text-brand-teal rounded-full">3</span>
                </button>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <input type="text" placeholder="Search invoices..."
                        class="w-60 h-11 pl-10 pr-4 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-sage text-sm">
                    <i class="fa-solid fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
                <button id="sync-data-btn"
                    class="bg-brand-terracotta text-white font-semibold px-5 py-2.5 rounded-lg hover:bg-brand-terracotta/90 transition-colors text-sm">
                    <i class="fa-solid fa-rotate fa-fw mr-2"></i>Sync Data
                </button>
            </div>
        </div>
    </section>

    <section id="invoices_table_section"
        class="bg-white rounded-xl shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200 sticky top-0">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            <div class="flex items-center cursor-pointer">
                                Invoice #
                                <i class="fa-solid fa-sort ml-2 text-gray-400"></i>
                            </div>
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Owner / Entity
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Product
                        </th>
                        <th class="px-6 py-3 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Volume
                        </th>
                        <th class="px-6 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Amount
                        </th>
                        <th class="px-6 py-3 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody id="invoices-table-body" class="divide-y divide-gray-200">
                    <!-- Invoice INV-2024-001 Line Items -->
                    <tr class="hover:bg-brand-sage/10 transition-colors invoice-row" data-status="matched"
                        data-invoice="INV-2024-001">
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">INV-2024-001</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm font-medium text-gray-900">Permian Basin Energy LLC</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-gray-900">WTI Crude Oil</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="text-sm font-mono text-gray-700">58.6 bbl</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <span class="text-sm font-semibold text-gray-900">$4,250.00</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-status-success text-white">Matched</span>
                        </td>
                    </tr>
                    <tr class="bg-brand-sage/5 hover:bg-brand-sage/10 transition-colors invoice-row"
                        data-status="matched" data-invoice="INV-2024-001">
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">INV-2024-001</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">Permian Basin Energy LLC</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-gray-900">Natural Gas</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="text-sm font-mono text-gray-700">135.3 mcf</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <span class="text-sm font-semibold text-gray-900">$3,890.50</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-status-success text-white">Matched</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-brand-sage/10 transition-colors invoice-row" data-status="matched"
                        data-invoice="INV-2024-001">
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">INV-2024-001</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">Permian Basin Energy LLC</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-gray-900">NGL - Condensate</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="text-sm font-mono text-gray-700">43.3 bbl</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <span class="text-sm font-semibold text-gray-900">$1,245.00</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-status-success text-white">Matched</span>
                        </td>
                    </tr>

                    <!-- Invoice INV-2024-002 Line Items -->
                    <tr class="bg-brand-sage/5 hover:bg-brand-sage/10 transition-colors invoice-row"
                        data-status="matched" data-invoice="INV-2024-002">
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">INV-2024-002</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm font-medium text-gray-900">Eagle Ford Minerals Co</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-gray-900">WTI Crude Oil</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="text-sm font-mono text-gray-700">72.4 bbl</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <span class="text-sm font-semibold text-gray-900">$5,248.00</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-status-success text-white">Matched</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-brand-sage/10 transition-colors invoice-row" data-status="matched"
                        data-invoice="INV-2024-002">
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">INV-2024-002</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">Eagle Ford Minerals Co</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-gray-900">Natural Gas</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="text-sm font-mono text-gray-700">89.7 mcf</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <span class="text-sm font-semibold text-gray-900">$2,580.30</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-status-success text-white">Matched</span>
                        </td>
                    </tr>

                    <!-- Invoice INV-2024-003 Line Items (Mismatched) -->
                    <tr class="hover:bg-brand-sage/10 transition-colors invoice-row" data-status="mismatched"
                        data-invoice="INV-2024-003">
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">INV-2024-003</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm font-medium text-gray-900">Bakken Resources Inc</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-gray-900">WTI Crude Oil</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="text-sm font-mono text-gray-700">58.6 bbl</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <span class="text-sm font-semibold text-gray-900">$4,250.00</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-status-success text-white">Matched</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-brand-sage/10 transition-colors invoice-row" data-status="mismatched"
                        data-invoice="INV-2024-003">
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">INV-2024-003</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">Bakken Resources Inc</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-gray-900">Natural Gas</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="text-sm font-mono text-gray-700">135.3 mcf</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <span class="text-sm font-semibold text-gray-900">$3,890.50</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-status-success text-white">Matched</span>
                        </td>
                    </tr>
                    <tr class="bg-[#FFF7EF] hover:bg-[#F8EBD9] transition-colors invoice-row" data-status="mismatched"
                        data-invoice="INV-2024-003">
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">INV-2024-003</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">Bakken Resources Inc</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <span class="text-sm text-gray-900">NGL - Condensate</span>
                                <i class="fa-solid fa-triangle-exclamation text-[#D6A77A] ml-2"
                                    title="Missing on EnergyLink"></i>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="text-sm font-mono text-gray-700">43.3 bbl</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <span class="text-sm font-semibold text-gray-900">$1,245.00</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-[#D6A77A] text-white">Mismatched</span>
                        </td>
                    </tr>

                
                    <!-- Invoice INV-2024-005 Line Items -->
                    <tr class="bg-brand-sage/5 hover:bg-brand-sage/10 transition-colors invoice-row"
                        data-status="matched" data-invoice="INV-2024-005">
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">INV-2024-005</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm font-medium text-gray-900">Haynesville Gas Holdings</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-gray-900">Natural Gas</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="text-sm font-mono text-gray-700">312.5 mcf</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <span class="text-sm font-semibold text-gray-900">$9,000.00</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-status-success text-white">Matched</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-brand-sage/10 transition-colors invoice-row" data-status="matched"
                        data-invoice="INV-2024-005">
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">INV-2024-005</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">Haynesville Gas Holdings</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-gray-900">Natural Gas - Dry</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="text-sm font-mono text-gray-700">187.2 mcf</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <span class="text-sm font-semibold text-gray-900">$5,390.00</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-status-success text-white">Matched</span>
                        </td>
                    </tr>

                    <!-- Invoice INV-2024-006 Line Items -->
                    <tr class="bg-brand-sage/5 hover:bg-brand-sage/10 transition-colors invoice-row"
                        data-status="matched" data-invoice="INV-2024-006">
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">INV-2024-006</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm font-medium text-gray-900">Delaware Basin Operators</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-gray-900">WTI Crude Oil</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="text-sm font-mono text-gray-700">125.8 bbl</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <span class="text-sm font-semibold text-gray-900">$9,120.50</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-status-success text-white">Matched</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-brand-sage/10 transition-colors invoice-row" data-status="matched"
                        data-invoice="INV-2024-006">
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">INV-2024-006</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">Delaware Basin Operators</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-gray-900">Natural Gas</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="text-sm font-mono text-gray-700">78.4 mcf</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <span class="text-sm font-semibold text-gray-900">$2,257.00</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-status-success text-white">Matched</span>
                        </td>
                    </tr>
                    <tr class="bg-brand-sage/5 hover:bg-brand-sage/10 transition-colors invoice-row"
                        data-status="matched" data-invoice="INV-2024-006">
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">INV-2024-006</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm font-semibold text-brand-teal">Delaware Basin Operators</span>
                        </td>
                        <td class="px-6 py-4">
                            <span class="text-sm text-gray-900">NGL - Propane</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span class="text-sm font-mono text-gray-700">28.3 bbl</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <span class="text-sm font-semibold text-gray-900">$816.50</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-status-success text-white">Matched</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination Footer -->
        <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <span class="text-sm text-gray-600">Show</span>
                <select id="rows-per-page"
                    class="border border-gray-300 rounded-lg text-sm px-2 py-1 focus:outline-none focus:border-brand-teal">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="100">100</option>
                </select>
                <span class="text-sm text-gray-600">entries</span>
            </div>
            <div class="text-sm text-gray-600">
                Showing <span id="start-index">1</span> to <span id="end-index">10</span> of <span
                    id="total-entries">15</span> entries
            </div>
            <div class="flex items-center space-x-1">
                <button id="prev-page"
                    class="px-3 py-1.5 rounded-lg border border-gray-300 text-sm text-gray-600 hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                    Previous
                </button>
                <div id="pagination-numbers" class="flex items-center space-x-1">
                    <span class="px-3 py-1.5 rounded-lg bg-brand-teal text-white text-sm font-medium">1</span>
                    <span
                        class="px-3 py-1.5 rounded-lg border border-gray-300 text-sm text-gray-600 hover:bg-gray-50 cursor-pointer">2</span>
                </div>
                <button id="next-page"
                    class="px-3 py-1.5 rounded-lg border border-gray-300 text-sm text-gray-600 hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                    Next
                </button>
            </div>
        </div>

        <!-- Footer with Post to QB button -->
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex items-center justify-between">
            <div class="text-sm text-gray-600">
                <span class="font-medium">12</span> matched line items ready to post
            </div>
            <button id="post-to-qb-btn"
                class="bg-brand-teal text-white font-semibold px-6 py-2.5 rounded-lg hover:bg-brand-teal/90 transition-colors text-sm flex items-center">
                <img src="{{ asset('assets/images/qbo.svg') }}" alt="QBO" class="w-5 h-5 mr-2">
                Post to QuickBooks
            </button>
        </div>
    </section>

</x-layout>

<div id="view-modal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-[0_8px_32px_rgba(0,0,0,0.12)] w-[520px] max-h-[90vh] overflow-hidden">
        <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200">
            <div class="flex items-center space-x-3">
                <h3 class="text-xl font-semibold text-gray-900" id="view-modal-title">Line Item Details</h3>
            </div>
            <button class="modal-close text-gray-400 hover:text-gray-600 transition-colors">
                <i class="fa-solid fa-xmark fa-lg"></i>
            </button>
        </div>
        <div class="px-6 py-5 space-y-4">
            <div class="flex items-center justify-between py-3 border-b border-gray-100">
                <span class="text-sm font-medium text-gray-500">Invoice #</span>
                <span class="text-sm font-semibold text-brand-teal" id="view-modal-invoice">INV-2024-001</span>
            </div>
            <div class="flex items-center justify-between py-3 border-b border-gray-100">
                <span class="text-sm font-medium text-gray-500">Owner / Entity</span>
                <span class="text-sm font-semibold text-gray-900" id="view-modal-entity">Permian Basin Energy
                    LLC</span>
            </div>
            <div class="flex items-center justify-between py-3 border-b border-gray-100">
                <span class="text-sm font-medium text-gray-500">Product</span>
                <span class="text-sm font-semibold text-gray-900" id="view-modal-product">WTI Crude Oil</span>
            </div>
            <div class="flex items-center justify-between py-3 border-b border-gray-100">
                <span class="text-sm font-medium text-gray-500">Volume</span>
                <span class="text-sm font-mono text-gray-900" id="view-modal-volume">58.6 bbl</span>
            </div>
            <div class="flex items-center justify-between py-3 border-b border-gray-100">
                <span class="text-sm font-medium text-gray-500">Amount</span>
                <span class="text-lg font-semibold font-mono text-gray-900" id="view-modal-amount">$4,250.00</span>
            </div>
            <div class="flex items-center justify-between py-3">
                <span class="text-sm font-medium text-gray-500">Status</span>
                <span id="view-modal-status"
                    class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-status-success text-white">Matched</span>
            </div>
        </div>
        <div class="flex items-center justify-end space-x-3 px-6 py-4 bg-gray-50 border-t border-gray-200">
            <button
                class="modal-close px-4 py-2 text-gray-700 hover:text-gray-900 transition-colors text-sm font-medium">Close</button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterTabs = document.querySelectorAll('.filter-tab');
        const invoiceRows = document.querySelectorAll('.invoice-row');
        const syncDataBtn = document.getElementById('sync-data-btn');
        const postToQbBtn = document.getElementById('post-to-qb-btn');
        const viewModal = document.getElementById('view-modal');

        // Filter tabs functionality
        filterTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                filterTabs.forEach(t => {
                    t.classList.remove('active', 'bg-brand-teal', 'text-white');
                    t.classList.add('bg-transparent', 'text-gray-600');
                });
                this.classList.add('active', 'bg-brand-teal', 'text-white');
                this.classList.remove('bg-transparent', 'text-gray-600');

                const filter = this.dataset.filter;
                invoiceRows.forEach(row => {
                    if (filter === 'all') {
                        row.style.display = '';
                    } else {
                        row.style.display = row.dataset.status === filter ? '' : 'none';
                    }
                });
            });
        });

        // Sync data button
        syncDataBtn.addEventListener('click', function() {
            const icon = this.querySelector('i');
            icon.classList.add('fa-spin');
            this.disabled = true;

            setTimeout(() => {
                icon.classList.remove('fa-spin');
                this.disabled = false;
                showToast('Data synced successfully.');
            }, 2000);
        });

        // Post to QB button
        postToQbBtn.addEventListener('click', function() {
            this.innerHTML = '<i class="fa-solid fa-spinner fa-spin mr-2"></i>Posting...';
            this.disabled = true;

            setTimeout(() => {
                this.innerHTML = '<i class="fa-solid fa-check mr-2"></i>Posted Successfully';
                this.classList.remove('bg-brand-teal', 'hover:bg-brand-teal/90');
                this.classList.add('bg-status-success');
                showToast('Line items posted to QuickBooks successfully.');

                // Update matched rows to posted
                invoiceRows.forEach(row => {
                    if (row.dataset.status === 'matched') {
                        row.dataset.status = 'posted';
                        const statusBadge = row.querySelector('td:last-child span');
                        if (statusBadge) {
                            statusBadge.textContent = 'Posted';
                            statusBadge.className =
                                'inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-[#4A90A4] text-white';
                        }
                    }
                });
            }, 2000);
        });

        // Row click to open view modal
        invoiceRows.forEach(row => {
            row.addEventListener('click', function() {
                const invoiceNum = this.querySelector('td:first-child span').textContent;
                const entity = this.querySelector('td:nth-child(2) span').textContent;
                const productEl = this.querySelector('td:nth-child(3)');
                const product = productEl.querySelector('span') ? productEl.querySelector(
                    'span').textContent : '';
                const volume = this.querySelector('td:nth-child(4) span').textContent;
                const amount = this.querySelector('td:nth-child(5) span').textContent;
                const status = this.dataset.status;

                document.getElementById('view-modal-invoice').textContent = invoiceNum;
                document.getElementById('view-modal-entity').textContent = entity;
                document.getElementById('view-modal-product').textContent = product;
                document.getElementById('view-modal-volume').textContent = volume;
                document.getElementById('view-modal-amount').textContent = amount;

                const statusEl = document.getElementById('view-modal-status');
                if (status === 'matched') {
                    statusEl.textContent = 'Matched';
                    statusEl.className =
                        'inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-status-success text-white';
                } else if (status === 'mismatched') {
                    statusEl.textContent = 'Mismatched';
                    statusEl.className =
                        'inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-[#D6A77A] text-white';
                } else {
                    statusEl.textContent = 'Posted';
                    statusEl.className =
                        'inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-[#4A90A4] text-white';
                }

                viewModal.classList.remove('hidden');
                viewModal.classList.add('flex');
            });
        });

        // Modal close functionality
        document.querySelectorAll('.modal-close').forEach(btn => {
            btn.addEventListener('click', function() {
                this.closest('.fixed').classList.add('hidden');
                this.closest('.fixed').classList.remove('flex');
            });
        });

        document.querySelectorAll('.fixed').forEach(modal => {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    this.classList.add('hidden');
                    this.classList.remove('flex');
                }
            });
        });

        // Toast notification
        function showToast(message) {
            const toast = document.createElement('div');
            toast.className =
                'fixed top-4 right-4 bg-brand-teal text-white px-6 py-3 rounded-lg shadow-lg z-50 flex items-center space-x-2';
            toast.innerHTML = `<i class="fa-solid fa-check-circle"></i><span>${message}</span>`;
            document.body.appendChild(toast);

            setTimeout(() => {
                toast.remove();
            }, 3000);
        }
    });
</script>
