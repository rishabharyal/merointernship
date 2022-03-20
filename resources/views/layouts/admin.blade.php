<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Admin</title>


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" crossorigin="anonymous">


</head>
<body>

<main>
    <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
        <a href="/admin" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
            <img src="{{asset('images/logo.png')}}"  title="Logo" width="100%"/>
        </a>
        <a href="/" class="d-flex align-items-center pb-3 mb-3 text-decoration-none border-bottom">
            <span style="font-size: 28px">🏠</span> &nbsp; Back to MeroInternship
        </a>
        <ul class="list-unstyled ps-0">
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                   Dashboard
                </button>
                <div class="collapse show" id="home-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark rounded">Overview</a></li>
                        <li><a href="#" class="link-dark rounded">Updates</a></li>
                        <li><a href="#" class="link-dark rounded">Reports</a></li>
                    </ul>
                </div>
            </li>
            <li class="border-top my-3"></li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                    Account
                </button>
                <div class="collapse" id="account-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark rounded">Settings</a></li>
                        <li><a href="#" class="link-dark rounded">Sign out</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

    <div class="b-divider"></div>

    <div class="row">
        <div class="col-12">
            @yield('content')
        </div>
    </div>
</main>


<script src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script>

</body>
</html>
