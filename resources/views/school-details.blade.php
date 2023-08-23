<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('校舎詳細表示') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto mt-10 sm:px-6 lg:px-8">
        <div class="my-4">
            <a href="{{ route('home') }}" class="bg-orange-500" role="button">
                {{ __('予約する') }}
            </a>
        </div>
    </div>
</x-app-layout>