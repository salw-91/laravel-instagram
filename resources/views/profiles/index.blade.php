<x-app-layout>

    <x-slot name="header">
        
        <div class="container">
            <div class="row">
                <div class="col-3 p-5">
                    <img src="/img/logo_white_Square.PNG" style="height: 100px;" class="rounded-circle">
                </div>
                <div class="col-9">
                    <div><h1>{{ Auth::user()->username }}</h1></div>
                <div class="d-flex">
                    <div class="pr-4"><strong>153</strong>posts</div>
                    <div class="pr-4"><strong>23k</strong>followers</div>
                    <div class="pr-4"><strong>212</strong>following</div>
                </div>
                <div class="pt-4 font-bold">laravel.com</div>
                <div>Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</div>
                <div><a href="https://laravel.com">www.laravel.com</a></div>
            </div>
            </div>
            <div class="row pt-5">
                <div class="col-4">
                    <img src="https://interactive-examples.mdn.mozilla.net/media/cc0-images/grapefruit-slice-332-332.jpg" class="w-100">
                </div>
                <div class="col-4">
                    <img src="https://interactive-examples.mdn.mozilla.net/media/cc0-images/grapefruit-slice-332-332.jpg" class="w-100">
                </div>
                <div class="col-4">
                    <img src="https://interactive-examples.mdn.mozilla.net/media/cc0-images/grapefruit-slice-332-332.jpg" class="w-100">
                </div>
            </div>
        </div>
        
    </x-slot>

</x-app-layout>