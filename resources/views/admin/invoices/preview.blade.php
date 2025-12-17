@php
    // Hard-coded invoice data matching QuickBooks structure
    $invoice = [
        'number' => '0053-MING-00004',
        'terms' => 'Net 30',
        'date' => '2025-01-09',
        'due_date' => '2025-01-10',
        'balance_due' => 324234.9,
    ];

    $billTo = [
        'name' => 'CONOCOPHILLIPS CO.',
        'email' => 'info@conocophillips.com',
        'address' => "conocophillips co Ltd\nBuilding no: 6771\nAl Qana",
    ];

    // Products from Product Mapping Screen
    $products = [
        // RI Series
        [
            'name' => '4201-01-RI-Oil',
            'category' => 'Oil',
            'description' => 'Revenue Interest - Oil',
            'qty' => 1,
            'rate' => 2500.0,
            'vat' => 15,
        ],
        [
            'name' => '4201-02-RI - Gas',
            'category' => 'Gas',
            'description' => 'Revenue Interest - Gas',
            'qty' => 850,
            'rate' => 12.5,
            'vat' => 18,
        ],
        [
            'name' => '4201-03-RI - LNG',
            'category' => 'LNG',
            'description' => 'Revenue Interest - LNG',
            'qty' => 500,
            'rate' => 8.75,
            'vat' => 15,
        ],
        [
            'name' => '4201-04-RI - Product',
            'category' => 'Product',
            'description' => 'Revenue Interest - Product',
            'qty' => 30,
            'rate' => 1850.0,
            'vat' => 20,
        ],
        // ORRI Series
        [
            'name' => '4201-05-ORRI - Oil',
            'category' => 'Oil',
            'description' => 'Overriding Royalty Interest - Oil',
            'qty' => 1,
            'rate' => 15000.0,
            'vat' => 18,
        ],
        [
            'name' => '4201-06-ORRI - Gas',
            'category' => 'Gas',
            'description' => 'Overriding Royalty Interest - Gas',
            'qty' => 25,
            'rate' => 450.0,
            'vat' => 15,
        ],
        [
            'name' => '4201-07-ORRI - LNG',
            'category' => 'LNG',
            'description' => 'Overriding Royalty Interest - LNG',
            'qty' => 1,
            'rate' => 8500.0,
            'vat' => 18,
        ],
        [
            'name' => '4201-08-ORRI - Product',
            'category' => 'Product',
            'description' => 'Overriding Royalty Interest - Product',
            'qty' => 12,
            'rate' => 3200.0,
            'vat' => 15,
        ],
        // OR Series
        [
            'name' => '4201-09-OR - Oil',
            'category' => 'Oil',
            'description' => 'Overriding Royalty - Oil',
            'qty' => 5000,
            'rate' => 4.25,
            'vat' => 20,
        ],
        [
            'name' => '4201-10-OR - Gas',
            'category' => 'Gas',
            'description' => 'Overriding Royalty - Gas',
            'qty' => 3,
            'rate' => 12500.0,
            'vat' => 20,
        ],
        [
            'name' => '4201-11-OR - LNG',
            'category' => 'LNG',
            'description' => 'Overriding Royalty - LNG',
            'qty' => 1,
            'rate' => 7800.0,
            'vat' => 15,
        ],
        [
            'name' => '4201-12-OR - Product',
            'category' => 'Product',
            'description' => 'Overriding Royalty - Product',
            'qty' => 50,
            'rate' => 125.0,
            'vat' => 18,
        ],
        // WI Series
        [
            'name' => '4201-13-WI - Oil',
            'category' => 'Oil',
            'description' => 'Working Interest - Oil',
            'qty' => 40,
            'rate' => 850.0,
            'vat' => 15,
        ],
        [
            'name' => '4201-14-WI - Gas',
            'category' => 'Gas',
            'description' => 'Working Interest - Gas',
            'qty' => 20,
            'rate' => 2400.0,
            'vat' => 18,
        ],
        [
            'name' => '4201-15-WI - LNG',
            'category' => 'LNG',
            'description' => 'Working Interest - LNG',
            'qty' => 10000,
            'rate' => 6.8,
            'vat' => 20,
        ],
        [
            'name' => '4201-16-WI - Product',
            'category' => 'Product',
            'description' => 'Working Interest - Product',
            'qty' => 1,
            'rate' => 22000.0,
            'vat' => 15,
        ],
        // MISC Series
        [
            'name' => '4201-17-MISC - Oil',
            'category' => 'Oil',
            'description' => 'Miscellaneous Interest - Oil',
            'qty' => 1,
            'rate' => 4500.0,
            'vat' => 18,
        ],
        [
            'name' => '4201-18-MISC - Gas',
            'category' => 'Gas',
            'description' => 'Miscellaneous Interest - Gas',
            'qty' => 150000,
            'rate' => 0.45,
            'vat' => 15,
        ],
        [
            'name' => '4201-19-MISC - LNG',
            'category' => 'LNG',
            'description' => 'Miscellaneous Interest - LNG',
            'qty' => 120,
            'rate' => 250.0,
            'vat' => 18,
        ],
        [
            'name' => '4201-20-MISC - Product',
            'category' => 'Product',
            'description' => 'Miscellaneous Interest - Product',
            'qty' => 1,
            'rate' => 18500.0,
            'vat' => 15,
        ],
    ];

    // Calculate totals
    $subtotal = 0;
    $taxBreakdown = ['15' => 0, '18' => 0, '20' => 0];

    foreach ($products as &$product) {
        $amount = $product['qty'] * $product['rate'];
        $tax = $amount * ($product['vat'] / 100);
        $product['amount'] = $amount; // Net amount
        $product['tax'] = $tax;
        $product['total'] = $amount + $tax; // Gross amount

        $subtotal += $amount;
        $taxBreakdown[$product['vat']] += $tax;
    }

    $totalTax = array_sum($taxBreakdown);
    $grandTotal = $subtotal + $totalTax;

    // Hardcoded USD->AED rate for preview
    $exchangeRate = 3.6725;
    $grandTotalAED = $grandTotal * $exchangeRate;

