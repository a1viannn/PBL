
<nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand">
            <img src="{{ asset('image/Group 134.png') }}" alt="Logo" width="90" height="60"
                class="d-inline-block align-text-top">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav nav-underline mx-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link active shadow-text" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link shadow-text" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link shadow-text" href="#">Team</a>
                <li class="nav-item">
                    <a class="nav-link shadow-text" href="#">Contact</a>
                </li>
            </ul>

            {{-- Right Navbar --}}
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    {{-- <a class="nav-link dropdown-toggle " data-bs-toggle="dropdown" role="button"
                        aria-expanded="false"><img src="{{ asset('image/Group 134.png') }}" class="rounded-circle"
                            style="width: 50px;" alt="...">Login</a> --}}
                    <a class="nav-link shadow-text" href="{{ route('login') }}"></i>Login</a>



                </li>
            </li>

            </ul>
        </div>

    </div>
</nav>
