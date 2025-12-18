<x-layout title="Products">

    <style>
        .in-active {
            background: #2A6F6A !important;
            color: white !important;
        }
        
    </style>

    <section id="tabs_and_actions_row" class="bg-white rounded-lg shadow-[0_2px_8px_rgba(0,0,0,0.06)] px-6 py-3 mb-6">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">

                <button
                    class=" filter-tab flex items-center space-x-2 py-2.5 rounded-full text-sm font-semibold bg-transparent text-gray-600 "
                    data-filter="inactive">
                    {{-- <span>Inactive</span> --}}
                    {{-- <span
                        class="inline-flex items-center justify-center px-2 py-0.5 text-xs font-bold bg-brand-teal/20 text-brand-teal rounded-full">5</span> --}}


                    <div class="flex items-center space-x-2 ">

                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" id="status-toggle" class="sr-only peer">
                            <div
                                class="w-11 h-6  bg-gray-300  rounded-full peer-focus:outline-none peer-checked:bg-brand-teal
                                            after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white
                                            after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5
                                            after:transition-all peer-checked:after:translate-x-full peer-checked:after:border-white">
                            </div>
                        </label>

                        <span class="text-sm font-medium">Toggle to cn Active</span>
                    </div>
                    {{-- </button> --}}
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <input type="text" placeholder="Search products..."
                        class="w-60 h-11 pl-10 pr-4 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-sage text-sm">
                    <i class="fa-solid fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                </div>
                <button id="add-product-btn"
                    class="bg-brand-terracotta text-white font-semibold px-5 py-2.5 rounded-lg hover:bg-brand-terracotta/90 transition-colors text-sm">
                    <i class="fa-solid fa-plus mr-2"></i>Add Product
                </button>
            </div>
        </div>
    </section>

    <section id="products_table_section"
        class="bg-white rounded-lg shadow-[0_2px_8px_rgba(0,0,0,0.06)] overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200 sticky top-0">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            <div class="flex items-center cursor-pointer">
                                Product Name
                                <i class="fa-solid fa-sort ml-2 text-gray-400"></i>
                            </div>
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Unit</th>

                        <th class="px-6 py-3 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody id="products-table-body" class="divide-y divide-gray-200">
                    <tr class="hover:bg-brand-sage/10 transition-colors product-row" data-status="active">
                        <td class="px-6 py-2">
                            <span class="text-sm font-medium text-gray-900">West Texas Intermediate Crude</span>
                        </td>
                        <td class="px-6 py-2">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-brand-teal text-white">BBL</span>
                        </td>

                        <td class="px-6 py-2">
                            <div class="flex items-center justify-center space-x-2">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div
                                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-brand-teal">
                                    </div>
                                </label>
                                <button class="edit-btn text-brand=terracotta hover:text-brand-teal transition-colors"
                                    title="Edit">
                                    <i class="fa-solid fa-pencil fa-fw"></i>
                                </button>

                            </div>
                        </td>
                    </tr>
                    <tr class="bg-brand-sage/5 hover:bg-brand-sage/10 transition-colors product-row"
                        data-status="active">
                        <td class="px-6 py-2">
                            <span class="text-sm font-medium text-gray-900">Natural Gas Liquid</span>
                        </td>
                        <td class="px-6 py-2">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#4A90A4] text-white">MCF</span>
                        </td>

                        <td class="px-6 py-2">
                            <div class="flex items-center justify-center space-x-2">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div
                                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-brand-teal">
                                    </div>
                                </label>
                                <button class="edit-btn text-brand=terracotta hover:text-brand-teal transition-colors"
                                    title="Edit">
                                    <i class="fa-solid fa-pencil fa-fw"></i>
                                </button>

                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-brand-sage/10 transition-colors product-row" data-status="active">
                        <td class="px-6 py-2">
                            <span class="text-sm font-medium text-gray-900">Copper Ore Grade A</span>
                        </td>
                        <td class="px-6 py-2">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-brand-terracotta text-white">GAL</span>
                        </td>

                        <td class="px-6 py-2">
                            <div class="flex items-center justify-center space-x-2">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div
                                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-brand-teal">
                                    </div>
                                </label>
                                <button class="edit-btn text-brand=terracotta hover:text-brand-teal transition-colors"
                                    title="Edit">
                                    <i class="fa-solid fa-pencil fa-fw"></i>
                                </button>

                            </div>
                        </td>
                    </tr>
                    <tr class="bg-brand-sage/5 hover:bg-brand-sage/10 transition-colors product-row"
                        data-status="inactive">
                        <td class="px-6 py-2">
                            <span class="text-sm font-medium text-gray-900 opacity-60">Brent Crude Oil</span>
                        </td>
                        <td class="px-6 py-2">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-brand-teal/60 text-white">BBL</span>
                        </td>

                        <td class="px-6 py-2">
                            <div class="flex items-center justify-center space-x-2">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer">
                                    <div
                                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-brand-teal">
                                    </div>
                                </label>

                                <button class="edit-btn text-brand=terracotta hover:text-brand-teal transition-colors"
                                    title="Edit">
                                    <i class="fa-solid fa-pencil fa-fw"></i>
                                </button>

                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-brand-sage/10 transition-colors product-row" data-status="active">
                        <td class="px-6 py-2">
                            <span class="text-sm font-medium text-gray-900">Propane Gas</span>
                        </td>
                        <td class="px-6 py-2">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#4A90A4] text-white">MCF</span>
                        </td>

                        <td class="px-6 py-2">
                            <div class="flex items-center justify-center space-x-2">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div
                                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-brand-teal">
                                    </div>
                                </label>
                                <button class="edit-btn text-brand=terracotta hover:text-brand-teal transition-colors"
                                    title="Edit">
                                    <i class="fa-solid fa-pencil fa-fw"></i>
                                </button>

                            </div>
                        </td>
                    </tr>
                    <tr class="bg-brand-sage/5 hover:bg-brand-sage/10 transition-colors product-row"
                        data-status="active">
                        <td class="px-6 py-2">
                            <span class="text-sm font-medium text-gray-900">Gold Bullion</span>
                        </td>
                        <td class="px-6 py-2">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-brand-terracotta text-white">GAL</span>
                        </td>

                        <td class="px-6 py-2">
                            <div class="flex items-center justify-center space-x-2">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div
                                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-brand-teal">
                                    </div>
                                </label>
                                <button class="edit-btn text-brand=terracotta hover:text-brand-teal transition-colors"
                                    title="Edit">
                                    <i class="fa-solid fa-pencil fa-fw"></i>
                                </button>

                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-brand-sage/10 transition-colors product-row" data-status="active">
                        <td class="px-6 py-2">
                            <span class="text-sm font-medium text-gray-900">Diesel Fuel #2</span>
                        </td>
                        <td class="px-6 py-2">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-brand-teal text-white">BBL</span>
                        </td>

                        <td class="px-6 py-2">
                            <div class="flex items-center justify-center space-x-2">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div
                                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-brand-teal">
                                    </div>
                                </label>
                                <button class="edit-btn text-brand=terracotta hover:text-brand-teal transition-colors"
                                    title="Edit">
                                    <i class="fa-solid fa-pencil fa-fw"></i>
                                </button>

                            </div>
                        </td>
                    </tr>
                    <tr class="bg-brand-sage/5 hover:bg-brand-sage/10 transition-colors product-row"
                        data-status="inactive">
                        <td class="px-6 py-2">
                            <span class="text-sm font-medium text-gray-900 opacity-60">Silver Ore</span>
                        </td>
                        <td class="px-6 py-2">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-brand-terracotta/60 text-white">GAL</span>
                        </td>

                        <td class="px-6 py-2">
                            <div class="flex items-center justify-center space-x-2">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer">
                                    <div
                                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-brand-teal">
                                    </div>
                                </label>
                                <button class="edit-btn text-brand=terracotta hover:text-brand-teal transition-colors"
                                    title="Edit">
                                    <i class="fa-solid fa-pencil fa-fw"></i>
                                </button>

                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-brand-sage/10 transition-colors product-row" data-status="active">
                        <td class="px-6 py-2">
                            <span class="text-sm font-medium text-gray-900">Methane Gas</span>
                        </td>
                        <td class="px-6 py-2">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#4A90A4] text-white">MCF</span>
                        </td>

                        <td class="px-6 py-2">
                            <div class="flex items-center justify-center space-x-2">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div
                                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-brand-teal">
                                    </div>
                                </label>
                                <button class="edit-btn text-brand=terracotta hover:text-brand-teal transition-colors"
                                    title="Edit">
                                    <i class="fa-solid fa-pencil fa-fw"></i>
                                </button>

                            </div>
                        </td>
                    </tr>
                    <tr class="bg-brand-sage/5 hover:bg-brand-sage/10 transition-colors product-row"
                        data-status="active">
                        <td class="px-6 py-2">
                            <span class="text-sm font-medium text-gray-900">Hydraulic Fracturing Fluid</span>
                        </td>
                        <td class="px-6 py-2">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#9E9E9E] text-white">MCF</span>
                        </td>

                        <td class="px-6 py-2">
                            <div class="flex items-center justify-center space-x-2">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div
                                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-brand-teal">
                                    </div>
                                </label>
                                <button class="edit-btn text-brand=terracotta hover:text-brand-teal transition-colors"
                                    title="Edit">
                                    <i class="fa-solid fa-pencil fa-fw"></i>
                                </button>

                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-brand-sage/10 transition-colors product-row" data-status="active">
                        <td class="px-6 py-2">
                            <span class="text-sm font-medium text-gray-900">Platinum Concentrate</span>
                        </td>
                        <td class="px-6 py-2">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-brand-terracotta text-white">GAL</span>
                        </td>

                        <td class="px-6 py-2">
                            <div class="flex items-center justify-center space-x-2">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div
                                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-brand-teal">
                                    </div>
                                </label>
                                <button class="edit-btn text-brand=terracotta hover:text-brand-teal transition-colors"
                                    title="Edit">
                                    <i class="fa-solid fa-pencil fa-fw"></i>
                                </button>

                            </div>
                        </td>
                    </tr>
                    <tr class="bg-brand-sage/5 hover:bg-brand-sage/10 transition-colors product-row"
                        data-status="active">
                        <td class="px-6 py-2">
                            <span class="text-sm font-medium text-gray-900">Butane Gas</span>
                        </td>
                        <td class="px-6 py-2">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#4A90A4] text-white">MCF</span>
                        </td>

                        <td class="px-6 py-2">
                            <div class="flex items-center justify-center space-x-2">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div
                                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-brand-teal">
                                    </div>
                                </label>
                                <button class="edit-btn text-brand-terracotta hover:text-brand-teal transition-colors"
                                    title="Edit">
                                    <i class="fa-solid fa-pencil fa-fw"></i>
                                </button>

                            </div>
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
                    id="total-entries">12</span> entries
            </div>
            <div class="flex items-center space-x-1">
                <button id="prev-page"
                    class="px-3 py-1.5 rounded-lg border border-gray-300 text-sm text-gray-600 hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                    Previous
                </button>
                <div id="pagination-numbers" class="flex items-center space-x-1">
                    <!-- Page numbers will be injected here -->
                </div>
                <button id="next-page"
                    class="px-3 py-1.5 rounded-lg border border-gray-300 text-sm text-gray-600 hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                    Next
                </button>
            </div>
        </div>
    </section>


