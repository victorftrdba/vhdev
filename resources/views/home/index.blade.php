@extends('layout.app')

@section('content')

<section class="container-fluid slide bg-light mb-5" data-aos="fade-up">
    <div class="row">
        <div class="col gx-0">
            <div class="swiper-container shadow">
                <div class="swiper-wrapper">
                    <div class="swiper-slide w-100 position-relative"
                        style="background-image:url(https://images.unsplash.com/photo-1612733619095-4ea8ed978657?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80)">
                        <p class="text-swiper position-absolute">Ainda que eu ande pelo vale da sombra da morte, não
                            temerei mal algum</p>
                    </div>
                    <div class="swiper-slide w-100"
                        style="background-image:url(https://images.unsplash.com/photo-1629487017643-e10b36ef4ae5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1534&q=80)">
                        <p class="text-swiper position-absolute">Lorem ipsum dolor sit amet consectetur adipisicing elit
                        </p>
                    </div>
                    <div class="swiper-slide w-100"
                        style="background-image:url(https://images.unsplash.com/photo-1610027425104-3f2c8f7d7e4b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1402&q=80)">
                        <p class="text-swiper position-absolute">Lorem ipsum dolor sit amet consectetur adipisicing elit
                        </p>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>

<section>
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

<section class="container-fluid services shadow pt-5 pb-5 bg-light" data-aos="fade-right">
    <div class="container">
        <div class="row text-dark titles pb-5 pt-5">
            <div class="col fw-bold">
                Tecnologias
            </div>
        </div>
        <div class="row text-dark pb-5">
            <div class="col d-flex flex-column justify-content-center align-items-center">
                <a href="https://laravel.com/" target="_blank">@include('layout.svg.laravel')</a>
                <p class="pt-4 fw-bold">
                    Laravel
                </p>
            </div>
            <div class="col d-flex flex-column justify-content-center align-items-center">
                <a href="https://sass-lang.com/" target="_blank">@include('layout.svg.sass')</a>
                <p class="pt-4 fw-bold">
                    SASS
                </p>
            </div>
            <div class="col d-flex flex-column justify-content-center align-items-center">
                <a href="https://www.php.net/" target="_blank">@include('layout.svg.php')</a>
                <p class="pt-4 fw-bold">
                    PHP
                </p>
            </div>
            <div class="col d-flex flex-column justify-content-center align-items-center">
                <a href="https://www.javascript.com/" target="_blank">@include('layout.svg.javascript')</a>
                <p class="pt-4 fw-bold">
                    JavaScript
                </p>
            </div>
            <div class="col d-flex flex-column justify-content-center align-items-center">
                <a href="https://getbootstrap.com/" target="_blank">@include('layout.svg.bootstrap')</a>
                <p class="pt-4 fw-bold">
                    Bootstrap
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid history shadow pt-5 pb-5" data-aos="fade-left">
    <div class="container">
        <div class="row text-light titles pb-5 pt-5">
            <div class="col">
                Um pouco sobre a experiência...
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-6">
                        <div class="titles">
                            Como é meu trabalho?
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis id unde consequatur
                            facilis eum illo velit magni? Corporis veniam dolores sequi totam aliquam quaerat earum
                            illum hic! Impedit, asperiores corrupti.
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum culpa delectus fugit ipsam
                            temporibus, aliquid labore? Ab adipisci assumenda, voluptatibus ea natus quidem ad
                            consequatur porro possimus, saepe accusantium at?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis laborum quasi numquam
                            ratione laudantium quaerat nemo, ad obcaecati non ea error quisquam, a doloribus commodi
                            quidem omnis mollitia doloremque veritatis?
                        </p>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                        <img src="https://images.unsplash.com/photo-1629515166938-55b480e801ca?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                            class="img-fluid shadow rounded w-100" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid contact pt-5 pb-5" data-aos="fade-right" id="contact">
    <div class="container">
        <div class="row text-light titles pb-5 pt-5">
            <div class="col">
                Contato
            </div>
        </div>
        <div class="row justify-content-center pb-5">
            <div class="col-10">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <form action="">
                            <div class="d-flex">
                                <label class="p-2 w-50 fw-bold" for="nome"> Nome*
                                    <input type="text" class="p-2 form-control" placeholder="Seu nome..." required />
                                </label>
                                <label class="p-2 w-50 fw-bold" for="email"> E-mail*
                                    <input type="text" class="p-2 form-control" placeholder="Seu nome..." required />
                                </label>
                            </div>
                            <label class="p-2 fw-bold" for="assunto"> Assunto*
                                <select name="assunto" class="p-2 form-control">
                                    <option class="form-control">Desenvolvimento</option>
                                    <option class="form-control">Dúvidas</option>
                                    <option class="form-control">Sugestões</option>
                                </select>
                            </label>
                            <label for="mensagem" class="p-2 d-flex flex-column mb-3 fw-bold"> Mensagem*
                                <textarea class="form-control" name="mensagem" id="" cols="30" rows="10"></textarea>
                            </label>
                            <button class="p-2 ms-2 w-25 btn btn-outline-secondary text-white">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
