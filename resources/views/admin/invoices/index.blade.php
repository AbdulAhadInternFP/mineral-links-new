<x-layout title="Transactions">

    <section id="tabs_and_actions_row" class="bg-white rounded-xl shadow px-6 py-3 mb-6">
        <div class="flex items-center justify-end">
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <select
                        class="w-60 h-11 pl-4 pr-10 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-sage text-sm appearance-none bg-white cursor-pointer">
                        @php
                            $currentYear = date('Y');
                        @endphp
                        @for ($i = $currentYear; $i >= $currentYear - 15; $i--)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    <i
                        class="fa-solid fa-chevron-down absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none"></i>
                </div>
                <button id="sync-data-btn"
                    class="bg-brand-terracotta text-white font-semibold px-5 py-2.5 rounded-lg hover:bg-brand-terracotta/90 transition-colors text-sm">
                    <i class="fa-solid fa-upload fa-fw mr-2"></i>Sync or Upload
                </button>
            </div>
        </div>
    </section>

    <section id="invoices_table_section" class="bg-white rounded-xl shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200 sticky top-0">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            <div class="flex items-center cursor-pointer">
                                Month
                                <i class="fa-solid fa-sort ml-2 text-gray-400"></i>
                            </div>
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Status
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Type
                        </th>
                        <th class="px-6 py-3 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody id="invoices-table-body" class="divide-y divide-gray-200">
                    @php
                        $months = [];
                        $currentMonth = (int) date('n');
                        for ($m = $currentMonth; $m >= 1; $m--) {
                            $months[] = date('F', mktime(0, 0, 0, $m, 1));
                        }
                    @endphp

                    @foreach ($months as $index => $month)
                        @php
                            $isComplete = $month !== date('F');
                            $status = $isComplete ? 'Complete' : 'Incomplete';
                            $statusClass = $isComplete ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800';

                            $typeText = $index % 2 === 0 ? 'Sync' : 'Upload';
                            $typeClass =
                                $index % 2 === 0 ? 'bg-blue-100 text-blue-800' : 'bg-purple-100 text-purple-800';
                        @endphp
                        <tr class="hover:bg-brand-sage/10 transition-colors">
                            <td class="px-6 py-1">
                                <span class="text-sm font-medium text-gray-900">{{ $month }}</span>
                            </td>
                            <td class="px-6 py-1">
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $statusClass }}">
                                    {{ $status }}
                                </span>
                            </td>
                            <td class="px-6 py-1">
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $typeClass }}">
                                    {{ $typeText }}
                                </span>
                            </td>
                            <td class="px-6 py-1 text-center">
                                <a href="{{ route('admin.invoice.detail') }}"
                                    class="text-gray-400 hover:text-brand-teal transition-colors">
                                    <i class="w-6 text-brand-teal fa-solid fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination Footer -->
        <div class="px-6 py-1 border-t border-gray-200 flex items-center justify-between">
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


    </section>

</x-layout>



<div id="sync-upload-modal"
    class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50 transition-opacity duration-300">

    <div
        class="bg-white rounded-3xl shadow-2xl w-full max-w-lg max-h-[90vh] overflow-y-auto transform transition-transform duration-300 scale-95">
        <!-- Header -->
        <div class="flex items-center justify-between px-8 py-6 border-b border-gray-200">
            <h3 class="text-2xl font-bold text-gray-900 tracking-tight">
               Sync/Upload - {{ date('F Y') }}  
            </h3>
            <button id="modal-close-btn" class="text-gray-400 hover:text-gray-700 transition-colors duration-200">
                <i class="fa-solid fa-xmark fa-xl"></i>
            </button>
        </div>
        <div class="p-6 space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Action Type</label>
                <select id="sync-action-selector"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:border-brand-teal text-sm">
                    <option value="Sync">Sync Data</option>
                    <option value="Upload">Upload File</option>
                </select>
            </div>

            <div id="upload-input-container" class="hidden">
                <label class="block text-sm font-medium text-gray-700 mb-2">Upload File</label>
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <i class="fa-solid fa-cloud-arrow-up text-gray-400 text-2xl mb-2"></i>
                            <p class="text-xs text-gray-500">Click to upload or drag and drop</p>
                            <p class="text-xs text-gray-500 mt-1" id="file-name-display"></p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>
            </div>
        </div>
        <div class="px-8 py-6 bg-gray-50 border-t border-gray-200 flex justify-end">
            <button id="perform-sync-upload-btn"
                class="bg-brand-terracotta text-white font-semibold px-5 py-2.5 rounded-lg hover:bg-brand-terracotta/90 transition-colors text-sm">
                Sync
            </button>
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
        // Sync data button
        const syncUploadModal = document.getElementById('sync-upload-modal');
        const syncActionSelector = document.getElementById('sync-action-selector');
        const uploadInputContainer = document.getElementById('upload-input-container');
        const performSyncBtn = document.getElementById('perform-sync-upload-btn');
        const fileInput = document.getElementById('dropzone-file');
        const fileNameDisplay = document.getElementById('file-name-display');

        syncDataBtn.addEventListener('click', function() {
            syncUploadModal.classList.remove('hidden');
            syncUploadModal.classList.add('flex');
        });

        // Close sync modal
        document.querySelectorAll('.modal-close-sync').forEach(btn => {
            btn.addEventListener('click', function() {
                syncUploadModal.classList.add('hidden');
                syncUploadModal.classList.remove('flex');
            });
        });

        // Handle selector change
        syncActionSelector.addEventListener('change', function() {
            if (this.value === 'Upload') {
                uploadInputContainer.classList.remove('hidden');
                performSyncBtn.textContent = 'Upload';
            } else {
                uploadInputContainer.classList.add('hidden');
                performSyncBtn.textContent = 'Sync';
            }
        });

        // Handle file selection display
        fileInput.addEventListener('change', function() {
            if (this.files && this.files[0]) {
                fileNameDisplay.textContent = this.files[0].name;
            }
        });

        // Handle Perform Action
        performSyncBtn.addEventListener('click', function() {
            const action = syncActionSelector.value;
            this.disabled = true;
            this.innerHTML = '<i class="fa-solid fa-spinner fa-spin mr-2"></i>Processing...';

            setTimeout(() => {
                this.disabled = false;
                this.textContent = action;
                syncUploadModal.classList.add('hidden');
                syncUploadModal.classList.remove('flex');
                showToast(action + ' completed successfully.');
            }, 1500);
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
