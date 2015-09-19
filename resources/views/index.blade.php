<!doctype html>
<html lang="nl" ng-app="notos">
<head>
    <meta charset="utf-8">

    <title data-ng-bind="title">noTos</title>

    <meta name="keywords" content="links voor de basisschool">
    <meta name="description" content="noTos is een project om links gekoppeld aan wiskunde doelen te verzamelen. Dit is een project van scholengemeenschap de 4 winden.">
    <meta name="author" content="Karl Van Iseghem | de 4 winden">
    <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">

    @include('common.stylesheets')
</head>


<body class="fixed-header" ng-controller="ShellController as shell">


<div class="page-box {{$state.current.name}}">
    <div class="page-box-content">

        @include('common.header')

        <div ui-view="main" ></div>

    </div>
    <!-- .page-box-content -->
</div>
<!-- .page-box -->

@include('common.footer')

<div class="clearfix"></div>

@include('common.scripts')

</body>
</html>