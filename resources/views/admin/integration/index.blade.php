<x-layout title="Integrations">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- QuickBooks Online Card -->
        <div id="qbo_integration_card" class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-5">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center mr-3 bg-green-50">
                            <img src="{{ asset('assets/images/qbo.svg') }}" alt="QBO" class="w-6 h-6">
                        </div>
                        <div>
                            <h3 class="text-base font-semibold text-gray-900">QuickBooks Online</h3>
                            <span id="qbo-status" class="text-xs text-status-neutral">Not Connected</span>
                        </div>
                    </div>
                    {{-- <div class="toggle-switch" data-toggle="qbo" data-card="qbo_integration_card">
                        <div class="toggle-switch-handle"></div>
                    </div> --}}
                </div>

                <!-- Not Connected State -->
                <div id="qbo-not-connected" class="text-center py-6">
                    <div class="w-14 h-14   rounded-full flex items-center justify-center mx-auto mb-3">
                       <img src="{{ asset('assets/images/qbo.svg') }}" alt="QBO" class="w-14 h-14">
                    </div>
                    <p class="text-sm text-gray-600 mb-4">Push products, invoices & payments to QBO</p>
                    <button onclick="showModal('qbo-oauth-modal')"
                        class="w-full px-4 py-2.5 bg-brand-terracotta text-white text-sm font-semibold rounded-lg hover:bg-brand-terracotta/90 transition-colors">
                        <i class="fa-solid fa-link mr-2"></i>Connect QBO
                    </button>
                </div>

                <!-- Connected State -->
                <div id="qbo-connected" class="hidden">
                    <div class="space-y-3 mb-4">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Company</span>
                            <span class="font-medium text-gray-900">Acme Oil Corp</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Last Sync</span>
                            <span class="font-medium text-gray-900 flex items-center">
                                <span class="w-2 h-2 rounded-full bg-status-success mr-2"></span>2 hours ago
                            </span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Sync Frequency</span>
                            <span class="font-medium text-gray-900">Every 15 min</span>
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        <button
                            class="flex-1 px-3 py-2 text-sm bg-brand-terracott text-brand-teal font-medium border border-brand-teal rounded-lg hover:bg-brand-teal/5 transition-colors">
                            Sync Now
                        </button>
                        <button
                            class="flex-1 px-3 py-2 bg-red-500 text-white text-sm font-semibold rounded-lg hover:bg-brand-terracotta/90 transition-colors">
                            Disconnect
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mineralware Card -->
        <div id="mineralware_integration_card"
            class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-5">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center mr-3 bg-blue-50">
                            <img src="{{ asset('assets/images/image.png') }}" alt="Mineralware" class="w-6 h-6">
                        </div>
                        <div>
                            <h3 class="text-base font-semibold text-gray-900">Mineralware</h3>
                            <span id="mw-status" class="text-xs text-status-success">Connected</span>
                        </div>
                    </div>
                    {{-- <div class="toggle-switch active" data-toggle="mw" data-card="mineralware_integration_card">
                        <div class="toggle-switch-handle"></div>
                    </div> --}}
                </div>

                <!-- Connected State -->
                <div id="mw-connected">
                    <div class="space-y-3 mb-4">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">API Endpoint</span>
                            <span
                                class="font-mono text-xs text-gray-900 truncate max-w-[140px]">api.mineralware.com/v2</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">API Key</span>
                            <div class="flex items-center">
                                <span class="font-mono text-xs text-gray-900">••••••3847</span>
                                <button class="ml-2 text-gray-400 hover:text-brand-teal">
                                    <i class="fa-solid fa-eye text-xs"></i>
                                </button>
                            </div>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Environment</span>
                            <span
                                class="px-2 py-0.5 bg-green-100 text-green-700 text-xs font-medium rounded">Production</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Connected Since</span>
                            <span class="font-medium text-gray-900">Dec 3, 2023</span>
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        <button
                            class="flex-1 px-3 py-2 text-sm bg-brand-terracotta text-white font-medium  rounded-lg ">
                            Sync Now
                        </button>
                        <button
                            class="flex-1 px-3 py-2 bg-red-500 text-white text-sm font-semibold rounded-lg ">
                            Disconnect
                        </button>
                    </div>
                </div>

                <!-- Not Connected State -->
                <div id="mw-not-connected" class="hidden text-center py-6">
                    <div class="w-14 h-14   rounded-full flex items-center justify-center mx-auto mb-3">
                          <img src="{{ asset('assets/images/image.png') }}" alt="Mineralware" class="w-6 h-6">
                    </div>
                    <p class="text-sm text-gray-600 mb-4">Import products & data from Mineralware</p>
                    <button onclick="showModal('api-config-modal')"
                        class="w-full px-4 py-2.5 bg-brand-terracotta text-white text-sm font-semibold rounded-lg hover:bg-brand-terracotta/90 transition-colors">
                        <i class="fa-solid fa-link mr-2"></i>Connect API
                    </button>
                </div>
            </div>
        </div>

        <!-- Energy Links Card -->
        <div id="energylinks_integration_card"
            class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-5">
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-lg flex items-center justify-center mr-3 bg-orange-50">
                            <img src="{{ asset('assets/images/el.svg') }}" alt="Energy Links" class="w-6 h-6">
                        </div>
                        <div>
                            <h3 class="text-base font-semibold text-gray-900">Energy Links</h3>
                            <span id="el-status" class="text-xs text-status-success">Connected</span>
                        </div>
                    </div>
                    {{-- <div class="toggle-switch active" data-toggle="el" data-card="energylinks_integration_card">
                        <div class="toggle-switch-handle"></div>
                    </div> --}}
                </div>

                <!-- Connected State -->
                <div id="el-connected">
                    <div class="space-y-3 mb-4">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">API Endpoint</span>
                            <span
                                class="font-mono text-xs text-gray-900 truncate max-w-[140px]">el.energylinks.io/api</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Client ID</span>
                            <span class="font-mono text-xs text-gray-900">el_client_••••••</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Environment</span>
                            <span
                                class="px-2 py-0.5 bg-green-100 text-green-700 text-xs font-medium rounded">Production</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Pending</span>
                            <a href="#" class="text-status-warning font-medium hover:underline">11 items</a>
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        <button
                            class="flex-1 px-3 py-2 text-sm bg-brand-terracotta text-white font-medium  rounded-lg ">
                            Sync Now
                        </button>
                        <button
                            class="flex-1 px-3 py-2 bg-red-500 text-white text-sm font-semibold rounded-lg ">
                            Disconnect
                        </button>
                    </div>
                </div>

                <!-- Not Connected State -->
                <div id="el-not-connected" class="hidden text-center py-6">
                    <div class="w-14 h-14   rounded-full flex items-center justify-center mx-auto mb-3">
                        <img src="{{ asset('assets/images/el.svg') }}" alt="Energy Links" class="w-6 h-6">
                    </div>
                    <p class="text-sm text-gray-600 mb-4">Reconcile products with Energy Links</p>
                    <button onclick="showModal('api-config-modal')"
                        class="w-full px-4 py-2.5 bg-brand-terracotta text-white text-sm font-semibold rounded-lg hover:bg-brand-terracotta/90 transition-colors">
                        <i class="fa-solid fa-link mr-2"></i>Connect API
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layout>

