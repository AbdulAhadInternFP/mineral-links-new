@php
    // Hard-coded invoice data matching QuickBooks structure
    $invoice = [
        'number' => '0053-MING-00004',
        'terms' => 'Due On Receipt',
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
        <section id="back_navigation" class="mb-4">
  <a href="{{ route('admin.invoice.summarize') }}"
            class="inline-flex items-center px-6 py-2 text-sm font-bold text-white bg-[#D6A77A] rounded-xl hover:bg-[#C59669] transition-colors shadow-sm">
            <i class="fa-solid fa-arrow-left-long mr-2"></i>
            <span>Back</span>
        </a>
    </section>
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

                <div class="w-[180px] h-[80px] flex items-center gap-2 justify-center ml-auto bg-white">
                    <svg class="w-14 h-14" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32 0L64 32L32 64L0 32L32 0Z" fill="#D6A77A" />
                        <path d="M32 8L56 32L32 56L8 32L32 8Z" fill="#F7F9F7" />
                        <path d="M32 16L48 32L32 48L16 32L32 16Z" fill="#2A6F6A" />
                    </svg> <span class="font-bold text-xl whitespace-nowrap">Mineral Link</span>
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
                    <button class="text-[#0077c5] text-xs font-medium mt-1 hover:underline">Edit Customer</button>
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
        <div class="p-8 hidden">
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
            <h5 class="mb-1 font-semibold">Product or service</h5>
            <table class="w-full">
                <thead class=" border-b border-gray-200">
                    <tr>
                        <!-- Two empty columns at the start -->
                        <th
                            class="px-4 py-2 text-left text-xs font-semibold text-gray-600 uppercase w-12 border-r border-gray-200">
                        </th>
                        <th
                            class="px-4 py-2 text-left text-xs font-semibold text-gray-600 uppercase w-12 border-r border-gray-200">
                        </th>
                        <th
                            class="px-4 text-right py-2   text-xs font-semibold text-gray-600 uppercase w-12 border-r border-gray-200">
                            #</th>
                        <!-- Replaced Category with Service Date -->
                        <th
                            class="px-4 py-2 text-left text-xs font-semibold text-gray-600 uppercase w-32 border-r border-gray-200">
                            Service Date</th>
                        <th
                            class="px-4 py-2 text-left text-xs font-semibold text-gray-600 uppercase border-r border-gray-200">
                            Product/Service</th>
                        <th
                            class="px-4 py-2 text-left text-xs font-semibold text-gray-600 uppercase border-r border-gray-200">
                            Description</th>
                        <th
                            class="px-4 py-2 text-right text-xs font-semibold text-gray-600 uppercase w-20 border-r border-gray-200">
                            Qty</th>
                        <th
                            class="px-4 py-2 text-right text-xs font-semibold text-gray-600 uppercase w-28 border-r border-gray-200">
                            Rate</th>
                        <!-- VAT column removed -->
                        <th class="px-4 py-2 text-right text-xs font-semibold text-gray-600 uppercase w-32">Amount</th>
                        <th
                            class="px-4 py-2 text-left border-l border-gray-200 text-xs font-semibold text-gray-600 uppercase w-12 border-r border-gray-200">
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($products as $index => $product)
                        <tr class="hover:bg-blue-50/30 transition-colors">
                            <td class="px-4 py-1 border-r border-gray-200">
                            </td>
                            <td class="px-4 py-1 border-r border-gray-200"> <svg xmlns="http://www.w3.org/2000/svg"
                                    fill="#999" width="20px" height="20px" viewBox="0 0 32 32">
                                    <path
                                        d="M 12 6 C 10.894531 6 10 6.894531 10 8 C 10 9.105469 10.894531 10 12 10 C 13.105469 10 14 9.105469 14 8 C 14 6.894531 13.105469 6 12 6 Z M 20 6 C 18.894531 6 18 6.894531 18 8 C 18 9.105469 18.894531 10 20 10 C 21.105469 10 22 9.105469 22 8 C 22 6.894531 21.105469 6 20 6 Z M 12 14 C 10.894531 14 10 14.894531 10 16 C 10 17.105469 10.894531 18 12 18 C 13.105469 18 14 17.105469 14 16 C 14 14.894531 13.105469 14 12 14 Z M 20 14 C 18.894531 14 18 14.894531 18 16 C 18 17.105469 18.894531 18 20 18 C 21.105469 18 22 17.105469 22 16 C 22 14.894531 21.105469 14 20 14 Z M 12 22 C 10.894531 22 10 22.894531 10 24 C 10 25.105469 10.894531 26 12 26 C 13.105469 26 14 25.105469 14 24 C 14 22.894531 13.105469 22 12 22 Z M 20 22 C 18.894531 22 18 22.894531 18 24 C 18 25.105469 18.894531 26 20 26 C 21.105469 26 22 25.105469 22 24 C 22 22.894531 21.105469 22 20 22 Z" />
                                </svg> </td>
                            <td class="px-4 py-1 border-r text-right border-gray-200">
                                <span class="text-sm text-gray-500">{{ $index + 1 }}</span>
                            </td>
                            <!-- Empty Service Date -->
                            <td class="px-4 py-1 border-r border-gray-200">
                            </td>
                            <td class="px-4 py-1 border-r border-gray-200">
                                <span class="text-sm font-medium text-gray-900">{{ $product['name'] }}</span>
                            </td>
                            <td class="px-4 py-1 border-r border-gray-200">
                                <span class="text-sm text-gray-600">{{ $product['description'] }}</span>
                            </td>
                            <td class="px-4 py-1 text-right border-r border-gray-200">
                                <span class="text-sm text-gray-900">1</span>
                            </td>
                            <!-- Rate column: net_revenue without $ sign -->
                            <td class="px-4 py-1 text-right border-r border-gray-200">
                                <span
                                    class="text-sm text-gray-900">{{ number_format($product['net_revenue'], 2) }}</span>
                            </td>
                            <!-- Amount column: net_revenue with $ sign (VAT column removed) -->
                            <td class="px-4 py-1 text-right border-r border-gray-200">
                                <span
                                    class="text-sm font-semibold text-gray-900">${{ number_format($product['net_revenue'], 2) }}</span>
                            </td>
                            <td class="px-4 py-1 border-r  border-gray-200">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Table Actions -->
            <div class="px-8 flex items-center gap-4 py-4 border-b-2 border-gray-200  ">
                <div class="flex items-center">
                    <button
                        class="bg-[#E0E2E7] hover:bg-[#D1D3D8] text-[#393A3D] font-bold py-1 px-4 rounded-l border-r border-[#BDBFC3] text-xs transition-colors shadow-sm">
                        Add product or service
                    </button>
                    <div
                        class="bg-[#E0E2E7] hover:bg-[#D1D3D8] text-[#393A3D] py-1 px-2 rounded-r text-xs transition-colors cursor-pointer shadow-sm flex items-center">
                        <i class="fa-solid fa-chevron-down text-[10px]"></i>
                    </div>
                </div>
                <button
                    class="bg-[#E0E2E7] hover:bg-[#D1D3D8] text-[#393A3D] font-bold py-1 px-4 rounded text-xs transition-colors shadow-sm">
                    Clear all lines
                </button>
            </div>
        </div>

        <!-- Bottom Section: Redesigned -->
        <div class="grid grid-cols-2 gap-20 p-8">
            <!-- Left: Notes/Attachments (Matching uploaded_image_0) -->
            <div class="space-y-6">
                <div>
                    <div class="flex items-center gap-2">
                        <h4 class="text-sm font-semibold text-gray-800">Customer payment options</h4>
                        <button class="text-[#0077c5] text-xs font-medium mt-1 hover:underline">Edit</button>
                    </div>
                    <div class="flex gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 -9 58 58"
                            fill="none">
                            <rect x="0.5" y="0.5" width="57" height="39" rx="3.5" fill="white"
                                stroke="#F3F3F3" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.5771 14.9265C17.1553 15.4313 16.4803 15.8294 15.8053 15.7725C15.7209 15.09 16.0513 14.3649 16.4381 13.9171C16.8599 13.3981 17.5982 13.0284 18.1959 13C18.2662 13.7109 17.992 14.4076 17.5771 14.9265ZM18.1888 15.9076C17.5942 15.873 17.0516 16.0884 16.6133 16.2624C16.3313 16.3744 16.0924 16.4692 15.9107 16.4692C15.7068 16.4692 15.4581 16.3693 15.1789 16.2571C14.813 16.1102 14.3947 15.9422 13.956 15.9502C12.9506 15.9645 12.0154 16.5403 11.5021 17.4573C10.4474 19.2915 11.2279 22.0071 12.2474 23.5C12.7467 24.2393 13.3443 25.0498 14.1318 25.0213C14.4783 25.0081 14.7275 24.9012 14.9854 24.7905C15.2823 24.6631 15.5908 24.5308 16.0724 24.5308C16.5374 24.5308 16.8324 24.6597 17.1155 24.7834C17.3847 24.9011 17.6433 25.014 18.0271 25.0071C18.8428 24.9929 19.356 24.2678 19.8553 23.5284C20.394 22.7349 20.6307 21.9605 20.6667 21.843L20.6709 21.8294C20.67 21.8285 20.6634 21.8254 20.6516 21.82C20.4715 21.7366 19.095 21.0995 19.0818 19.391C19.0686 17.957 20.1736 17.2304 20.3476 17.116C20.3582 17.109 20.3653 17.1043 20.3685 17.1019C19.6654 16.0498 18.5685 15.936 18.1888 15.9076ZM23.8349 24.9289V13.846H27.9482C30.0717 13.846 31.5553 15.3246 31.5553 17.4858C31.5553 19.6469 30.0435 21.1398 27.892 21.1398H25.5365V24.9289H23.8349ZM25.5365 15.2962H27.4982C28.9748 15.2962 29.8185 16.0924 29.8185 17.4929C29.8185 18.8934 28.9748 19.6967 27.4912 19.6967H25.5365V15.2962ZM37.1732 23.5995C36.7232 24.4668 35.7318 25.0142 34.6631 25.0142C33.081 25.0142 31.9771 24.0616 31.9771 22.6256C31.9771 21.2038 33.0459 20.3863 35.0217 20.2654L37.1451 20.1374V19.5261C37.1451 18.6232 36.5615 18.1327 35.5209 18.1327C34.6631 18.1327 34.0373 18.5806 33.9107 19.263H32.3779C32.4271 17.827 33.7631 16.782 35.5701 16.782C37.5177 16.782 38.7834 17.8128 38.7834 19.4123V24.9289H37.2084V23.5995H37.1732ZM35.1201 23.6991C34.2131 23.6991 33.6365 23.2583 33.6365 22.5829C33.6365 21.8863 34.192 21.481 35.2537 21.4171L37.1451 21.2962V21.9218C37.1451 22.9597 36.2732 23.6991 35.1201 23.6991ZM44.0076 25.3626C43.3256 27.3033 42.5451 27.9431 40.8857 27.9431C40.7592 27.9431 40.3373 27.9289 40.2388 27.9005V26.5711C40.3443 26.5853 40.6045 26.5995 40.7381 26.5995C41.4904 26.5995 41.9123 26.2796 42.1724 25.4479L42.3271 24.9573L39.4443 16.8886H41.2232L43.2271 23.436H43.2623L45.2662 16.8886H46.9959L44.0076 25.3626Z"
                                fill="#000000" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 -9 58 58"
                            fill="none">
                            <rect x="0.5" y="0.5" width="57" height="39" rx="3.5" fill="white"
                                stroke="#F3F3F3" />
                            <path d="M25.7516 27.4332H21.8901L24.3054 13.4325H28.1667L25.7516 27.4332Z"
                                fill="#15195A" />
                            <path
                                d="M39.7499 13.7748C38.9882 13.4915 37.7802 13.1787 36.2865 13.1787C32.4731 13.1787 29.7878 15.0851 29.7713 17.8106C29.7396 19.8215 31.6939 20.9384 33.1556 21.6089C34.6495 22.2941 35.1574 22.7413 35.1574 23.352C35.1422 24.29 33.9502 24.7223 32.8384 24.7223C31.2967 24.7223 30.4707 24.4994 29.2153 23.9776L28.7069 23.7539L28.1665 26.8967C29.0722 27.2835 30.7408 27.6268 32.4731 27.6419C36.5249 27.6419 39.1627 25.765 39.1939 22.8605C39.2093 21.2667 38.1774 20.0454 35.9526 19.0475C34.602 18.4069 33.7749 17.9749 33.7749 17.3195C33.7908 16.7236 34.4745 16.1133 35.9991 16.1133C37.2544 16.0834 38.1768 16.3663 38.8755 16.6494L39.2247 16.7981L39.7499 13.7748V13.7748V13.7748Z"
                                fill="#15195A" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M46.6618 13.4325H49.6486L52.7639 27.433H49.1885C49.1885 27.433 48.8386 25.8244 48.7278 25.3328H43.7699C43.6266 25.705 42.9595 27.433 42.9595 27.433H38.9078L44.6435 14.5941C45.0409 13.6855 45.7407 13.4325 46.6618 13.4325ZM46.4238 18.556C46.4238 18.556 45.2001 21.6689 44.8821 22.4732H48.0918C47.933 21.7733 47.2017 18.4219 47.2017 18.4219L46.9319 17.2156C46.8182 17.5262 46.6539 17.9533 46.543 18.2414C46.4679 18.4366 46.4173 18.568 46.4238 18.556Z"
                                fill="#15195A" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.1589 13.4325H11.3716C12.2138 13.462 12.8971 13.7152 13.1194 14.6094L14.4696 21.0422C14.4697 21.0426 14.4699 21.043 14.47 21.0434L14.8832 22.9796L18.6649 13.4325H22.7481L16.6785 27.4184H12.5951L9.15337 15.253C7.96587 14.6021 6.6106 14.0786 5.09534 13.7154L5.1589 13.4325Z"
                                fill="#15195A" />
                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px"
                            viewBox="0 -9 58 58" fill="none">
                            <rect x="0.5" y="0.5" width="57" height="39" rx="3.5" fill="white"
                                stroke="#F3F3F3" />
                            <path d="M34.3102 28.9765H23.9591V10.5122H34.3102V28.9765Z" fill="#FF5F00" />
                            <path
                                d="M24.6223 19.7429C24.6223 15.9973 26.3891 12.6608 29.1406 10.5107C27.1285 8.93843 24.5892 7.99998 21.8294 7.99998C15.2961 7.99998 10 13.2574 10 19.7429C10 26.2283 15.2961 31.4857 21.8294 31.4857C24.5892 31.4857 27.1285 30.5473 29.1406 28.975C26.3891 26.8249 24.6223 23.4884 24.6223 19.7429"
                                fill="#EB001B" />
                            <path
                                d="M48.2706 19.7429C48.2706 26.2283 42.9745 31.4857 36.4412 31.4857C33.6814 31.4857 31.1421 30.5473 29.1293 28.975C31.8815 26.8249 33.6483 23.4884 33.6483 19.7429C33.6483 15.9973 31.8815 12.6608 29.1293 10.5107C31.1421 8.93843 33.6814 7.99998 36.4412 7.99998C42.9745 7.99998 48.2706 13.2574 48.2706 19.7429"
                                fill="#F79E1B" />
                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px"
                            viewBox="0 -9 58 58" fill="none">
                            <rect x="0.5" y="0.5" width="57" height="39" rx="3.5" fill="white"
                                stroke="#F3F3F3" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M19.0689 20.3224C19.0689 22.7645 20.9865 24.658 23.4543 24.658C24.1518 24.658 24.7494 24.5209 25.4861 24.1739V22.2663C24.8384 22.9147 24.2644 23.1763 23.5297 23.1763C21.8975 23.1763 20.739 21.9928 20.739 20.3102C20.739 18.7152 21.9341 17.4569 23.4543 17.4569C24.2272 17.4569 24.8124 17.7327 25.4861 18.3916V16.485C24.7748 16.1242 24.19 15.9746 23.4925 15.9746C21.0372 15.9746 19.0689 17.9066 19.0689 20.3224ZM14.91 18.3046C14.91 18.7536 15.1954 18.9908 16.168 19.3507C18.0114 20.0251 18.5577 20.6224 18.5577 21.9426C18.5577 23.5508 17.3762 24.6707 15.6923 24.6707C14.459 24.6707 13.5622 24.1851 12.8156 23.0889L13.8626 22.0807C14.2356 22.8022 14.8583 23.189 15.6313 23.189C16.3545 23.189 16.8896 22.6902 16.8896 22.0171C16.8896 21.6682 16.7275 21.3687 16.4036 21.1572C16.2408 21.057 15.9179 20.9081 15.2833 20.684C13.7612 20.1364 13.2393 19.5503 13.2393 18.4057C13.2393 17.046 14.3605 16.0252 15.8306 16.0252C16.7416 16.0252 17.5752 16.3366 18.272 16.9461L17.424 18.0564C17.0019 17.5833 16.6026 17.3836 16.1173 17.3836C15.4188 17.3836 14.91 17.7814 14.91 18.3046ZM10.5846 24.4709H12.2053V16.1625H10.5846V24.4709ZM7.27202 22.4038C6.76294 22.8638 6.10138 23.0644 5.05432 23.0644H4.61938V17.57H5.05432C6.10138 17.57 6.73694 17.7575 7.27202 18.2422C7.83247 18.741 8.16951 19.5146 8.16951 20.3103C8.16951 21.108 7.83247 21.905 7.27202 22.4038ZM5.37884 16.1625H3V24.4706H5.36632C6.62459 24.4706 7.53299 24.174 8.33064 23.5115C9.27852 22.7274 9.83896 21.5452 9.83896 20.3225C9.83896 17.8705 8.00709 16.1625 5.37884 16.1625ZM36.1203 16.1625L38.3357 21.7432L40.5801 16.1625H42.3368L38.7476 24.6841H37.8754L34.3497 16.1625H36.1203ZM43.0697 24.4708H47.6656V23.0642H44.689V20.8215H47.5561V19.4142H44.689V17.5702H47.6656V16.1623H43.0697V24.4708ZM50.3576 19.9874H50.831C51.8662 19.9874 52.4148 19.5377 52.4148 18.7025C52.4148 17.894 51.8662 17.4712 50.8567 17.4712H50.3576V19.9874ZM51.1421 16.1622C53.0109 16.1622 54.0823 17.0597 54.0823 18.6152C54.0823 19.8873 53.4102 20.7225 52.1895 20.9706L54.8052 24.4707H52.8122L50.5691 21.133H50.3576V24.4707H48.7388V16.1622H51.1421Z"
                                fill="#1D1D1B" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M34.1585 22.7268C35.4738 20.67 34.8731 17.9376 32.8166 16.6224V16.6224C30.76 15.3072 28.0271 15.9076 26.7117 17.9644V17.9644C25.3967 20.0206 25.9977 22.7539 28.0542 24.0691V24.0691C30.1107 25.3843 32.8434 24.783 34.1585 22.7268Z"
                                fill="url(#paint0_linear_545_4255)" />
                            <defs>
                                <linearGradient id="paint0_linear_545_4255" x1="36.5397" y1="19.0034"
                                    x2="29.0929" y2="14.241" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F6A000" />
                                    <stop offset="0.623918" stop-color="#E47E02" />
                                    <stop offset="1" stop-color="#D36002" />
                                </linearGradient>
                            </defs>
                        </svg><svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px"
                            viewBox="0 -9 58 58" fill="none">
                            <rect x="0.5" y="0.5" width="57" height="39" rx="3.5" fill="#006FCF"
                                stroke="#F3F3F3" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M11.8632 28.8937V20.6592H21.1869L22.1872 21.8787L23.2206 20.6592H57.0632V28.3258C57.0632 28.3258 56.1782 28.8855 55.1546 28.8937H36.4152L35.2874 27.5957V28.8937H31.5916V26.6779C31.5916 26.6779 31.0867 26.9872 29.9953 26.9872H28.7373V28.8937H23.1415L22.1426 27.6481L21.1284 28.8937H11.8632ZM1 14.4529L3.09775 9.86914H6.7256L7.9161 12.4368V9.86914H12.4258L13.1346 11.7249L13.8216 9.86914H34.0657V10.8021C34.0657 10.8021 35.1299 9.86914 36.8789 9.86914L43.4474 9.89066L44.6173 12.4247V9.86914H48.3913L49.43 11.3247V9.86914H53.2386V18.1037H49.43L48.4346 16.6434V18.1037H42.8898L42.3321 16.8056H40.8415L40.293 18.1037H36.5327C35.0277 18.1037 34.0657 17.1897 34.0657 17.1897V18.1037H28.3961L27.2708 16.8056V18.1037H6.18816L5.63093 16.8056H4.14505L3.59176 18.1037H1V14.4529ZM1.01082 17.05L3.84023 10.8843H5.98528L8.81199 17.05H6.92932L6.40997 15.8154H3.37498L2.85291 17.05H1.01082ZM5.81217 14.4768L4.88706 12.3192L3.95925 14.4768H5.81217ZM9.00675 17.049V10.8832L11.6245 10.8924L13.147 14.8676L14.6331 10.8832H17.2299V17.049H15.5853V12.5058L13.8419 17.049H12.3996L10.6514 12.5058V17.049H9.00675ZM18.3552 17.049V10.8832H23.7219V12.2624H20.0171V13.3171H23.6353V14.6151H20.0171V15.7104H23.7219V17.049H18.3552ZM24.674 17.05V10.8843H28.3339C29.5465 10.8843 30.6331 11.5871 30.6331 12.8846C30.6331 13.9938 29.717 14.7082 28.8289 14.7784L30.9929 17.05H28.9831L27.0111 14.8596H26.3186V17.05H24.674ZM28.1986 12.2635H26.3186V13.5615H28.223C28.5526 13.5615 28.9776 13.3221 28.9776 12.9125C28.9776 12.5941 28.6496 12.2635 28.1986 12.2635ZM32.9837 17.049H31.3045V10.8832H32.9837V17.049ZM36.9655 17.049H36.603C34.8492 17.049 33.7844 15.754 33.7844 13.9915C33.7844 12.1854 34.8373 10.8832 37.052 10.8832H38.8698V12.3436H36.9856C36.0865 12.3436 35.4507 13.0012 35.4507 14.0067C35.4507 15.2008 36.1777 15.7023 37.2251 15.7023H37.6579L36.9655 17.049ZM37.7147 17.05L40.5441 10.8843H42.6892L45.5159 17.05H43.6332L43.1139 15.8154H40.0789L39.5568 17.05H37.7147ZM42.5161 14.4768L41.591 12.3192L40.6632 14.4768H42.5161ZM45.708 17.049V10.8832H47.7989L50.4687 14.7571V10.8832H52.1134V17.049H50.09L47.3526 13.0737V17.049H45.708ZM12.9885 27.8391V21.6733H18.3552V23.0525H14.6504V24.1072H18.2686V25.4052H14.6504V26.5005H18.3552V27.8391H12.9885ZM39.2853 27.8391V21.6733H44.6519V23.0525H40.9472V24.1072H44.5481V25.4052H40.9472V26.5005H44.6519V27.8391H39.2853ZM18.5635 27.8391L21.1765 24.7942L18.5012 21.6733H20.5733L22.1665 23.6026L23.7651 21.6733H25.756L23.1159 24.7562L25.7338 27.8391H23.6621L22.1151 25.9402L20.6057 27.8391H18.5635ZM25.9291 27.8401V21.6744H29.5619C31.0525 21.6744 31.9234 22.5748 31.9234 23.7482C31.9234 25.1647 30.8131 25.893 29.3482 25.893H27.617V27.8401H25.9291ZM29.4402 23.0687H27.617V24.4885H29.4348C29.9151 24.4885 30.2517 24.1901 30.2517 23.7786C30.2517 23.3406 29.9134 23.0687 29.4402 23.0687ZM32.6375 27.8391V21.6733H36.2973C37.51 21.6733 38.5966 22.3761 38.5966 23.6736C38.5966 24.7828 37.6805 25.4972 36.7923 25.5675L38.9563 27.8391H36.9465L34.9746 25.6486H34.2821V27.8391H32.6375ZM36.1621 23.0525H34.2821V24.3505H36.1864C36.5161 24.3505 36.9411 24.1112 36.9411 23.7015C36.9411 23.3831 36.6131 23.0525 36.1621 23.0525ZM45.4137 27.8391V26.5005H48.7051C49.1921 26.5005 49.403 26.2538 49.403 25.9833C49.403 25.7241 49.1928 25.462 48.7051 25.462H47.2177C45.9249 25.462 45.2048 24.7237 45.2048 23.6153C45.2048 22.6267 45.8642 21.6733 47.7854 21.6733H50.9881L50.2956 23.0606H47.5257C46.9962 23.0606 46.8332 23.321 46.8332 23.5697C46.8332 23.8253 47.0347 24.1072 47.4392 24.1072H48.9972C50.4384 24.1072 51.0638 24.8734 51.0638 25.8768C51.0638 26.9555 50.367 27.8391 48.9188 27.8391H45.4137ZM51.2088 27.8391V26.5005H54.5002C54.9873 26.5005 55.1981 26.2538 55.1981 25.9833C55.1981 25.7241 54.9879 25.462 54.5002 25.462H53.0129C51.72 25.462 51 24.7237 51 23.6153C51 22.6267 51.6594 21.6733 53.5806 21.6733H56.7833L56.0908 23.0606H53.3209C52.7914 23.0606 52.6284 23.321 52.6284 23.5697C52.6284 23.8253 52.8298 24.1072 53.2343 24.1072H54.7924C56.2336 24.1072 56.859 24.8734 56.859 25.8768C56.859 26.9555 56.1621 27.8391 54.7139 27.8391H51.2088Z"
                                fill="white" />
                        </svg>
                    </div><small>Activate online card or bank transfer payments for your

                    </small>
                </div>
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
                    class="bg-brand-teal text-white font-semibold px-6 py-3 rounded-lg hover:bg-brand-teal/90 transition-colors text-sm flex items-center">Post
                    to QuickBooks</button>
            </div>
        </div>

    </div>
</x-layout>
<style>
    tbody tr:last-child {
        border-bottom: 2px solid #e5e7eb !important
    }
</style>
