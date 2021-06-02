@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="/img/logo_white_Square.PNG" style="height: 100px;" class="rounded-circle">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <a href="#">Add New Post</a>
                </div>as
                <div class="d-flex">
                    <div class="pr-4"> <strong>150</strong>posts</div>
                    <div class="pr-4"> <strong>15k</strong>followers</div>
                    <div class="pr-4"> <strong>122</strong>following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url }}</a></div>
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
@endsection