</x-layout>
<div id="view-modal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-[0_8px_32px_rgba(0,0,0,0.12)] w-[480px] max-h-[90vh] overflow-hidden">
        <div class="flex items-center justify-between px-6 py-2 border-b border-gray-200">
            <div class="flex items-center space-x-3">
                <h3 class="text-xl font-semibold text-gray-900">West Texas Intermediate Crude</h3>
                <span
                    class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-brand-teal text-white">Active</span>
            </div>
            <button class="modal-close text-gray-400 hover:text-gray-600 transition-colors">
                <i class="fa-solid fa-xmark fa-lg"></i>
            </button>
        </div>
        <div class="px-6 py-5 space-y-4">
            <div class="flex items-center justify-between py-3 border-b border-gray-100">
                <span class="text-sm font-medium text-gray-500">Type</span>
                <span
                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-brand-teal text-white">Oil</span>
            </div>
            <div class="flex items-center justify-between py-3 border-b border-gray-100">
                <span class="text-sm font-medium text-gray-500">Created</span>
                <span class="text-sm text-gray-700">Jan 15, 2024</span>
            </div>
            <div class="flex items-center justify-between py-3">
                <span class="text-sm font-medium text-gray-500">Last Updated</span>
                <span class="text-sm text-gray-700">2 hours ago</span>
            </div>
        </div>
        <div class="flex items-center justify-end space-x-3 px-6 py-2 bg-gray-50 border-t border-gray-200">
            <button
                class="modal-close px-4 py-2 text-gray-700 hover:text-gray-900 transition-colors text-sm font-medium">Close</button>
            <button
                class="edit-from-view px-5 py-2 border border-brand-teal text-brand-teal rounded-lg hover:bg-brand-teal/10 transition-colors text-sm font-medium">Edit</button>
        </div>
    </div>
