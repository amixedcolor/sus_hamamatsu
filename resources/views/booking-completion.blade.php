<x-app-layout>
    <div class="font-bold text-5xl text-center pt-5">
        予約完了
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" viewBox="0 0 512 512" class="mx-auto mt-16 mb-32 fill-orange-600"><path d="m173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69L432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"/></svg>
    <div class="max-w-7xl mx-auto mt-10 sm:px-6 lg:px-8">
        <p class="font-bold text-xl mx-auto mb-8 w-fit">予約が確定しました。</p>
        <div class="my-4 text-center">
        <a href="{{ route('/') }}" class="font-bold rounded relative inline-flex group items-center justify-center px-3.5 py-2 m-1 cursor-pointer border-b-4 border-l-2 active:border-orange-600 active:shadow-none shadow-lg bg-gradient-to-tr from-orange-600 to-orange-500 border-orange-700 text-white">
        <span class="absolute w-0 h-0 transition-all duration-300 ease-out bg-white rounded-full group-hover:w-32 group-hover:h-32 opacity-10"></span>
        <span class="relative">{{ __('ホームへ') }}</span>
        </a>
        </div>
    </div>



    </x-app-layout>
