<x-app-layout>

    <x-slot name="header">
        
        <div class="container">
            <div class="row">
                <div class="col-3 p-5">
                    <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
                </div>
                <div class="col-9">
                    <div class="pb-2">
                        <div class="d-flex align-items-center">
                            <div class="h4">{{ $user->username }}</div>
                            <button class="btn btn-primary ml-4">Follows</button>
                        </div>
                        
                        @can('update', $user->profile)
                        <a href="/posts/create" class="no-underline bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Post</a>
                        <a href="/profile/{{$user->id}}/edit" class="no-underline bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit Profile</a>  
                        @endcan

                    </div>
                <div class="d-flex">
                    <div class="pr-4"><strong>{{$user->posts->count()}}</strong>posts</div>
                    <div class="pr-4"><strong>23k</strong>followers</div>
                    <div class="pr-4"><strong>212</strong>following</div>
                </div>
                <div class="pt-4 font-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>
            </div>
            </div>
            <div class="row pt-5 bp-4">
                @foreach ($user->posts as $post)
                <div class="col-4">
                    <a href="/posts/show/{{$post->id}}">
                        <img src="/storage/{{$post->image}}" class="w-100">
                    </a>
                </div>
                @endforeach

            </div>
        </div>
        
    </x-slot>

</x-app-layout>