@extends('layout.app')

@section('content')

<section class="template-blog-index">
    <div class="container cards-purple pt-4 pb-5">
        <div class="row">
            <div class="col-12">
                <p class="titles pb-3">
                    Blog vhDev
                </p>
            </div>
            @forelse ($posts as $items)
            <div class="col d-flex justify-content-around pb-5">
                <div class="card-purple shadow d-flex flex-column justify-content-between">
                    <img src="https://images.ctfassets.net/hrltx12pl8hq/3MbF54EhWUhsXunc5Keueb/60774fbbff86e6bf6776f1e17a8016b4/04-nature_721703848.jpg?fit=fill&w=480&h=270" class="card-purple-image" />
                    <div class="card-purple-header p-4 pb-0">
                        {{$items->title}}
                    </div>
                    <div class="card-purple-content p-4">
                        {!!$items->excerpt!!}<br>
                        <a href="{{route('blog.show', $items->slug)}}" class="text-white">Saiba Mais</a>
                    </div>
                </div>

            </div>
            @empty
            @endforelse
        </div>
    </div>
</section>

@endsection
