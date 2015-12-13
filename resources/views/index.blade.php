<!doctype html>
<html lang="nl" ng-app="notos">
<head>
    <meta charset="utf-8">

    <title data-ng-bind="title">noTos</title>

    <meta name="keywords" content="links voor de basisschool">
    <meta name="description"
          content="noTos is een project om links gekoppeld aan wiskunde doelen te verzamelen. Dit is een project van scholengemeenschap de 4 winden.">
    <meta name="author" content="Karl Van Iseghem | de 4 winden">
    <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Favicon -->
    @include('common.favicon')
    @include('common.stylesheets')
</head>


<body class="fixed-header" ng-controller="ShellController as shell">
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-71228516-1', 'auto');
    ga('send', 'pageview');

</script>

<div class="page-box {{$state.current.name}}">
    <div class="page-box-content">

        @include('common.header')

        <div ui-view="main"></div>

    </div>
    <!-- .page-box-content -->
</div>
<!-- .page-box -->

@include('common.footer')

<div class="clearfix"></div>

@include('common.scripts')

</body>
</html>