</div>

<div id="edit-modal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
    <div
        class="bg-white rounded-xl shadow-[0_8px_32px_rgba(0,0,0,0.12)] w-[480px] max-h-[90vh] overflow-hidden form-container">
        <div class="flex items-center justify-between px-8 py-6 border-b border-gray-200">
            <h3 class="text-2xl font-bold text-gray-900 tracking-tight">Edit Product</h3>
            <button class="modal-close text-gray-400 hover:text-gray-600 transition-colors">
                <i class="fa-solid fa-xmark fa-lg"></i>
            </button>
        </div>
        <div class="px-6 py-5 space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Product Name</label>
                <input type="text" value="West Texas Intermediate Crude"
                    class="px-[8px] rounded-[14px] w-full h-11 px-4 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-sage text-sm">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Unit</label>
                <select
                    class="px-[8px] rounded-[14px] w-full h-11 px-4 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-sage text-sm">
                    <option selected>BBL</option>
                    <option>MCF</option>
                    <option>GAL</option>
                </select>
            </div>

        </div>



        <div class="flex justify-end items-center space-x-4 pb-[10px] pr-[20px]">
            <div class="relative">

                <button
                    class="modal-close bg-transparent border border-brand-teal text-brand-teal font-semibold px-5 py-2.5 rounded-lg hover:bg-brand-teal/90 hover:text-white transition-colors text-sm">Cancel</button>
                </button>
            </div>
            <button
                class="save-product bg-brand-terracotta text-white font-semibold px-5 py-2.5 rounded-lg hover:bg-brand-terracotta/90 transition-colors text-sm">
                save Changes
            </button>
        </div>

    </div>
</div>

<div id="add-modal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50 ">
    <div class="bg-white rounded-xl shadow-[0_8px_32px_rgba(0,0,0,0.12)] w-[480px] max-h-[90vh] overflow-hidden">
        <div class="flex items-center justify-between px-8 py-6 border-b border-gray-200">
            <h3 class="text-2xl font-bold text-gray-900 tracking-tight">Add Product</h3>
            <button class="modal-close text-gray-400 hover:text-gray-600 transition-colors">
                <i class="fa-solid fa-xmark fa-lg"></i>
            </button>
        </div>
        <div class="px-8 py-8 space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Product Name <span
                        class="text-red-500">*</span></label>
                <input type="text" placeholder="Enter product name"
                    class="px-[8px] rounded-[14px] w-full h-11 px-4 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-sage text-sm">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Unit</label>
                <select
                    class="px-[8px] rounded-[14px] w-full h-11 px-4 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-sage text-sm">
                    <option>BBL</option>
                    <option>MCF</option>
                    <option>GAL</option>
                </select>
            </div>




        <div class="flex justify-end items-center space-x-4 pb-[10px] pr-[20px]">
            <div class="relative">

                <button
                    class="modal-close bg-transparent border border-brand-teal text-brand-teal font-semibold px-5 py-2.5 rounded-lg hover:bg-brand-teal/90 hover:text-white transition-colors text-sm">Cancel</button>
                </button>
            </div>
            <button id="create-mapping-btn"
                class="bg-brand-terracotta text-white font-semibold px-5 py-2.5 rounded-lg hover:bg-brand-terracotta/90 transition-colors text-sm">
                Add
                Product
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterTabs = document.querySelectorAll('.filter-tab');
        const productRows = document.querySelectorAll('.product-row');
        const allRows = Array.from(productRows);
        const activeBtn = document.querySelector('.active-btn');

        const viewModal = document.getElementById('view-modal');
        const editModal = document.getElementById('edit-modal');
        const addModal = document.getElementById('add-modal');
        const addProductBtn = document.getElementById('add-product-btn');

        // Pagination elements
        const rowsPerPageSelect = document.getElementById('rows-per-page');
        const startIndexEl = document.getElementById('start-index');
        const endIndexEl = document.getElementById('end-index');
        const totalEntriesEl = document.getElementById('total-entries');
        const paginationNumbersEl = document.getElementById('pagination-numbers');
        const prevPageBtn = document.getElementById('prev-page');
        const nextPageBtn = document.getElementById('next-page');

        let currentPage = 1;
        let rowsPerPage = parseInt(rowsPerPageSelect.value);

        // Initialize pagination
        function renderPagination() {
            const totalRows = allRows.length;
            const totalPages = Math.ceil(totalRows / rowsPerPage);

            // Ensure current page is valid
            if (currentPage > totalPages) currentPage = totalPages || 1;
            if (currentPage < 1) currentPage = 1;

            const startIndex = (currentPage - 1) * rowsPerPage;
            const endIndex = Math.min(startIndex + rowsPerPage, totalRows);

            // Hide all rows first
            allRows.forEach(row => row.style.display = 'none');

            // Show only current page rows
            for (let i = startIndex; i < endIndex; i++) {
                allRows[i].style.display = '';
            }

            // Update info text
            startIndexEl.textContent = totalRows === 0 ? 0 : startIndex + 1;
            endIndexEl.textContent = endIndex;
            totalEntriesEl.textContent = totalRows;

            // Update button states
            prevPageBtn.disabled = currentPage === 1;
            nextPageBtn.disabled = currentPage === totalPages || totalPages === 0;

            // Render page numbers
            paginationNumbersEl.innerHTML = '';
            for (let i = 1; i <= totalPages; i++) {
                const btn = document.createElement('button');
                btn.className = `px-3 py-1.5 rounded-lg text-sm font-medium transition-colors ${
                    i === currentPage 
                        ? 'bg-brand-teal text-white border border-brand-teal' 
                        : 'bg-white text-gray-600 border border-gray-300 hover:bg-gray-50'
                }`;
                btn.textContent = i;
                btn.addEventListener('click', () => {
                    currentPage = i;
                    renderPagination();
                });
                paginationNumbersEl.appendChild(btn);
            }
        }

        // Event listeners for pagination
        rowsPerPageSelect.addEventListener('change', (e) => {
            rowsPerPage = parseInt(e.target.value);
            currentPage = 1;
            renderPagination();
        });

        prevPageBtn.addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                renderPagination();
            }
        });

        nextPageBtn.addEventListener('click', () => {
            const totalPages = Math.ceil(allRows.length / rowsPerPage);
            if (currentPage < totalPages) {
                currentPage++;
                renderPagination();
            }
        });

        // Initialize
        renderPagination();

        // Modal logic
        document.querySelectorAll('.view-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                viewModal.classList.remove('hidden');
                viewModal.classList.add('flex');
            });
        });

        document.querySelectorAll('.edit-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                editModal.classList.remove('hidden');
                editModal.classList.add('flex');
            });
        });

        document.querySelector('.edit-from-view')?.addEventListener('click', () => {
            viewModal.classList.add('hidden');
            viewModal.classList.remove('flex');
            editModal.classList.remove('hidden');
            editModal.classList.add('flex');
        });

        addProductBtn.addEventListener('click', () => {
            addModal.classList.remove('hidden');
            addModal.classList.add('flex');
        });

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
    });

    const toggleCheckbox = document.getElementById("status-toggle");
    const productRows = document.querySelectorAll(".product-row");
    const toggle = document.querySelector(".in-active-btn");

    // Default: show only active rows
    productRows.forEach(row => {
        row.style.display = row.dataset.status === "active" ? "" : "none";
    });

    toggleCheckbox.addEventListener("change", () => {
        if (toggleCheckbox.checked) {
            // Show both active and inactive rows
            productRows.forEach(row => {
                row.style.display = ""; // show all rows
            });
        } else {
            // Show only active rows
            productRows.forEach(row => {
                row.style.display = row.dataset.status === "active" ? "" : "none";
            });
        }
    });
</script>
