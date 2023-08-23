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
                @for ($i = 0; $i < 10; $i++)
                    <a href="{{ url('/') }}">
                        <div style="
                        width:400px; height:400px;
                        border:1px solid black;
                        ">
                            <h2 style="
                                padding:230px 0 0 0;
                                margin:25px 25px 0 25px;
                                width:350px; height:230px;
                                border:1px solid black;
                                background-color:gray;
                            "> 
                            aaaaaaaaaaaaaaa 
                            </h2>
                        </div>
                    </a>
                @endfor
            </div>
        </div>
    </body>
</x-app-layout>