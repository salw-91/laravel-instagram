<x-app-layout>
    <x-slot name="header">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="row">
                    <div class="col-3 p-6">
                        <img class="rounded-circle" style="width: 100px" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2F9%2F9a%2FLaravel.svg%2F1200px-Laravel.svg.png&f=1&nofb=1" alt="">
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
                <div class="row pt-6">
                    <div class="col-4">
                        <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fheera.it%2Fwp-content%2Fuploads%2F2014%2F02%2Flaravel_smolten_2.png&f=1&nofb=1" class="" alt="">
                    </div>
                    <div class="col-4">
                        <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fheera.it%2Fwp-content%2Fuploads%2F2014%2F02%2Flaravel_smolten_2.png&f=1&nofb=1" class="" alt="">
                    </div>
                    <div class="col-4">
                        <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fheera.it%2Fwp-content%2Fuploads%2F2014%2F02%2Flaravel_smolten_2.png&f=1&nofb=1" class="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

</x-app-layout>
