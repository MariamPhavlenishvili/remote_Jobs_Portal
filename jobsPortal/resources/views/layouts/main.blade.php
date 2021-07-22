<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
    <style>

        .button{
            background-color: #6574cd;
            color: white;
            padding: 0.5em 1em;
            text-decoration: none;
            text-transform: uppercase;
            margin-top: 15px;
            border-radius: 5px;
        }

        .button:nth-child(2){
            background-color: #1f6fb2;
            color: white;
            padding: 0.5em 1em;
            text-decoration: none;
            text-transform: uppercase;
            margin-top: 15px;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #fff;
            color: #2d995b;
            font-weight: bold;
        }


    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color:#2a9055;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home">Job Portal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/my_posted_jobs">My posted jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/create_Job">Post a job</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/all_jobs">Find work</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/auth" style="margin-left: 800px">Logout</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="conteiner">
        @yield('content')
    </div>

</body>
</html>