<!-- Disconnect Modal -->
<div id="disconnect-modal" class="modal">
    <div class="bg-white rounded-xl shadow-xl max-w-sm w-full mx-4 p-6">
        <div class="flex items-start mb-4">
            <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mr-3 flex-shrink-0">
                <i class="fa-solid fa-triangle-exclamation text-red-600"></i>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-1">Disconnect Integration?</h3>
                <p class="text-sm text-gray-600">This will stop all syncs. You can reconnect anytime.</p>
            </div>
        </div>
        <div class="flex justify-end space-x-3 mt-5">
            <button onclick="hideModal('disconnect-modal')"
                class="px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">Cancel</button>
            <button onclick="confirmDisconnect()"
                class="px-4 py-2 bg-red-500 text-white text-sm font-semibold rounded-lg hover:bg-red-600 transition-colors">Disconnect</button>
        </div>
    </div>
</div>

<!-- QBO OAuth Modal -->
<div id="qbo-oauth-modal" class="modal">
    <div class="bg-white rounded-xl shadow-xl max-w-sm w-full mx-4 p-6 text-center">
        <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
            <span class="text-white font-bold text-2xl">Q</span>
        </div>
        <h3 class="text-lg font-semibold text-gray-900 mb-2">Connect to QuickBooks</h3>
        <p class="text-sm text-gray-600 mb-5">You'll be redirected to Intuit to authorize access to your QBO account.
        </p>
        <div class="flex space-x-3">
            <button onclick="hideModal('qbo-oauth-modal')"
                class="flex-1 px-4 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-100 rounded-lg transition-colors border border-gray-300">Cancel</button>
            <button onclick="simulateQBOConnect()"
                class="flex-1 px-4 py-2.5 bg-green-600 text-white text-sm font-semibold rounded-lg hover:bg-green-700 transition-colors">
                <i class="fa-solid fa-external-link mr-2"></i>Authorize
            </button>
        </div>
    </div>
