<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PERTTOOL - Repositório de Redes PERT/CPM</title>

        <!-- Parsley -->    
        <link rel="stylesheet" href="css/parsley.css" type="text/css"/>

        <!-- Bootstrap core CSS -->
        <link href="css/aerovant.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">    

        <!-- Animation CSS -->
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <body id="page-top" class="landing-page" style="background:#f4f4f4;">

            @include('partials._navbar')

            @include('partials._login')
            
        </body>
    </body>
</html>
