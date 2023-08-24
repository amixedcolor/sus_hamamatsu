<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ご利用予約確認') }}
        </h1>
    </x-slot>

    <div class="py-10 text-center">
        <h2 class="font-bold text-xl inline-block relative inline-block mx-24">
            {{ $school->name }}のご予約
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </h2>
    </div>

    <div class="py-1 text-left mt-1">
        <div class="max-w-7xl mx-auto mt-10 sm:px-6 lg:px-8">
            <div class="my-4">
                <div class="bg-white shadow p-6 rounded-lg">
                    <form method="POST" action="./booking-completion" class="grid grid-cols-[1fr_3fr] gap-x-8 gap-y-6">
                        @csrf

                        <input type="hidden" name="params" value="{{ json_encode($params) }}">

                        <h2 class="font-bold text-xl inline-block relative inline-block col-span-2">
                            利用者様情報
                            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
                        </h2>

                        <p class="font-bold text-lg mr-2">氏名</p>
                        <p>{{ $params['customer_name'] }}</p>

                        <p class="font-bold text-lg mr-2">電話番号</p>
                        <p>{{ $params['phone_number'] }}</p>

                        <p class="font-bold text-lg mr-2">E-mail</p>
                        <p>{{ $params['email'] }}</p>

                        <br class="col-span-2">

                        <h2 for="title" class="font-bold text-xl inline-block relative inline-block col-span-2">
                            利用計画
                            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
                        </h2>

                        <p class="font-bold text-lg mr-2">日付</p>
                        <p>{{ date_format(date_create($params['date']), 'Y年 m月 d日') }}</p>

                        <p class="font-bold text-lg mr-2">時間帯</p>
                        <div>
                            <span class="w-16 mr-2">{{ $params['time_start'] }}</span>時 〜 <span class="w-16 mx-2">{{ $params['time_start'] }}</span>時
                        </div>

                        <p class="font-bold text-lg mr-2">利用目的</p>
                        <p>{{ $params['purpose_of_use'] }}</p>

                        <div class="inline font-bold text-lg mr-4">
                            <p lass="w-fit">利用目的<br>(詳細)</p>
                        </div>
                        <p>{{ $params['details'] }}</p>

                        <p class="font-bold text-lg">利用設備</p>
                        <div>
                            <div class="flex flex-row-reverse w-fit items-center gap-x-3">
                                <p class="font-bold text-lg m-0">体育館</p>
                                <input type="checkbox" disabled {{ array_key_exists('selectedFacility_is_having_gym', $params) ? 'checked' : '' }}>
                            </div>

                            <div class="flex flex-row-reverse w-fit items-center gap-x-3">
                                <p class="font-bold text-lg m-0">運動場</p>
                                <input type="checkbox" disabled {{ array_key_exists('selectedFacility_is_having_ground', $params) ? 'checked' : '' }}>
                            </div>

                            <div class="flex flex-row-reverse w-fit items-center gap-x-3">
                                <p class="font-bold text-lg m-0">駐車場</p>
                                <input type="checkbox" disabled {{ array_key_exists('selectedFacility_is_having_gym', $params) ? 'checked' : '' }}>
                            </div>
                        </div>

                        <br class="col-span-2">

                        <p class="font-bold col-span-2 ml-8">以上の内容で予約を確定します。</p>

                        <div class="mx-auto col-span-2">
                            <input type="submit" id="submit-btn" value="戻る" class="font-bold rounded relative inline-flex group items-center justify-center px-3.5 py-2 m-1 cursor-pointer border-b-4 border-l-2 active:border- gray-600 disabled:cursor-not-allowed active:shadow-none shadow-lg bg-gradient-to-tr from-gray-600 to-gray-500 border-gray-700 text-white">
                            <input type="submit" id="submit-btn" value="予約確定" class="font-bold rounded relative inline-flex group items-center justify-center px-3.5 py-2 m-1 cursor-pointer border-b-4 border-l-2 active:border- disabled:cursor-not-allowed active:shadow-none shadow-lg bg-gradient-to-tr from-blue-600 to-blue-500 border-gray-700 text-white">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
