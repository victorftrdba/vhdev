<header class="container-fluid" id="bg-change">
<div class="container pb-3 pt-3">
    <div class="row justify-content-center align-items-center">
        <div class="col-2 d-flex justify-content-center">
            <img src="https://img.icons8.com/ios/50/ffffff/machine-learning.png"/>
        </div>
        <div class="col-10 d-flex justify-content-end">
            <nav class="navbar navbar-expand-lg navbar-light" id="bg-change">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item px-2">
                        <a class="nav-link text-white" href="{{ route('home.index') }}">Página Principal</a>
                        </li>
                        <li class="nav-item px-2">
                        <a class="nav-link text-white" href="{{ route('blog.index') }}">Blog</a>
                        </li>
                        @if(Route::currentRouteName() == 'home.index')
                        <li class="nav-item px-2">
                        <a class="nav-link contact-btn text-white" href="#contact">Contato</a>
                        </li>
                        @endif
                    </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
</header>
