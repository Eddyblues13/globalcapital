@extends('layouts.dash2')

@section('title', 'Subscription Required')
@section('content')

    <!-- Alerts -->
    <x-danger-alert />
    <x-success-alert />

    <!-- Container -->
    <div class="max-w-md mx-auto my-12">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden p-6 md:p-8">
            <!-- Header -->
            <div class="text-center mb-6">
                <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-red-100 mb-4">
                    <i data-lucide="alert-triangle" class="h-8 w-8 text-red-600"></i>
                </div>
                <h2 class="text-xl font-bold text-gray-900">Subscription Required</h2>
            </div>

            <div class="text-center mb-8">
                <p class="text-md text-gray-700">
                    {{ $settings->subscribe_message ?? 'Please subscribe to complete this transfer.' }}
                </p>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row sm:space-x-4">
                <a 
                    href="{{ route('support') }}" 
                    class="w-full mb-3 sm:mb-0 inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors"
                >
                    <i data-lucide="message-square" class="h-5 w-5 mr-2"></i>
                    Contact Support
                </a>
                <a 
                    href="{{ route('dashboard') }}" 
                    class="w-full inline-flex items-center justify-center px-6 py-3 border border-gray-300 rounded-lg shadow-sm text-base font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition-colors"
                >
                    <i data-lucide="arrow-left" class="h-5 w-5 mr-2"></i>
                    Back to Dashboard
                </a>
            </div>
        </div>
    </div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Lucide icons
        lucide.createIcons();
    });
</script>
@endpush

@endsection
