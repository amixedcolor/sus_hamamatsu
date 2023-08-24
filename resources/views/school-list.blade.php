<x-app-layout>

    <body>

        <div style="padding:30px 0px 0px 30px;">
            <h2 style="
            border-bottom:5px solid;
            border-bottom-color:#ff5722;
            width: 250px
            ">
                校舎一覧
            </h2>
            <br>
            <br>

            <div style="
            padding:0 30px 0 30px;
            display:flex;
            justify-content:space-between;
            flex-wrap: wrap;
            gap: 30px 30px;
            ">
                @foreach ($schools as $school)
                    <a href="{{ url('/schools/' . $school->id) }}" style="text-decoration: none; color:black">
                        <div style="
                        width:400px; height:400px;
                        border:1px solid black;
                        ">
                            <img style="
                                padding:230px 0 0 0;
                                margin:25px 25px 0 25px;
                                width:350px; height:230px;
                                border:1px solid black;
                                background-image:url({{ $school->schoolImages->first()?->convertToBase64() ?? '' }});
                                ">
                                {{ $school->name }}
                            </h2>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </body>
</x-app-layout>