@endphp

<x-layout title="Invoice Preview">
    <div class="bg-white p-8 mx-auto">

        <!-- Header Section -->
        <div class="flex gap-20 mb-8">
            <!-- Left Column: Customer & Addresses -->
            <div class="flex-1 space-y-6">
                <!-- Customer Dropdown -->
                <div class="relative">
                    <select disabled
                        class="w-1/2 px-3 py-2 bg-white border border-gray-300 rounded text-sm text-gray-900 appearance-none bg-no-repeat bg-[right_0.5rem_center] bg-[length:1em_1em] opacity-80"
                        style="background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E');">
                        <option selected>{{ $billTo['name'] }}</option>
                    </select>
                </div>

                <!-- Email Input -->
                <div class="relative">
                    <input type="email" value="{{ $billTo['email'] }}" disabled
                        class="w-full px-3 py-2 border border-gray-300 rounded text-sm text-gray-900 bg-white" />
                    <button class="text-[#0077c5] text-xs font-medium mt-1 hover:underline">3 Cc/1 Bcc</button>
                    <!-- Small icon placeholder inside input -->
                    <div class="absolute right-3 top-2.5 text-gray-400">
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                </div>

                <!-- Billing Address -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-500 text-xs mb-1">Bill to</label>
                        <textarea disabled rows="4"
                            class="w-full px-3 py-2 border border-gray-300 rounded text-sm text-gray-900 bg-white resize-none font-sans">{{ $billTo['address'] }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Right Column: Invoice Details -->
            <div class="w-[400px] space-y-4 pt-4">
                <div class="flex items-center gap-4">
                    <label class="w-32 text-gray-500 text-xs">Invoice no.</label>
                    <input type="text" value="{{ $invoice['number'] }}" disabled
                        class="flex-1 px-3 py-1.5 border border-gray-300 rounded text-sm text-gray-900 bg-white" />
                </div>
                <div class="flex items-center gap-4">
                    <label class="w-32 text-gray-500 text-xs">Terms</label>
                    <div class="flex-1 relative">
                        <select disabled
                            class="w-full px-3 py-1.5 border border-gray-300 rounded text-sm text-gray-900 bg-white appearance-none bg-no-repeat bg-[right_0.5rem_center] bg-[length:0.8em_0.8em]"
                            style="background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E');">
                            <option selected>{{ $invoice['terms'] }}</option>
                        </select>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <label class="w-32 text-gray-500 text-xs">Invoice date</label>
                    <div class="flex-1 relative">
                        <input type="text" value="{{ date('m/d/Y', strtotime($invoice['date'])) }}" disabled
                            class="w-full px-3 py-1.5 border border-gray-300 rounded text-sm text-gray-900 bg-white" />
                        <i class="fa-regular fa-calendar absolute right-3 top-2 text-gray-400"></i>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <label class="w-32 text-gray-500 text-xs">Due date</label>
                    <div class="flex-1 relative">
                        <input type="text" value="{{ date('m/d/Y', strtotime($invoice['due_date'])) }}" disabled
                            class="w-full px-3 py-1.5 border border-gray-300 rounded text-sm text-gray-900 bg-white" />
                        <i class="fa-regular fa-calendar absolute right-3 top-2 text-gray-400"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tax Registration Row -->
        <div class="flex gap-8 mb-8">
            <div class="w-1/2">
                <label class="block text-gray-500 text-xs mb-1">Tax Registration Number</label>
                <input type="text" disabled
                    class="w-full px-3 py-2 border border-gray-300 rounded text-sm bg-white" />
                <p class="text-xs text-gray-400 mt-1">(hidden)</p>
            </div>
            <div class="w-1/2">
                <label class="block text-gray-500 text-xs mb-1">null</label>
                <input type="text" disabled
                    class="w-full px-3 py-2 border border-gray-300 rounded text-sm bg-white" />
                <p class="text-xs text-gray-400 mt-1">(hidden)</p>
            </div>
        </div>

        <!-- Invoice Amounts Selector -->
        <div class="mb-6">
            <label class="block text-gray-500 text-xs mb-1">Invoice amounts <span
                    class="text-gray-400 font-normal">(hidden)</span></label>
            <div class="relative w-1/3">
                <select disabled
                    class="w-full px-3 py-2 border border-gray-300 rounded text-sm text-gray-900 bg-white appearance-none bg-no-repeat bg-[right_0.75rem_center] bg-[length:0.8em_0.8em]"
                    style="background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E');">
                    <option selected>Exclusive of Tax</option>
                </select>
            </div>
        </div>

        <!-- Products Table -->
        <div class="overflow-x-auto mb-8 border border-gray-300 rounded-sm">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th
                            class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase w-12 border-r border-gray-200">
                            #</th>
                        <!-- Replaced Category with Service Date -->
                        <th
                            class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase w-32 border-r border-gray-200">
                            Service Date</th>
                        <th
                            class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase border-r border-gray-200">
                            Product or service</th>
                        <th
                            class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase border-r border-gray-200">
                            Description</th>
                        <th
                            class="px-4 py-3 text-right text-xs font-semibold text-gray-600 uppercase w-20 border-r border-gray-200">
                            Qty</th>
                        <th
                            class="px-4 py-3 text-right text-xs font-semibold text-gray-600 uppercase w-28 border-r border-gray-200">
                            Rate</th>
                        <th
                            class="px-4 py-3 text-right text-xs font-semibold text-gray-600 uppercase w-28 border-r border-gray-200">
                            VAT</th>
                        <th class="px-4 py-3 text-right text-xs font-semibold text-gray-600 uppercase w-32">Amount</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($products as $index => $product)
                        <tr class="hover:bg-blue-50/30 transition-colors">
                            <td class="px-4 py-2 border-r border-gray-200">
                                <span class="text-sm text-gray-500">{{ $index + 1 }}</span>
                            </td>
                            <!-- Empty Service Date -->
                            <td class="px-4 py-2 border-r border-gray-200">
                            </td>
                            <td class="px-4 py-2 border-r border-gray-200">
                                <span class="text-sm font-medium text-gray-900">{{ $product['name'] }}</span>
                            </td>
                            <td class="px-4 py-2 border-r border-gray-200">
                                <span class="text-sm text-gray-600">{{ $product['description'] }}</span>
                            </td>
                            <td class="px-4 py-2 text-right border-r border-gray-200">
                                <span class="text-sm text-gray-900">{{ number_format($product['qty']) }}</span>
                            </td>
                            <td class="px-4 py-2 text-right border-r border-gray-200">
                                <span
                                    class="text-sm text-gray-900 text-gray-400 text-right">{{ number_format($product['rate'], 2) }}</span>
                            </td>
                            <td class="px-4 py-2 text-right border-r border-gray-200">
                                <div class="text-right">
                                    <span class="text-sm text-gray-900">{{ number_format($product['tax'], 2) }}</span>
                                    <span class="text-xs text-gray-500 block">({{ $product['vat'] }}%)</span>
                                </div>
                            </td>
                            <td class="px-4 py-2 text-right">
                                <span
                                    class="text-sm font-semibold text-gray-900">{{ number_format($product['total'], 2) }}</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Bottom Section: Redesigned -->
        <div class="grid grid-cols-2 gap-20">
            <!-- Left: Notes/Attachments (Matching uploaded_image_0) -->
            <div class="space-y-6">
                <h4 class="text-sm font-semibold text-gray-800">Customer payment options</h4>

                <!-- Notes -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Note to customer</label>
                    <textarea disabled rows="3"
                        class="w-full px-3 py-2 border border-gray-300 rounded text-sm text-gray-600 bg-white resize-none">Thank you for your business. Payment is due within 30 days. Please include invoice number with your payment.</textarea>
                </div>

                <!-- Memo -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Memo on statement (hidden)</label>
                    <textarea disabled rows="3"
                        placeholder="This memo will not show up on your invoice, but will appear on the statement."
                        class="w-full px-3 py-2 border border-gray-300 rounded text-sm text-gray-600 bg-white resize-none"></textarea>
                </div>

                <!-- Attachments Section -->
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label class="block text-sm font-semibold text-gray-700">Attachments</label>
                        <label class="flex items-center text-xs text-gray-500 gap-1">
                            <input type="checkbox" disabled class="rounded border-gray-300 text-[#0077c5]">
                            Select All
                        </label>
                    </div>

                    <div class="space-y-3">
                        <!-- File Item -->
                        <div class="flex items-start justify-between">
                            <div class="flex items-start gap-2">
                                <input type="checkbox" checked disabled
                                    class="mt-1 rounded border-gray-300 text-[#0077c5]">
                                <div>
                                    <p class="text-sm text-[#0077c5] hover:underline cursor-pointer">NPD-Mingora
                                        SalesTrack - Service Agreement.pdf</p>
                                    <p class="text-xs text-gray-500">Saudi PJP Company Ltd - Sep 14, 2022.pdf</p>
                                    <p class="text-xs text-gray-400">344KB</p>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-gray-600"><i
                                    class="fa-solid fa-xmark"></i></button>
                        </div>

                        <!-- Add Attachment dashed Box -->
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 py-8 text-center bg-white">
                            <button class="text-[#0077c5] font-semibold text-sm hover:underline">Add
                                attachment</button>
                            <p class="text-xs text-gray-500 mt-1">Max file size: 20 MB</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Financial Summary (Matching uploaded_image_1) -->
            <div>
                <div class="space-y-4 text-right">

                    <!-- Subtotal -->
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-gray-600">Subtotal</span>
                        <span class="text-gray-900 font-medium">USD ${{ number_format($subtotal, 2) }}</span>
                    </div>

                    <!-- Discount -->
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-gray-600">Discount</span>
                        <div class="flex items-center gap-4">
                            <span class="text-gray-900">0%</span>
                            <div class="flex border border-gray-300 rounded-full overflow-hidden h-6 w-16 bg-gray-200">
                                <div
                                    class="w-1/2 flex items-center justify-center bg-white text-xs font-bold shadow-sm">
                                    %</div>
                                <div class="w-1/2 flex items-center justify-center text-gray-500 text-xs">$</div>
                            </div>
                            <span class="text-gray-900 min-w-[80px]">USD $0.00</span>
                        </div>
                    </div>

                    <!-- VAT -->
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-gray-600">VAT (Multiple) on ${{ number_format($subtotal, 2) }}</span>
                        <span class="text-gray-900">USD ${{ number_format($totalTax, 2) }}</span>
                    </div>

                    <!-- Invoice Total -->
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-base font-bold text-gray-900">Invoice total</span>
                        <span class="text-base font-bold text-gray-900">USD
                            ${{ number_format($grandTotal, 2) }}</span>
                    </div>

                    <!-- Exchange Rate Info -->
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-gray-600">AED (hidden)</span>
                        <span class="text-gray-900 font-medium">AED {{ number_format($grandTotalAED, 2) }}</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-gray-600">Exchange rate (hidden)</span>
                        <span class="text-gray-900">1 USD = {{ $exchangeRate }} AED</span>
                    </div>

                    <div class="pt-2">
                        <button class="text-[#0077c5] text-sm font-semibold hover:underline">Edit totals</button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer Actions (Unstuck / Static) -->
        <div class="mt-12 border-t border-gray-300 pt-6 flex justify-end items-center">
            
            <div class="pr-4 space-x-2">
                <button
                    class="bg-brand-teal text-white font-semibold px-6 py-2.5 rounded-lg hover:bg-brand-teal/90 transition-colors text-sm flex items-center">Post to QuickBooks</button>
            </div>
        </div>

    </div>
</x-layout>
