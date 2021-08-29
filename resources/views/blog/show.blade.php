@extends('layout.app')

@section('content')
<section class="template-blog-show">
<div class="container">
    <div class="row">
        <div class="col titles mb-3">
                {!!$post->title!!}
        </div>
        <div>
            {!!$post->body!!}
        </div>
        <div class="fw-bold">Autor: {!! $post->user->name !!}</div>
    </div>
</div>
</section>
@endsection
