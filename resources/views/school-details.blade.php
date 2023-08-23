<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('校舎詳細表示') }}
        </h2>
    </x-slot>

    <div class="py-10 text-center">
        <span class="font-bold text-xl inline-block relative inline-block bg-orange-500 text-white p-2 rounded">
        {{ __('浜松市立第一小学校') }}
        </span>
    </div>

    <div class="container mx-auto w-96 h-96 bg-slate-600">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('校舎画像等') }}
        </h2>
    </div>

    <div class="py-10 text-left">
        <span class="font-bold text-xl inline-block relative inline-block mx-24">
        {{ __('費用（1時間）') }}
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </span>
        <br>
        <br>
        <h4 class="font-bold text-base mx-24">
            5000円
        </h4>
    </div>

    <div class="py-10 text-left">
        <span class="font-bold text-xl inline-block relative inline-block mx-24">
        {{ __('設備') }}
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </span>
        <br>
        <br>
        <h4 class="font-bold text-base mx-24">
            設備設備設備設備設備
        </h4>
    </div>

    <div class="py-10 text-left">
        <span class="font-bold text-xl inline-block relative inline-block mx-24">
        {{ __('貸出時間') }}
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </span>
        <br>
        <br>
        <h4 class="font-bold text-base mx-24">
            X〜Y
        </h4>
    </div>

    <div class="py-10 text-left">
        <span class="font-bold text-xl inline-block relative inline-block mx-24">
        {{ __('連絡先') }}
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </span>
        <br>
        <br>
        <h4 class="font-bold text-base mx-24">
            ○○○-○○○○-○○○○
        </h4>
    </div>

    <div class="mb-4">
        <span for="body" class="font-bold text-xl inline-block relative inline-block mx-24">
            備考
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </span>
        <br>
        <br>
        <h4 class="font-bold text-base mx-24">
            備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考備考
        </h4>
    </div>

    <div class="max-w-7xl mx-auto mt-10 sm:px-6 lg:px-8">
        <div class="my-4 text-center">
            <a href="{{ route('home') }}" class="font-bold text-xl my-2 px-4 py-2 border-2 text-white rounded-md bg-orange-500" role="button">
                {{ __('予約する') }}
            </a>
        </div>
    </div>
</x-app-layout>