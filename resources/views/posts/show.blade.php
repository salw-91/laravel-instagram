<x-app-layout>

    <x-slot name="header">
        
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </div>
                <div class="col-4">
                    <div>
                        <div class="d-flex align-items-center">
                            <div>
                                <h1>Profile Image</h1>
                            </div>
                            <div>
                                <div class="font-weight-bold">
                                    <a href="/profile/{{ $post->user->id }}" class="no-underline">
                                        <span class="text-dark">{{ $post->user->username }}</span>
                                    </a>
                                    <a href="#" class="pl-2">Follow</a>
                                </div>
                            </div>
                        </div>
        
                        <hr>
        
                        <p>
                            <span class="font-weight-bold">
                                <a href="/profile/{{ $post->user->id }}" class="no-underline">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                            </span> {{ $post->caption }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </x-slot>

</x-app-layout>