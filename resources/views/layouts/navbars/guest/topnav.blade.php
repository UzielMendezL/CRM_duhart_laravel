<!-- Navbar -->
<nav class="navbar navbar-expand-lg position-absolute {{ $classes }}">
    <div class="{{ $container ?? 'container-fluid'}} ps-2 pe-0">
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="{{$containerSecondary ?? 'custom-nav-login collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0' }} " id="navigation">
            <ul class=" {{$ulClass ?? 'navbar-nav navbar-nav-hover mx-auto'}} ">
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a href="{{ route('register') }}"
                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center">
                        Sign Up
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                    <a href="{{ route('login') }}"
                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center">
                        Sign In
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
