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

    // Products from Product Mapping Screen - Sales values (First 20 rows)
    $salesProducts = [
        ['name' => '4020-01 RI-Oil Sales', 'description' => '4020-01 RI-Oil Sales', 'net_revenue' => 23.81],
        ['name' => '4020-02 RI-Gas Sales', 'description' => '4020-02 RI-Gas Sales', 'net_revenue' => 30.58],
        ['name' => '4020-03 RI-LNG Sales', 'description' => '4020-03 RI-LNG Sales', 'net_revenue' => 11.72],
        ['name' => '4020-04 RI-Product Sales', 'description' => '4020-04 RI-Product Sales', 'net_revenue' => 18.57],
        ['name' => '4020-05 ORRI-Oil Sales', 'description' => '4020-05 ORRI-Oil Sales', 'net_revenue' => 239.17],
        ['name' => '4020-06 ORRI-Gas Sales', 'description' => '4020-06 ORRI-Gas Sales', 'net_revenue' => 264.27],
        ['name' => '4020-07 ORRI-LNG Sales', 'description' => '4020-07 ORRI-LNG Sales', 'net_revenue' => 27.78],
        ['name' => '4020-08 ORRI-Product Sales', 'description' => '4020-08 ORRI-Product Sales', 'net_revenue' => 61.31],
        ['name' => '4020-09 OR-Oil Sales', 'description' => '4020-09 OR-Oil Sales', 'net_revenue' => 201.7],
        ['name' => '4020-10 OR-Gas Sales', 'description' => '4020-10 OR-Gas Sales', 'net_revenue' => 17.86],
        ['name' => '4020-11 OR-LNG Sales', 'description' => '4020-11 OR-LNG Sales', 'net_revenue' => 59.07],
        ['name' => '4020-12 OR-Product Sales', 'description' => '4020-12 OR-Product Sales', 'net_revenue' => 289.19],
        ['name' => '4020-13 WI-Oil Sales', 'description' => '4020-13 WI-Oil Sales', 'net_revenue' => 298.55],
        ['name' => '4020-14 WI-Gas Sales', 'description' => '4020-14 WI-Gas Sales', 'net_revenue' => 1.93],
        ['name' => '4020-15 WI-LNG Sales', 'description' => '4020-15 WI-LNG Sales', 'net_revenue' => 125.0],
        ['name' => '4020-16 WI-Product Sales', 'description' => '4020-16 WI-Product Sales', 'net_revenue' => 450.0],
        ['name' => '4020-17-MISC - Oil Sales', 'description' => '4020-17-MISC - Oil Sales', 'net_revenue' => 850.0],
        ['name' => '4020-18 MISC - Gas Sales', 'description' => '4020-18 MISC - Gas Sales', 'net_revenue' => 2400.0],
        ['name' => '4020-19-MISC - LNG Sales', 'description' => '4020-19-MISC - LNG Sales', 'net_revenue' => 6.8],
        [
            'name' => '4020-20 MISC - Product Sales',
            'description' => '4020-20 MISC - Product Sales',
            'net_revenue' => 22000.0,
        ],
    ];

    // Products from Product Mapping Screen - Tax values (Next 20 rows)
    $taxProducts = [
        ['name' => '5020-01 RI-Oil Tax', 'description' => '5020-01 RI-Oil Tax', 'net_revenue' => 3.57],
        ['name' => '5020-02 RI-Gas Tax', 'description' => '5020-02 RI-Gas Tax', 'net_revenue' => 5.51],
        ['name' => '5020-03 RI-LNG Tax', 'description' => '5020-03 RI-LNG Tax', 'net_revenue' => 1.76],
        ['name' => '5020-04 RI-Product Tax', 'description' => '5020-04 RI-Product Tax', 'net_revenue' => 2.79],
        ['name' => '5020-05 ORRI-Oil Tax', 'description' => '5020-05 ORRI-Oil Tax', 'net_revenue' => 35.88],
        ['name' => '5020-06 ORRI-Gas Tax', 'description' => '5020-06 ORRI-Gas Tax', 'net_revenue' => 39.64],
        ['name' => '5020-07 ORRI-LNG Tax', 'description' => '5020-07 ORRI-LNG Tax', 'net_revenue' => 4.17],
        ['name' => '5020-08 ORRI-Product Tax', 'description' => '5020-08 ORRI-Product Tax', 'net_revenue' => 9.2],
        ['name' => '5020-09 OR-Oil Tax', 'description' => '5020-09 OR-Oil Tax', 'net_revenue' => 30.26],
        ['name' => '5020-10 OR-Gas Tax', 'description' => '5020-10 OR-Gas Tax', 'net_revenue' => 2.68],
        ['name' => '5020-11 OR-LNG Tax', 'description' => '5020-11 OR-LNG Tax', 'net_revenue' => 8.86],
        ['name' => '5020-12 OR-Product Tax', 'description' => '5020-12 OR-Product Tax', 'net_revenue' => 43.38],
        ['name' => '5020-13 WI-Oil Tax', 'description' => '5020-13 WI-Oil Tax', 'net_revenue' => 44.78],
        ['name' => '5020-14 WI-Gas Tax', 'description' => '5020-14 WI-Gas Tax', 'net_revenue' => 0.29],
        ['name' => '5020-15 WI-LNG Tax', 'description' => '5020-15 WI-LNG Tax', 'net_revenue' => 18.75],
        ['name' => '5020-16 WI-Product Tax', 'description' => '5020-16 WI-Product Tax', 'net_revenue' => 67.5],
        ['name' => '4020-17-MISC - Oil Tax', 'description' => '4020-17-MISC - Oil Tax', 'net_revenue' => 127.5],
        ['name' => '5020-18 MISC - Gas Tax', 'description' => '5020-18 MISC - Gas Tax', 'net_revenue' => 360.0],
        ['name' => '5020-19-MISC - LNG Tax', 'description' => '5020-19-MISC - LNG Tax', 'net_revenue' => 1.02],
        [
            'name' => '5020-20 MISC - Product Tax',
            'description' => '5020-20 MISC - Product Tax',
            'net_revenue' => 3300.0,
        ],
    ];

    // Combine both arrays to create 40 rows total
    $products = array_merge($salesProducts, $taxProducts);

    // Calculate totals based on net_revenue
    $subtotal = 0;

    foreach ($products as &$product) {
        $subtotal += $product['net_revenue'];
    }

    // For demo purposes: assuming 15% tax on subtotal
    $totalTax = $subtotal * 0.15;
    $grandTotal = $subtotal + $totalTax;

    // Hardcoded USD->AED rate for preview
    $exchangeRate = 3.6725;
    $grandTotalAED = $grandTotal * $exchangeRate;

