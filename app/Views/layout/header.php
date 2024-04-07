<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <?php
    $link = [
        'href'  => 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
        'rel'  => 'stylesheet',
        'type'  => 'text/css',
        'integrity'  => 'sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN',
        'crossorigin'  => 'anonymous'
    ];

    echo link_tag($link);
    ?>
    <?php
    $attr = [
        'src' => 'https://code.jquery.com/jquery-3.7.1.js',
        'integrity' => 'sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=',
        'crossorigin' => 'anonymous',
    ];
    echo script_tag($attr);
    ?>
    <?php
    $attr = [
        'src' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js',
        'integrity' => 'sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==',
        'crossorigin' => 'anonymous',
        'referrerpolicy' => 'no-referrer',
    ];
    echo script_tag($attr);
    ?>
    <?php
    $attr = [
        'src' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/additional-methods.min.js',
        'integrity' => 'sha512-TiQST7x/0aMjgVTcep29gi+q5Lk5gVTUPE9XgN0g96rwtjEjLpod4mlBRKWHeBcvGBAEvJBmfDqh2hfMMmg+5A==',
        'crossorigin' => 'anonymous',
        'referrerpolicy' => 'no-referrer',
    ];
    echo script_tag($attr);
    ?>
    <?php
    $attr = [
        'src' => 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        'integrity' => 'sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL',
        'crossorigin' => 'anonymous',
    ];
    echo script_tag($attr);
    ?>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">-->
    <style>
        .container {
            max-width: 550px;
        }

        .error {
            color: red;
        }

        ul {
            color: #fff;
        }

        ul li {
            color: #fff;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark text-light navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="student">H4CKER.NET</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="student">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="about">About H4ckBox</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="contact">Contact H4ckAcademy</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Vulnerabilities
                        </a>
                        <ul class="dropdown-menu bg-secondary text-light">
                            <li><a class="dropdown-item text-light" href="#">Action</a></li>
                            <li><a class="dropdown-item text-light" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-light" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>