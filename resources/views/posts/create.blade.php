<x-app-layout>

    <x-slot name="header">
    <div class="container">
<form action="/posts/store" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-header">{{ __('Add Post') }}</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="caption" class="col-md-4 col-form-label text-md-right">Post Caption</label>

                            <div class="col-md-6">
                                <input id="caption" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror"
                                     value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Post Image</label>
                            <input type="file" class="form-control-file" id="new_post_image" name="image" required>
                            @error('image')
                                        <strong>{{ $message }}</strong>
                                @enderror
                        </div>
                        <div class="form-group row pt-3">
                            <button class="btn btn-primary">Add New Post</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</form>

    </div>
</x-slot>

</x-app-layout>
