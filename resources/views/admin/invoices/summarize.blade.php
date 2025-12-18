<x-layout title="Transactions Details - {{ date('F Y') }}">

    <section id="back_navigation" class="mb-4">
        <a href="{{ route('admin.invoice.detail') }}"
            class="inline-flex items-center px-6 py-2 text-sm font-bold text-white bg-[#D6A77A] rounded-xl hover:bg-[#C59669] transition-colors shadow-sm">
            <i class="fa-solid fa-arrow-left-long mr-2"></i>
            <span>Back</span>
        </a>
    </section>

    <section id="invoices_table_section" class="bg-white rounded-xl shadow overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full table-fixed">
                <thead class="bg-gray-50 border-b border-gray-200 sticky top-0">
                    <tr>
                        <th
                            class="w-1/3 px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            <div class="flex items-center cursor-pointer">
                                Customer Name
                                <i class="fa-solid fa-sort ml-2 text-gray-400"></i>
                            </div>
                        </th>
                        <th
                            class="w-1/3 px-6 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Total Amount Received
                        </th>
                        <th
                            class="w-1/3 px-6 py-3 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody id="invoices-table-body" class="divide-y divide-gray-200">
                    @php
                        $invoices = [
                            ['customer' => 'CONOCOPHILLIPS CO.', 'amount' => 5820.5],
                            ['customer' => 'EXXON MOBIL CORP.', 'amount' => 12450.0],
                            ['customer' => 'CHEVRON U.S.A. INC.', 'amount' => 8900.25],
                            ['customer' => 'EOG RESOURCES, INC.', 'amount' => 15670.8],
                            ['customer' => 'PIONEER NATURAL RES.', 'amount' => 7340.0],
                            ['customer' => 'OCCIDENTAL PERMIAN', 'amount' => 11210.45],
                            ['customer' => 'DEVON ENERGY PROD.', 'amount' => 9850.6],
                            ['customer' => 'DIAMONDBACK E&P', 'amount' => 13120.3],
                            ['customer' => 'APACHE CORPORATION', 'amount' => 6540.75],
                            ['customer' => 'MARATHON OIL CO.', 'amount' => 10980.2],
                        ];
                    @endphp
                    @foreach ($invoices as $invoice)
                        <tr class="hover:bg-brand-sage/10 transition-colors">
                            <td class="px-6 py-1">
                                <span class="text-sm font-medium text-gray-900">{{ $invoice['customer'] }}</span>
                            </td>
                            <td class="px-6 py-1 text-right">
                                <span
                                    class="text-sm font-medium text-gray-900">${{ number_format($invoice['amount'], 2) }}</span>
                            </td>
                            <td class="px-6 py-1 text-center">
                                <a href="{{ route('admin.invoice.preview') }}"
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

<div id="view-modal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-[0_8px_32px_rgba(0,0,0,0.12)] w-[520px] max-h-[90vh] overflow-hidden">
        <div class="flex items-center justify-between px-6 py-1 border-b border-gray-200">
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
        <div class="flex items-center justify-end space-x-3 px-6 py-1 bg-gray-50 border-t border-gray-200">
            <button
                class="modal-close px-4 py-2 text-gray-700 hover:text-gray-900 transition-colors text-sm font-medium">Close</button>
        </div>
    </div>
</div>

<div id="sync-upload-modal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-xl w-[500px] overflow-hidden">
        <div class="flex items-center justify-between px-6 py-1 border-b border-gray-200">
            <h3 class="text-xl font-semibold text-gray-900">Sync or upload data with {{ date('F Y') }}</h3>
            <button class="modal-close-sync text-gray-400 hover:text-gray-600 transition-colors">
                <i class="fa-solid fa-xmark fa-lg"></i>
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
        <div class="px-6 py-1 bg-gray-50 border-t border-gray-200 flex justify-end">
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
