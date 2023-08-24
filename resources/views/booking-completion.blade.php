<x-app-layout>
    <div class="font-bold text-5xl text-center pt-5">
        予約完了
    </div>
    <br>
    <br>
    <br>
    <div class="max-w-7xl mx-auto mt-10 sm:px-6 lg:px-8">
        <div class="my-4 text-center">
        <a href="{{ route('/') }}" class="font-bold rounded relative inline-flex group items-center justify-center px-3.5 py-2 m-1 cursor-pointer border-b-4 border-l-2 active:border-orange-600 active:shadow-none shadow-lg bg-gradient-to-tr from-orange-600 to-orange-500 border-orange-700 text-white">        
        <span class="absolute w-0 h-0 transition-all duration-300 ease-out bg-white rounded-full group-hover:w-32 group-hover:h-32 opacity-10"></span>
        <span class="relative">{{ __('ホームへ') }}</span>
        </a>
        </div>
    </div>



    </x-app-layout>