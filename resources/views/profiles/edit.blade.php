<x-app-layout>

    <x-slot name="header">
    <div class="container">
<form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-header">{{ __('Edit Profile') }}</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Title</label>

                            <div class="col-md-6 mb-4">
                                <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                     value="{{ $user->profile->title }}" autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <label class="col-md-4 col-form-label text-md-right">Description</label>
                            <div class="col-md-6 mb-4">
                                <input id="description" name="description" type="text" class="form-control @error('description') is-invalid @enderror"
                                     value="{{ $user->profile->description }}" autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label class="col-md-4 col-form-label text-md-right">URL</label>
                            <div class="col-md-6">
                                <input id="url" name="url" type="text" class="form-control @error('url') is-invalid @enderror"
                                     value="{{ $user->profile->url }}" autocomplete="url" autofocus>

                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Profile Image</label>
                            <input type="file" class="form-control-file" id="new_profile_image" name="image">
                            @error('image')
                                        <strong>{{ $message }}</strong>
                                @enderror
                        </div>
                        <div class="form-group row pt-3">
                            <button class="btn btn-primary">Update Profile</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</form>

    </div>
</x-slot>

</x-app-layout>
