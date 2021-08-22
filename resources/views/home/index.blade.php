@extends('layout.app')

@section('content')

<section class="container-fluid slide bg-light mb-5" data-aos="fade-up">
    <div class="row">
        <div class="col gx-0">
                <div class="swiper-container shadow">
                <div class="swiper-wrapper">
                    <div class="swiper-slide w-100 position-relative">
                        <img src="https://images.unsplash.com/photo-1612733619095-4ea8ed978657?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80" />
                        <p class="text-swiper position-absolute">Ainda que eu ande pelo vale da sombra da morte, não temerei mal algum</p>
                    </div>
                    <div class="swiper-slide w-100">
                        <img src="https://images.unsplash.com/photo-1629487017643-e10b36ef4ae5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1534&q=80" />
                        <p class="text-swiper position-absolute">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                    </div>
                    <div class="swiper-slide w-100">
                        <img src="https://images.unsplash.com/photo-1610027425104-3f2c8f7d7e4b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1402&q=80" />
                        <p class="text-swiper position-absolute">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
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
        <div class="col">
            <p class="titles pb-3">
                Algumas postagens...
            </p>
        </div>
        <div class="col d-flex justify-content-around pb-5">
            @php
                $count = 2;
            @endphp
            @for ($i = 0; $i <= $count; $i++)
            <div class="card-purple shadow d-flex flex-column justify-content-between">
                <img src="https://i.picsum.photos/id/723/350/200.jpg?hmac=-3SD1y1Z9LLTafcQm9wu9pERXEXDRvQVX4EHrjmiOew" class="card-purple-image" />
                <div class="card-purple-header p-4 pb-0">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit
                </div>
                <div class="card-purple-content p-4">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit totam odit consequatur, quam beatae dolorem accusantium incidunt eos maxime dolore, consectetur inventore commodi nihil, dolor vero iste voluptate enim. Qui!
                </div>
            </div>
            @endfor
        </div>
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis id unde consequatur facilis eum illo velit magni? Corporis veniam dolores sequi totam aliquam quaerat earum illum hic! Impedit, asperiores corrupti.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum culpa delectus fugit ipsam temporibus, aliquid labore? Ab adipisci assumenda, voluptatibus ea natus quidem ad consequatur porro possimus, saepe accusantium at?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis laborum quasi numquam ratione laudantium quaerat nemo, ad obcaecati non ea error quisquam, a doloribus commodi quidem omnis mollitia doloremque veritatis?
                    </p>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <img src="https://images.unsplash.com/photo-1629515166938-55b480e801ca?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="img-fluid shadow rounded w-100" />
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="container-fluid contact pt-5 pb-5" data-aos="fade-right">
<div class="container">
    <div class="row text-light titles pb-5 pt-5">
        <div class="col">
            Contato
        </div>
    </div>
    <div class="row justify-content-center pb-5">
        <div class="col-10">
            <div class="row">
                <div class="col">
                    <form action="">
                    <label for="nome"> Nome*
                        <input type="text" class="form-control" placeholder="Seu nome..." required />
                    </label>
                    <label for="email"> E-mail*
                        <input type="text" class="form-control" placeholder="Seu nome..." required />
                    </label>
                    <label for="assunto"> Assunto*
                        <select name="assunto" class="form-control">
                            <option class="form-control">Desenvolvimento</option>
                            <option class="form-control">Dúvidas</option>
                            <option class="form-control">Sugestões</option>
                        </select>
                    </label>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection
