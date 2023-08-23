<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ご利用予約') }}
        </h1>
    </x-slot>

    <div class="py-10 text-center">
        <h2 class="font-bold text-xl inline-block relative inline-block mx-24">
            {{ __('浜松市立第一小学校') }}のご予約
            <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
        </h2>
    </div>

    <div class="py-1 text-left mt-1">
        <div class="max-w-7xl mx-auto mt-10 sm:px-6 lg:px-8">
            <div class="my-4">
                <div class="bg-white shadow p-6 rounded-lg">
                    <form action="{{ route('post.store') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="font-bold text-xl inline-block relative inline-block">利用者様情報
                                <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
                            </label>
                            <br><br>
                            <div class="flex flex-col space-y-4">
                                <div class="flex items-center">
                                    <p class="font-bold text-lg mr-2">氏名</p>
                                    <input type="text" class="border rounded p-1" placeholder="テキストを追加">
                                </div>
                                <div class="flex items-center">
                                    <p class="font-bold text-lg mr-2">電話番号</p>
                                    <input type="phone" class="border rounded p-1" placeholder="テキストを追加">
                                </div>
                                <div class="flex items-center">
                                    <p class="font-bold text-lg mr-2">E-mail</p>
                                    <input type="email" class="border rounded p-1" placeholder="テキストを追加">
                                </div>
                            </div>
                            <br><br>
                        </div>
                        <div class="mb-4">
                            <label for="title" class="font-bold text-xl inline-block relative inline-block">利用計画
                                <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
                            </label>
                            <br><br>

                            <div class="flex items-center">
                                <p class="font-bold text-lg mr-2">日付</p>
                                <form>
                                    <select name="month" class="mr-6">
                                        @for ($i = 1; $i <= 12; $i++)
                                            <option value="{{ $i }}">{{ $i }}月</option>
                                        @endfor
                                    </select>
                                    <select name="day">
                                        @for ($i = 1; $i <= 31; $i++)
                                            <option value="{{ $i }}">{{ $i }}日</option>
                                        @endfor
                                    </select>
                                </form>
                            </div>
                            <br><br>
                            <div class="flex items-center">
                                <p class="font-bold text-lg mr-2">時間帯</p>
                                <form>
                                    <select name="month">
                                        @for ($i = 0; $i <= 23; $i++)
                                            <option value="{{ $i }}">{{ $i }}時</option>
                                        @endfor
                                    </select>
                                    <span class="whitespace-no-wrap">〜</span>
                                    <select name="day">
                                        @for ($i = 0; $i <= 23; $i++)
                                            <option value="{{ $i }}">{{ $i }}時</option>
                                        @endfor
                                    </select>
                                </form>
                            </div>
                            <br>
                            <div class="flex items-center">
                                <p class="font-bold text-lg mr-2">利用目的</p>
                                <form method="post" action="">
                                    <select name="state">
                                        <option value="1">スポーツ</option>
                                        <option value="2">勉強会</option>
                                        <option value="3">会議</option>
                                        <option value="4">アート</option>
                                        <option value="5">地域独自イベント</option>
                                    </select>
                                </form>
                            </div>
                            <br>
                            <div class="flex items-center">
                                <p class="font-bold text-lg mr-2">利用目的詳細</p>
                                <textarea name="body" id="body" rows="6" class="w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500" required></textarea>
                            </div>
                            <br>
                            <div class="flex items-center">
                                <p class="font-bold text-lg mr-10">利用設備</p>
                                <p class="font-bold text-lg mr-2">校舎</p>
                                <input type="checkbox" name="facilities[]" value="校舎" class="mr-6"><br>
                                <p class="font-bold text-lg mr-2">運動場</p>
                                <input type="checkbox" name="facilities[]" value="運動場" class="mr-6">
                                <p class="font-bold text-lg mr-2">体育館</p>
                                <input type="checkbox" name="facilities[]" value="体育館" class="mr-6">
                                <p class="font-bold text-lg mr-2">駐車場</p>
                                <input type="checkbox" name="facilities[]" value="駐車場">
                            </div>
                            <br>
                            <div class="flex items-center">
                                <label for="title" class="font-bold text-xl inline-block relative inline-block">利用規約
                                    <span class="absolute h-1 w-full left-0 bottom-0 bg-orange-500"></span>
                                </label>
                            </div>
                        </div>
                        <div class="flex items-center justify-center mt-4">
                            <div class="bg-white p-16 rounded shadow-md">
                                <p class="text-center text-lg font-bold">利用規約利用規約利用規約利用規約利用規約利用規約利用規約利用規約利用規約利用規約利用規約利用規約利用規約利用規約利用規約利用規約利用規約利用規約利用規約利用規約</p>
                            </div>
                        </div>

                        <div class="flex mt-4 justify-center">
                            <form>
                                <p><input type="checkbox" id="consent-chk" name="consent-chk">
                                    <label class="text-center text-lg font-bold">同意する</label>
                                </p>
                            </form>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>