@endphp

<x-layout title="Invoice Preview">
    <div class="bg-white mx-auto">

        <!-- Top Header Section (New) -->
        <div class="flex justify-between items-start p-8">
            <!-- Left: Title & Company Info -->
            <div class="space-y-4">
                <h1 class="text-2xl font-bold text-[#0077c5] uppercase tracking-wide">Invoice</h1>

                <div class="text-xs text-gray-900 space-y-1">
                    <p class="font-bold">Craig's Design and Landscaping Services</p>
                    <p>noreply@quickbooks.com</p>
                    <p>123 Sierra Way</p>
                    <p>San Pablo CA 87999</p>

                    <div class="pt-2">
                        <button class="text-[#0077c5] font-medium hover:underline">Edit company</button>
                    </div>
                </div>
            </div>

            <!-- Right: Balance & Logo -->
            <div class="space-y-3 text-right">
                <div class="text-sm">
                    <span class="text-gray-500">Balance due (hidden):</span>
                    <span class="font-bold text-gray-900">$0.00</span>
                </div>

                <div
                    class="w-[180px] h-[80px] flex items-center justify-center ml-auto bg-white">
                    <svg class="w-24 h-24" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32 0L64 32L32 64L0 32L32 0Z" fill="#D6A77A" />
                        <path d="M32 8L56 32L32 56L8 32L32 8Z" fill="#F7F9F7" />
                        <path d="M32 16L48 32L32 48L16 32L32 16Z" fill="#2A6F6A" />
                    </svg>
                </div>
                <div class="flex justify-center">
                    <span class="font-bold text-xl whitespace-nowrap">Mineral Link</span>
                </div>
            </div>
        </div>

        <!-- Form Fields Section -->
        <div class="space-y-6 bg-[#EBF4FA] p-8">

            <!-- Customer & Email Row (Full Width / stacked) -->
            <div class="grid grid-cols-1 gap-4 max-w-4xl">
                <!-- Customer Dropdown -->
                <div class="relative w-1/3">
                    <select disabled
                        class="w-full px-3 py-1 bg-white border border-gray-300 rounded text-sm text-gray-900 appearance-none bg-no-repeat bg-[right_0.5rem_center] bg-[length:1em_1em] opacity-80"
                        style="background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E');">
                        <option selected>{{ $billTo['name'] }}</option>
                    </select>
                </div>

                <!-- Email Input -->
                <div class="relative w-2/3">
                    <input type="email" value="{{ $billTo['email'] }}" disabled
                        class="w-full px-3 py-1 border border-gray-300 rounded text-sm text-gray-900 bg-white" />
                    <button class="text-[#0077c5] text-xs font-medium mt-1 hover:underline">3 Cc/1 Bcc</button>
                    <!-- Small icon placeholder inside input -->
                    <div class="absolute right-3 top-1 text-gray-400">
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                </div>
            </div>

            <!-- Bill To & Details Split -->
            <div class="flex gap-20 items-start pt-2">

                <!-- Left: Bill To -->
                <div class="w-1/3">
                    <label class="block text-gray-500 text-xs mb-1">Bill to</label>
                    <textarea disabled rows="3"
                        class="w-full px-3 py-2 border border-gray-300 rounded text-sm text-gray-900 bg-white resize-none font-sans">{{ $billTo['address'] }}</textarea>
                </div>

                <!-- Right: Terms & Dates (Aligned to right of Bill To) -->
                <div class="w-[300px] space-y-3">
                    <!-- Invoice No Removed -->

                    <div class="flex items-center gap-4 mb-3">
                        <label class="w-24 text-gray-500 text-xs text-right">Terms</label>
                        <div class="flex-1 relative">
                            <select disabled
                                class="w-full px-3 py-1 border border-gray-300 rounded text-sm text-gray-900 bg-white appearance-none bg-no-repeat bg-[right_0.5rem_center] bg-[length:0.8em_0.8em]"
                                style="background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E');">
                                <option selected>{{ $invoice['terms'] }}</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 mb-3">
                        <label class="w-24 text-gray-500 text-xs text-right">Invoice date</label>
                        <div class="flex-1 relative">
                            <input type="text" value="{{ date('m/d/Y', strtotime($invoice['date'])) }}" disabled
                                class="w-full px-3 py-1 border border-gray-300 rounded text-sm text-gray-900 bg-white" />
                            <i class="fa-regular fa-calendar absolute right-3 top-1 text-gray-400"></i>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <label class="w-24 text-gray-500 text-xs text-right">Due date</label>
                        <div class="flex-1 relative">
                            <input type="text" value="{{ date('m/d/Y', strtotime($invoice['due_date'])) }}" disabled
                                class="w-full px-3 py-1 border border-gray-300 rounded text-sm text-gray-900 bg-white" />
                            <i class="fa-regular fa-calendar absolute right-3 top-1 text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tax Registration Row -->
        <div class="flex gap-8 p-8">
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
        <div class="p-8">
            <label class="block text-gray-500 text-xs mb-1">Invoice amounts <span
                    class="text-gray-400 font-normal">(hidden)</span></label>
            <div class="relative w-1/3">
                <select disabled
                    class="w-full px-3 py-1 border border-gray-300 rounded text-sm text-gray-900 bg-white appearance-none bg-no-repeat bg-[right_0.75rem_center] bg-[length:0.8em_0.8em]"
                    style="background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E');">
                    <option selected>Exclusive of Tax</option>
                </select>
            </div>
        </div>

        <!-- Products Table -->
        <div class="overflow-x-auto p-8">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <!-- Two empty columns at the start -->
                        <th
                            class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase w-12 border-r border-gray-200">
                        </th>
                        <th
                            class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase w-12 border-r border-gray-200">
                        </th>
                        <th
                            class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase w-12 border-r border-gray-200">
                            #</th>
                        <!-- Replaced Category with Service Date -->
                        <th
                            class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase w-32 border-r border-gray-200">
                            Service Date</th>
                        <th
                            class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase border-r border-gray-200">
                            Product/Service</th>
                        <th
                            class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase border-r border-gray-200">
                            Description</th>
                        <th
                            class="px-4 py-3 text-right text-xs font-semibold text-gray-600 uppercase w-20 border-r border-gray-200">
                            Qty</th>
                        <th
                            class="px-4 py-3 text-right text-xs font-semibold text-gray-600 uppercase w-28 border-r border-gray-200">
                            Rate</th>
                        <!-- VAT column removed -->
                        <th class="px-4 py-3 text-right text-xs font-semibold text-gray-600 uppercase w-32">Amount</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($products as $index => $product)
                        <tr class="hover:bg-blue-50/30 transition-colors">
                            <!-- Two empty columns at the start -->
                            <td class="px-4 py-2 border-r border-gray-200">
                            </td>
                            <td class="px-4 py-2 border-r border-gray-200">
                            </td>
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
                                <span class="text-sm text-gray-900">1</span>
                            </td>
                            <!-- Rate column: net_revenue without $ sign -->
                            <td class="px-4 py-2 text-right border-r border-gray-200">
                                <span
                                    class="text-sm text-gray-900">{{ number_format($product['net_revenue'], 2) }}</span>
                            </td>
                            <!-- Amount column: net_revenue with $ sign (VAT column removed) -->
                            <td class="px-4 py-2 text-right">
                                <span
                                    class="text-sm font-semibold text-gray-900">${{ number_format($product['net_revenue'], 2) }}</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Bottom Section: Redesigned -->
        <div class="grid grid-cols-2 gap-20 p-8">
            <!-- Left: Notes/Attachments (Matching uploaded_image_0) -->
            <div class="space-y-6">
                <h4 class="text-sm font-semibold text-gray-800">Customer payment options</h4>

                <!-- Notes -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Note to customer</label>
                    <textarea disabled rows="3"
                        class="w-full px-3 py-2 border border-gray-300 rounded text-sm text-gray-600 bg-white resize-none"></textarea>
                </div>

                <!-- Memo -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Memo on statement (hidden)</label>
                    <textarea disabled rows="3"
                        placeholder="This memo will not show up on your invoice, but will appear on the statement."
                        class="w-full px-3 py-2 border border-gray-300 rounded text-sm text-gray-600 bg-white resize-none"></textarea>
                </div>

                <div>
                    <!-- Add Attachment dashed Box -->
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 py-8 text-center bg-white">
                        <button class="text-[#0077c5] font-semibold text-sm hover:underline">Add
                            attachment</button>
                        <p class="text-xs text-gray-500 mt-1">Max file size: 20 MB</p>
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
        <div class="mt-6 border-t border-gray-300 pt-6 flex justify-end items-center p-8">

            <div class="pr-4 space-x-2">
                <button
                    class="bg-brand-teal text-white font-semibold px-6 py-2.5 rounded-lg hover:bg-brand-teal/90 transition-colors text-sm flex items-center">Post
                    to QuickBooks</button>
            </div>
        </div>

    </div>
</x-layout>