</div>

<!-- API Config Modal -->
<div id="api-config-modal" class="modal">
    <div class="bg-white rounded-xl shadow-xl max-w-md w-full mx-4 p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Configure API Connection</h3>
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">API Endpoint</label>
                <input type="text" placeholder="https://api.example.com/v2"
                    class="w-full px-3 py-2.5 border border-gray-300 rounded-lg text-sm focus:outline-none focus:border-brand-teal">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">API Key</label>
                <input type="password" placeholder="Enter your API key"
                    class="w-full px-3 py-2.5 border border-gray-300 rounded-lg text-sm focus:outline-none focus:border-brand-teal">
            </div>
        </div>
        <div class="flex space-x-3 mt-6">
            <button onclick="hideModal('api-config-modal')"
                class="flex-1 px-4 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-100 rounded-lg transition-colors border border-gray-300">Cancel</button>
            <button onclick="hideModal('api-config-modal')"
                class="flex-1 px-4 py-2.5 bg-brand-terracotta text-white text-sm font-semibold rounded-lg hover:bg-brand-terracotta/90 transition-colors">Connect</button>
        </div>
    </div>
</div>

<style>
    .modal {
        display: none;
        position: fixed;
        inset: 0;
        z-index: 50;
        align-items: center;
        justify-content: center;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal.active {
        display: flex;
    }

    .toggle-switch {
        width: 44px;
        height: 24px;
        background-color: #d1d5db;
        border-radius: 9999px;
        position: relative;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
        flex-shrink: 0;
    }

    .toggle-switch.active {
        background-color: #2A6F6A;
    }

    .toggle-switch-handle {
        width: 20px;
        height: 20px;
        background-color: white;
        border-radius: 9999px;
        position: absolute;
        top: 2px;
        left: 2px;
        transition: transform 0.2s ease-in-out;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .toggle-switch.active .toggle-switch-handle {
        transform: translateX(20px);
    }
</style>

<script>
    let pendingDisconnectToggle = null;

    document.addEventListener('DOMContentLoaded', function() {
        // Toggle switch functionality with confirmation
        document.querySelectorAll('.toggle-switch').forEach(toggle => {
            toggle.addEventListener('click', function() {
                const toggleId = this.dataset.toggle;
                const isActive = this.classList.contains('active');

                if (isActive) {
                    // Show disconnect confirmation
                    pendingDisconnectToggle = this;
                    showModal('disconnect-modal');
                } else {
                    // Connect - show appropriate modal
                    if (toggleId === 'qbo') {
                        showModal('qbo-oauth-modal');
                    } else {
                        showModal('api-config-modal');
                    }
                }
            });
        });
    });

    // Modal functions
    function showModal(id) {
        const modal = document.getElementById(id);
        if (modal) {
            modal.classList.add('active');
        }
    }

    function hideModal(id) {
        const modal = document.getElementById(id);
        if (modal) {
            modal.classList.remove('active');
        }
    }

    // Confirm disconnect
    function confirmDisconnect() {
        if (pendingDisconnectToggle) {
            const toggleId = pendingDisconnectToggle.dataset.toggle;
            pendingDisconnectToggle.classList.remove('active');

            // Update status text
            const statusEl = document.getElementById(toggleId + '-status');
            if (statusEl) {
                statusEl.textContent = 'Not Connected';
                statusEl.classList.remove('text-status-success');
                statusEl.classList.add('text-status-neutral');
            }

            // Toggle connected/not-connected views
            const connectedEl = document.getElementById(toggleId + '-connected');
            const notConnectedEl = document.getElementById(toggleId + '-not-connected');
            if (connectedEl) connectedEl.classList.add('hidden');
            if (notConnectedEl) notConnectedEl.classList.remove('hidden');

            pendingDisconnectToggle = null;
        }
        hideModal('disconnect-modal');
    }

    // Simulate QBO connection
    function simulateQBOConnect() {
        hideModal('qbo-oauth-modal');

        const toggle = document.querySelector('[data-toggle="qbo"]');
        if (toggle) {
            toggle.classList.add('active');
        }

        const statusEl = document.getElementById('qbo-status');
        if (statusEl) {
            statusEl.textContent = 'Connected';
            statusEl.classList.remove('text-status-neutral');
            statusEl.classList.add('text-status-success');
        }

        document.getElementById('qbo-not-connected')?.classList.add('hidden');
        document.getElementById('qbo-connected')?.classList.remove('hidden');
    }

    // Close modal when clicking outside
    document.querySelectorAll('.modal').forEach(modal => {
        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.remove('active');
                pendingDisconnectToggle = null;
            }
        });
    });
</script>
