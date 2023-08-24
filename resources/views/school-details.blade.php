<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('校舎詳細表示') }}
        </h1>
    </x-slot>

    <div class="py-10 text-center">
        <h2 class="font-bold text-xl inline-block relative inline-block bg-orange-500 text-white p-2 rounded">
            {{ $school->namespace }}
        </h2>
    </div>

    <div class="container mx-auto w-96 h-96 bg-slate-600">
        <p class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ $school->image }}
        </p>
    </div>

    <div class="py-10 text-left">
        <h3 class="font-bold text-xl inline-block relative inline-block mx-24">
        {{ __('費用（1時間）') }}
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </h3>
        <br>
        <br>
        <p class="font-bold text-base mx-24">
            {{$school->price_per_hour}}
        </p>
    </div>

    <div class="py-10 text-left">
        <h3 class="font-bold text-xl inline-block relative inline-block mx-24">
        {{ __('設備') }}
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </h3>
        <br>
        <br>
        <p class="font-bold text-base mx-24">
            設備情報
        </p>
    </div>

    <div class="py-10 text-left">
        <h3 class="font-bold text-xl inline-block relative inline-block mx-24">
        {{ __('貸出時間') }}
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </h3>
        <br>
        <br>
        <p class="font-bold text-base mx-24">
            {{$school->rentable_time_start}} ~ {{$school->rentable_time_end}}
        </p>
    </div>

    <div class="py-10 text-left">
        <h3 class="font-bold text-xl inline-block relative inline-block mx-24">
        {{ __('連絡先') }}
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </h3>
        <br>
        <br>
        <p class="font-bold text-base mx-24">
            {{$school->contact}}
        </p>
    </div>

    <div class="mb-4">
        <h3 for="body" class="font-bold text-xl inline-block relative inline-block mx-24">
            備考
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </h3>
        <br>
        <br>
        <p class="font-bold text-base mx-24">
            {{$school->terms}}
        </p>
    </div>

    <div class="max-w-7xl mx-auto mt-10 sm:px-6 lg:px-8">
        <div class="my-4 text-center">
        <a href="{{ route('schools/ID/book', ['school_id'=>'5']) }}" class="font-bold rounded relative inline-flex group items-center justify-center px-3.5 py-2 m-1 cursor-pointer border-b-4 border-l-2 active:border-orange-600 active:shadow-none shadow-lg bg-gradient-to-tr from-orange-600 to-orange-500 border-orange-700 text-white">
        <span class="absolute w-0 h-0 transition-all duration-300 ease-out bg-white rounded-full group-hover:w-32 group-hover:h-32 opacity-10"></span>
        <span class="relative">{{ __('予約する') }}</span>
        </a>
        </div>
    </div>
</x-app-layout>

