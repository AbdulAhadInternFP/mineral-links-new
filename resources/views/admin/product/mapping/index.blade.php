 <x-layout title="Product Mapping">

     @php
         $mappings = [
             [
                 'interest' => 'RI',
                 'type' => 'Oil',
                 'product' => '4201-01 RI-Oil',
                 'status' => 'Active',
                 'qbo_mapped' => true,
             ],
             [
                 'interest' => 'RI',
                 'type' => 'Gas',
                 'product' => '4201-02 RI-Gas',
                 'status' => 'Active',
                 'qbo_mapped' => true,
             ],
             [
                 'interest' => 'RI',
                 'type' => 'LNG',
                 'product' => '4201-03 RI-LNG',
                 'status' => 'Inactive',
                 'qbo_mapped' => true,
             ],
             [
                 'interest' => 'RI',
                 'type' => 'Product',
                 'product' => '4201-04 RI-Product',
                 'status' => 'Active',
                 'qbo_mapped' => false,
             ],
             [
                 'interest' => 'ORRI',
                 'type' => 'Oil',
                 'product' => '4201-05 ORRI-Oil',
                 'status' => 'Active',
                 'qbo_mapped' => false,
             ],
             [
                 'interest' => 'ORRI',
                 'type' => 'Gas',
                 'product' => '4201-06 ORRI-Gas',
                 'status' => 'Inactive',
                 'qbo_mapped' => true,
             ],
             [
                 'interest' => 'ORRI',
                 'type' => 'LNG',
                 'product' => '4201-07 ORRI-LNG',
                 'status' => 'Active',
                 'qbo_mapped' => true,
             ],
             [
                 'interest' => 'ORRI',
                 'type' => 'Product',
                 'product' => '4201-08 ORRI-Product',
                 'status' => 'Active',
                 'qbo_mapped' => true,
             ],
             [
                 'interest' => 'OR',
                 'type' => 'Oil',
                 'product' => '4201-09 OR-Oil',
                 'status' => 'Inactive',
                 'qbo_mapped' => false,
             ],
             [
                 'interest' => 'OR',
                 'type' => 'Gas',
                 'product' => '4201-10 OR-Gas',
                 'status' => 'Active',
                 'qbo_mapped' => true,
             ],
             [
                 'interest' => 'OR',
                 'type' => 'LNG',
                 'product' => '4201-11 OR-LNG',
                 'status' => 'Active',
                 'qbo_mapped' => true,
             ],
             [
                 'interest' => 'OR',
                 'type' => 'Product',
                 'product' => '4201-12 OR-Product',
                 'status' => 'Active',
                 'qbo_mapped' => true,
             ],
             [
                 'interest' => 'WI',
                 'type' => 'Oil',
                 'product' => '4201-13 WI-Oil',
                 'status' => 'Inactive',
                 'qbo_mapped' => true,
             ],
             [
                 'interest' => 'WI',
                 'type' => 'Gas',
                 'product' => '4201-14 WI-Gas',
                 'status' => 'Active',
                 'qbo_mapped' => true,
             ],
             [
                 'interest' => 'WI',
                 'type' => 'LNG',
                 'product' => '4201-15 WI-LNG',
                 'status' => 'Active',
                 'qbo_mapped' => true,
             ],
             [
                 'interest' => 'WI',
                 'type' => 'Product',
                 'product' => '4201-16 WI-Product',
                 'status' => 'Inactive',
                 'qbo_mapped' => true,
             ],
             [
                 'interest' => 'MISC',
                 'type' => 'Oil',
                 'product' => '4201-17-MISC - Oil',
                 'status' => 'Active',
                 'qbo_mapped' => true,
             ],
             [
                 'interest' => 'MISC',
                 'type' => 'Gas',
                 'product' => '4201-18-MISC - Gas',
                 'status' => 'Active',
                 'qbo_mapped' => true,
             ],
             [
                 'interest' => 'MISC',
                 'type' => 'LNG',
                 'product' => '4201-19-MISC - LNG',
                 'status' => 'Active',
                 'qbo_mapped' => true,
             ],
             [
                 'interest' => 'MISC',
                 'type' => 'Product',
                 'product' => '4201-20-MISC - Product',
                 'status' => 'Inactive',
                 'qbo_mapped' => true,
             ],
         ];
     @endphp


     <section id="tabs_and_actions_row" class="bg-white rounded-lg shadow-[0_2px_8px_rgba(0,0,0,0.06)] px-6 py-3 mb-6">
         <div class="flex items-center justify-between">
             <div>
                 <div class="  flex items-center gap-3">

                     <label class="relative inline-flex items-center cursor-pointer">
                         <input type="checkbox" class="sr-only mapping-toggle peer" id="top-toggle">
                         <div
                             class="w-11 h-6 bg-gray-300 rounded-full peer-checked:bg-brand-teal
                            after:absolute after:top-[2px] after:left-[2px] after:bg-white after:h-5 after:w-5
                            after:rounded-full after:transition-all peer-checked:after:translate-x-full">
                         </div>
                     </label>
                     <span>Toggle to see Inactive</span>
                 </div>
             </div>
             <div class="flex items-center space-x-4">
                 <div class="relative">
                     <input type="text" placeholder="Search products..."
                         class="w-60 h-11 pl-10 pr-4 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-sage text-sm">
                     <i class="fa-solid fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                 </div>
                 <button id="create-mapping-btn"
                     class="bg-brand-terracotta text-white font-semibold px-5 py-2.5 rounded-lg hover:bg-brand-terracotta/90 transition-colors text-sm">
                     Create Mapping
                 </button>
             </div>
         </div>
     </section>





     <section id="mapping_table_section" class="bg-white rounded-xl shadow">
         <div class="overflow-x-auto rounded-xl">
             <table class="w-full">
                 <thead class="sticky top-0 bg-gray-50 border-b border-gray-200">
                     <tr>
                         <th class="p-3 text-left text-xs font-semibold text-gray-600 uppercase tracking wie">
                             <div class="flex items-center cursor-pointer">
                                 Interest Type
                                 <i class="fa-solid fa-sort ml-2 text-gray-400"></i>
                             </div>
                         </th>
                         <th class="p-3 text-left text-xs font-semibold text-gray-600 uppercase tracking wie">
                             Product Type</th>

                         <th class="p-3 text-left text-xs font-semibold text-gray-600 uppercase tracking wie">
                             Product</th>
                         <th class="p-3   text-left text-xs font-semibold text-gray-600 uppercase tracking wie">
                             Status</th>
                         <th class="p-3 text-left text-xs font-semibold text-gray-600 uppercase tracking wie">
                             QBO Status</th>
                         <th class="p-3 text-left text-xs font-semibold text-gray-600 uppercase tracking wie">
                             Actions</th>
                     </tr>
                 </thead>
                 <tbody id="mapping-table-body" class="divide-y divide-gray-100">

                     @foreach ($mappings as $mapping)
                         <tr class="  mapping-row hover:bg-brand-sage/10"
                             data-status="{{ strtolower($mapping['status']) }}">
                             <td class="px-3 py-1"><span
                                     class="text-sm font-medium text-gray-800">{{ $mapping['interest'] }}</span></td>
                             <td class="px-3 py-1"><span
                                     class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-brand-teal/10 text-brand-teal">
                                     {{ $mapping['type'] }}</span>
                             </td>
                             <td class="px-3 py-1"><span class="text-sm text-gray-700">{{ $mapping['product'] }}</span>
                             </td>
                             <td class="px-3 py-1"><span
                                     class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium  {{ $mapping['status'] === 'Active' ? 'bg-green-500/10 text-green-500' : 'bg-red-500/10 text-red-500' }}">
                                     {{ $mapping['status'] }}</span>
                             </td>

                             <td class="px-3 py-1">
                                 @if ($mapping['qbo_mapped'])
                                     <i class="fa-solid fa-circle-check text-green-700 text-lg"></i>
                                 @else
                                     <i class="fa-solid fa-circle-xmark text-red-700 text-xl"></i>
                                 @endif
                             </td>
                             <td class="px-3 py-1 flex items-center gap-3">
                                 <i class="fa-solid fa-pencil text-gray-400 hover:text-gray-600 cursor-pointer"></i>
                                 <label class="relative inline-flex items-center cursor-pointer">
                                     <input type="checkbox" class="sr-only mapping-toggle peer" checked>
                                     <div
                                         class="w-11 h-6 bg-gray-300 rounded-full peer-checked:bg-brand-teal
               after:absolute after:top-[2px] after:left-[2px] after:bg-white after:h-5 after:w-5
               after:rounded-full after:transition-all peer-checked:after:translate-x-full">
                                     </div>
                                 </label>
                             </td>
                         </tr>
                     @endforeach
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
                     id="total-entries">10</span> entries
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





 <div id="mapping-form-modal"
     class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50 transition-opacity duration-300">

     <div
         class="bg-white rounded-3xl shadow-2xl w-full max-w-lg max-h-[90vh] overflow-y-auto transform transition-transform duration-300 scale-95">
         <!-- Header -->
         <div class="flex items-center justify-between px-8 py-6 border-b border-gray-200">
             <h3 class="text-2xl font-bold text-gray-900 tracking-tight">
                 Create Mapping
             </h3>
             <button id="modal-close-btn" class="text-gray-400 hover:text-gray-700 transition-colors duration-200">
                 <i class="fa-solid fa-xmark fa-xl"></i>
             </button>
         </div>

         <!-- Body -->
         <div class="form-container">
             <form id="mapping-form" class="form-space">

                 <!-- Interest Type -->
                 <div class="form-group">
                     <label for="interest-type">Interest Type</label>
                     <select id="interest-type" class="form-select">
                         <option value="" selected disabled>Select interest type</option>
                     </select>
                 </div>

                 <!-- Product Type -->
                 <div class="form-group">
                     <label for="product-type">Product Type</label>
                     <select id="product-type" class="form-select">
                         <option value="" selected disabled>Select product type</option>
                     </select>
                 </div>

                 <!-- Product Input -->
                 <div class="form-group">
                     <label for="qbo-sale">Product</label>
                     <input id="qbo-sale"
                         class="w-full py-3 rounded-xl px-4 border border-gray-300 rounded-lg focus:outline-none focus:border-brand-sage text-sm"
                         placeholder="Enter product code eg: 4020" />
                 </div>

                 <!-- Footer -->
                 <div class="flex justify-end gap-2">

                     {{-- <button  class="btn-primary">Create Mapping</button> --}}


                     <button type="button" id="modal-cancel-btn" class="bg-transparent border border-brand-teal text-brand-teal font-semibold px-5 py-2.5 rounded-lg hover:bg-brand-teal/90 hover:text-white transition-colors text-sm">Cancel</button> 
                     <button
                         id="create-mapping-btn" type="submit"
                         class="bg-brand-terracotta text-white font-semibold px-5 py-2.5 rounded-lg hover:bg-brand-terracotta/90 transition-colors text-sm">Create
                         Mapping</button>
                 </div>

             </form>
         </div>

     </div>
 </div>
 <script>
     document.addEventListener('DOMContentLoaded', function() {
         const createMappingBtn = document.getElementById('create-mapping-btn');
         const mappingFormModal = document.getElementById('mapping-form-modal');
         const modalCloseBtn = document.getElementById('modal-close-btn');

         // Open modal
         createMappingBtn.addEventListener('click', function() {
             mappingFormModal.classList.remove('hidden');
             mappingFormModal.classList.add('flex');
         });

         // Close modal on X button
         modalCloseBtn.addEventListener('click', function() {
             mappingFormModal.classList.add('hidden');
             mappingFormModal.classList.remove('flex');
         });

         // Close modal when clicking outside content
         mappingFormModal.addEventListener('click', function(e) {
             if (e.target === mappingFormModal) {
                 mappingFormModal.classList.add('hidden');
                 mappingFormModal.classList.remove('flex');
             }
         });
     });
     // Form Code







     document.addEventListener('DOMContentLoaded', function() {
         const addMappingBtn = document.getElementById('add-mapping-btn');
         const addMappingModal = document.getElementById('add-mapping-modal');
         const closeAddModal = document.getElementById('close-add-modal');
         const cancelAdd = document.getElementById('cancel-add');
         const createMappingBtn = document.getElementById('create-mapping');
         const deleteModal = document.getElementById('delete-modal');
         const cancelDelete = document.getElementById('cancel-delete');
         const confirmDelete = document.getElementById('confirm-delete');
         const deleteButtons = document.querySelectorAll('.delete-mapping');

         const productRadios = document.querySelectorAll('input[name="product"]');
         const qboAddRadios = document.querySelectorAll('input[name="qbo-item-add"]');
         const productSearch = document.getElementById('product-search');
         const qboSearchAdd = document.getElementById('qbo-search-add');


         // Pagination + toggle handling (single consolidated implementation)
         const rowsPerPageSelect = document.getElementById('rows-per-page');
         const startIndexEl = document.getElementById('start-index');
         const endIndexEl = document.getElementById('end-index');
         const totalEntriesEl = document.getElementById('total-entries');
         const paginationNumbersEl = document.getElementById('pagination-numbers');
         const prevPageBtn = document.getElementById('prev-page');
         const nextPageBtn = document.getElementById('next-page');
         const topToggle = document.getElementById('top-toggle');

         let currentPage = 1;
         let rowsPerPage = parseInt(rowsPerPageSelect.value) || 10;

         function allMappingRows() {
             return Array.from(document.querySelectorAll('.mapping-row'));
         }

         function getFilteredRows() {
             const showInactive = topToggle && topToggle.checked;
             return allMappingRows().filter(row => {
                 const status = (row.dataset.status || '').toLowerCase();
                 return status === 'active' || (status === 'inactive' && showInactive);
             });
         }

         function renderTable() {
             rowsPerPage = parseInt(rowsPerPageSelect.value) || 10;
             const filtered = getFilteredRows();
             const total = filtered.length;
             const totalPages = total === 0 ? 1 : Math.ceil(total / rowsPerPage);

             if (currentPage > totalPages) currentPage = totalPages;
             if (currentPage < 1) currentPage = 1;

             const start = (currentPage - 1) * rowsPerPage;
             const end = Math.min(start + rowsPerPage, total);

             // hide all rows first
             allMappingRows().forEach(r => r.style.display = 'none');

             // show current page rows from filtered set
             filtered.slice(start, end).forEach(r => r.style.display = '');

             startIndexEl.textContent = total === 0 ? 0 : start + 1;
             endIndexEl.textContent = end;
             totalEntriesEl.textContent = total;

             prevPageBtn.disabled = currentPage === 1;
             nextPageBtn.disabled = currentPage === totalPages || total === 0;

             // page number buttons
             paginationNumbersEl.innerHTML = '';
             for (let i = 1; i <= totalPages; i++) {
                 const btn = document.createElement('button');
                 btn.className =
                     `px-3 py-1.5 rounded-lg text-sm font-medium transition-colors ${i === currentPage ? 'bg-brand-teal text-white border border-brand-teal' : 'bg-white text-gray-600 border border-gray-300 hover:bg-gray-50'}`;
                 btn.textContent = i;
                 btn.addEventListener('click', () => {
                     currentPage = i;
                     renderTable();
                 });
                 paginationNumbersEl.appendChild(btn);
             }
         }

         // Delegated listener: when any row toggle changes update dataset and rerender
         document.addEventListener('change', (e) => {
             if (!e.target.classList.contains('mapping-toggle')) return;
             const row = e.target.closest('tr');
             if (!row) return;
             row.dataset.status = e.target.checked ? 'active' : 'inactive';

             const label = row.querySelector('.toggle-label');
             if (label) {
                 if (e.target.checked) {
                     label.textContent = 'Active';
                     label.classList.remove('bg-red-500');
                     label.classList.add('bg-brand-teal');
                 } else {
                     label.textContent = 'Inactive';
                     label.classList.remove('bg-brand-teal');
                     label.classList.add('bg-red-500');
                 }
             }

             currentPage = 1;
             renderTable();
         });

         // control listeners
         rowsPerPageSelect.addEventListener('change', () => {
             currentPage = 1;
             renderTable();
         });
         if (topToggle) topToggle.addEventListener('change', () => {
             currentPage = 1;
             renderTable();
         });
         prevPageBtn.addEventListener('click', () => {
             if (currentPage > 1) {
                 currentPage--;
                 renderTable();
             }
         });
         nextPageBtn.addEventListener('click', () => {
             currentPage++;
             renderTable();
         });

         // expose functions for existing code compatibility
         window.renderRows = renderTable;
         window.goToPage = function(pageNumber) {
             currentPage = pageNumber;
             renderTable();
         };

         // initialize toggles/labels from data-status and render
         allMappingRows().forEach(row => {
             const status = (row.dataset.status || '').toLowerCase();
             const toggle = row.querySelector('.mapping-toggle');
             const label = row.querySelector('.toggle-label');
             if (toggle) toggle.checked = status === 'active';
             if (label) {
                 if (status === 'active') {
                     label.textContent = 'Active';
                     label.classList.remove('bg-red-500');
                     label.classList.add('bg-brand-teal');
                 } else {
                     label.textContent = 'Inactive';
                     label.classList.remove('bg-brand-teal');
                     label.classList.add('bg-red-500');
                 }
             }
         });

         renderTable();

         addMappingBtn?.addEventListener('click', () => {
             addMappingModal.classList.remove('hidden');
             productSearch.focus();
         });

         closeAddModal?.addEventListener('click', () => {
             addMappingModal.classList.add('hidden');
             resetAddForm();
         });

         cancelAdd?.addEventListener('click', () => {
             addMappingModal.classList.add('hidden');
             resetAddForm();
         });

         function resetAddForm() {
             productRadios.forEach(r => r.checked = false);
             qboAddRadios.forEach(r => r.checked = false);
             createMappingBtn.disabled = true;
             document.querySelectorAll('#product-list label, #qbo-items-list-add label').forEach(label => {
                 label.classList.remove('border-brand-teal', 'bg-brand-sage/10');
                 label.classList.add('border-gray-200');
             });
         }

         function checkFormValidity() {
             const productSelected = Array.from(productRadios).some(r => r.checked);
             const qboSelected = Array.from(qboAddRadios).some(r => r.checked);
             createMappingBtn.disabled = !(productSelected && qboSelected);
         }

         productRadios.forEach(radio => {
             radio.addEventListener('change', () => {
                 document.querySelectorAll('#product-list label').forEach(label => {
                     label.classList.remove('border-brand-teal', 'bg-brand-sage/10');
                     label.classList.add('border-gray-200');
                 });
                 if (radio.checked) {
                     const label = radio.closest('label');
                     label.classList.remove('border-gray-200');
                     label.classList.add('border-brand-teal', 'bg-brand-sage/10');
                 }
                 checkFormValidity();
             });
         });

         qboAddRadios.forEach(radio => {
             radio.addEventListener('change', () => {
                 document.querySelectorAll('#qbo-items-list-add label').forEach(label => {
                     label.classList.remove('border-brand-teal', 'bg-brand-sage/10');
                     label.classList.add('border-gray-200');
                 });
                 if (radio.checked) {
                     const label = radio.closest('label');
                     label.classList.remove('border-gray-200');
                     label.classList.add('border-brand-teal', 'bg-brand-sage/10');
                 }
                 checkFormValidity();
             });
         });

         productSearch?.addEventListener('input', function() {
             const searchTerm = this.value.toLowerCase();
             const items = document.querySelectorAll('#product-list label');
             items.forEach(item => {
                 const text = item.textContent.toLowerCase();
                 item.style.display = text.includes(searchTerm) ? 'flex' : 'none';
             });
         });

         qboSearchAdd?.addEventListener('input', function() {
             const searchTerm = this.value.toLowerCase();
             const items = document.querySelectorAll('#qbo-items-list-add label');
             items.forEach(item => {
                 const text = item.textContent.toLowerCase();
                 item.style.display = text.includes(searchTerm) ? 'flex' : 'none';
             });
         });

         deleteButtons.forEach(btn => {
             btn.addEventListener('click', () => {
                 deleteModal.classList.remove('hidden');
             });
         });

         cancelDelete?.addEventListener('click', () => {
             deleteModal.classList.add('hidden');
         });

         confirmDelete?.addEventListener('click', () => {
             deleteModal.classList.add('hidden');
         });

         addMappingModal?.addEventListener('click', (e) => {
             if (e.target === addMappingModal) {
                 addMappingModal.classList.add('hidden');
                 resetAddForm();
             }
         });

         deleteModal?.addEventListener('click', (e) => {
             if (e.target === deleteModal) {
                 deleteModal.classList.add('hidden');
             }
         });

         const filterPills = document.querySelectorAll('.filter-pill');
         filterPills.forEach(pill => {
             pill.addEventListener('click', function() {
                 filterPills.forEach(p => {
                     p.classList.remove('bg-brand-teal', 'text-white');
                     p.classList.add('bg-gray-100', 'text-gray-600');
                 });
                 this.classList.remove('bg-gray-100', 'text-gray-600');
                 this.classList.add('bg-brand-teal', 'text-white');
             });
         });
     });






     // form Function


     //    MODAL OPEN / CLOSE
     // ================================
     document.addEventListener('DOMContentLoaded', () => {
         const createBtn = document.getElementById('create-mapping-btn');
         const modal = document.getElementById('mapping-form-modal');
         const closeBtn = document.getElementById('modal-close-btn');
         const cancelBtn = document.getElementById('modal-cancel-btn');

         const openModal = () => {
             modal.classList.remove('hidden');
             modal.classList.add('flex');
         };

         const closeModal = () => {
             modal.classList.add('hidden');
             modal.classList.remove('flex');
         };

         createBtn?.addEventListener('click', openModal);
         closeBtn?.addEventListener('click', closeModal);
         cancelBtn?.addEventListener('click', closeModal);

         modal.addEventListener('click', e => {
             if (e.target === modal) closeModal();
         });
     });


     /* ===============================
        SELECT2 (AS IT IS)
     ================================ */
     $(document).ready(function() {

         function initCreatableSelect(selector, initialData = []) {
             const $select = $(selector);

             initialData.forEach(item => {
                 $select.append(new Option(item, item, false, false));
             });

             $select.select2({
                 width: '100%',
                 tags: true,
                 placeholder: 'Select or type',
             });
         }

         initCreatableSelect('#interest-type', ['RI', 'ORRI', 'OR', 'WI', 'Misc']);
         initCreatableSelect('#product-type', ['Oil', 'Gas', 'LNG', 'Product']);
     });


     /* ===============================
        STATUS TOGGLE (🔥 MAIN FIX)
        Works for:
        - Static rows
        - Dynamically added rows
     ================================ */
     document.addEventListener('change', function(e) {
         if (!e.target.classList.contains('mapping-toggle')) return;

         const row = e.target.closest('tr');
         const label = row.querySelector('.toggle-label');

         if (!label) return;

         if (e.target.checked) {
             label.textContent = 'Active';
             label.classList.remove('text-red-500');
             label.classList.add('text-gray-700');
         } else {
             label.textContent = 'Inactive';
             label.classList.remove('text-gray-700');
             label.classList.add('text-white-500');
         }
     });


     /* ===============================
        EDIT BUTTON (NO UI CHANGE)
     ================================ */
     document.addEventListener('click', function(e) {
         const editBtn = e.target.closest('.edit-mapping');
         if (!editBtn) return;

         const row = editBtn.closest('tr');

         const interest = row.children[0].innerText.trim();
         const productType = row.children[1].innerText.trim();
         const product = row.children[2].innerText.trim();

         $('#interest-type').val(interest).trigger('change');
         $('#product-type').val(productType).trigger('change');
         document.getElementById('qbo-sale').value = product;

         const modal = document.getElementById('mapping-form-modal');
         modal.classList.remove('hidden');
         modal.classList.add('flex');

         row.remove(); // replace on save
     });


     /* ===============================
        FORM SUBMIT → ADD ROW
        (STRUCTURE FIXED)
     ================================ */
     document.addEventListener('DOMContentLoaded', () => {

         const form = document.getElementById('mapping-form');
         const tbody = document.getElementById('mapping-table-body');
         const modal = document.getElementById('mapping-form-modal');
         const totalRow = document.querySelectorAll('tr')

         form.addEventListener('submit', function(e) {
             e.preventDefault();

             const interest = document.getElementById('interest-type').value;
             const productType = document.getElementById('product-type').value;
             const product = document.getElementById('qbo-sale').value;

             const row = document.createElement('tr');
             row.className = 'h-[40px] mapping-row hover:bg-brand-sage/10';

             // **Set initial status**
             row.dataset.status = 'active';

             row.innerHTML = `
        <td class="px-6"><span class="text-sm font-medium text-gray-800">${interest}</span></td>
        <td class="px-6"><span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-brand-teal text-white">${productType}</span></td>
        <td class="px-6"><span class="text-sm text-gray-700">${`4020-${totalRow.length}-${interest}-${product}`}</span></td>
        <td class=""><span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-brand-teal text-white toggle-label">Active</span></td>

        <td class="px-6 flex items-center gap-3">
            <i class="fa-solid fa-circle-check text-green-700 text-lg"></i>
            <button class="edit-btn text-brand=terracotta hover:text-brand-teal transition-colors" title="Edit">
            <i data-fa-i2svg=""><svg class="svg-inline--fa fa-pencil fa-fw" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pencil" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path></svg></i></button>

            <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only mapping-toggle peer" checked>
                <div class="w-11 h-6 bg-gray-300 rounded-full
                    peer-checked:bg-brand-teal
                    after:content-[''] after:absolute after:top-[2px] after:left-[2px]
                    after:bg-white after:border after:rounded-full
                    after:h-5 after:w-5 after:transition-all
                    peer-checked:after:translate-x-full">
                </div>
            </label>
        </td>
    `;

             tbody.appendChild(row);

             form.reset();
             modal.classList.add('hidden');
             modal.classList.remove('flex');

             renderRows(); // immediately apply toggle filter
         });
     });
 </script>

 <style>
     .check-symbol {
         border: 1px solid #22C55E;
         width: 25px;
         height: 25px;
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         margin-top: 8px;
     }


     /* Form Container */
     .form-container {
         padding: 2rem !important;
         background-color: #ffffff !important;
         border-radius: 1rem !important;
         box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1) !important;
         max wit: 640px !important;
         margin: auto !important;
         font-family: 'Inter', sans-serif !important;
     }

     /* Form spacing */
     .form-space {
         display: flex !important;
         flex-direction: column !important;
         gap: 2rem !important;
     }

     /* Form Groups */
     .form-group label {
         display: block !important;
         margin-bottom: 0.5rem !important;
         font-weight: 600 !important;
         color: #374151 !important;
         /* Gray-700 */
         font-size: 0.875rem !important;
         /* text-sm */
     }

     .form-select,
     .form-input {
         width: 100% !important;
         height: 3rem !important;
         /* 48px */
         padding: 0 1rem !important;
         font-size: 0.875rem !important;
         border: 1px solid #D1D5DB !important;
         /* Gray-300 */
         border-radius: 1rem !important;
         /* rounded-xl */
         background-color: #ffffff !important;
         color: #1F2937 !important;
         /* Gray-800 */
         transition: all 0.2s !important;
         box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05) !important;
     }





     .select2-container .select2-selection--single {
         height: 46px !important;
         border-radius: 14px !important;
         padding-top: 8px !important;
         padding-left: 4px !important;
         border: 1px solid #dddddd !important;
     }

     .select2-container--default .select2-selection--single .select2-selection__arrow {
         height: 26px !important;
         position: absolute !important;
         top: 12px !important;
         right: 12px !important;
         width: 20px !important;
     }
 </style>
