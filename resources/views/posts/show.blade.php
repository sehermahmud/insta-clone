@extends('layouts.app')

@section('content')
<div class="card" style="width: 80%; margin: 0 auto; float: none; margin-bottom: 10px;">
<div class="card-body">
<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-6">
            <div>
                <div class="d-flex align-items-center">
                    <div style="padding-right: 3%">
                        <img src="/storage/{{ $post->user->profile->image }}" class="rounded-circle w-100" style="max-width: 40px;">
                    </div>
                    <div>
                        <div style="font-weight: bold;">
                            <a href="/profile/{{ $post->user->id }}" style="text-decoration:none; ">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                            {{-- <a href="#" class="pl-3">Follow</a> --}}
                        </div>
                    </div>
                </div>

                <hr>

                <p>
                    <span style="font-weight: bold;">
                        <a href="/profile/{{ $post->user->id }}" style="text-decoration:none; ">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> 
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection