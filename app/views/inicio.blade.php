<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>AbogadoIus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{ HTML::style('assets/css/bootstrap.css')}}
    {{ HTML::style('assets/css/bootstrap-responsive.css')}}
    {{ HTML::style('assets/js/rs-plugin/css/settings.css') }}
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::style('assets/css/font-awesome.css') }}
    {{ HTML::style('assets/css/font-awesome.css') }}
    {{ HTML::style('assets/css/styler.css') }}"
    {{ HTML::style('assets/js/style-switcher/styler.css') }}"

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
</head>

<body>

<div id="container" class="main">
<div id="out">
<div id="home_marker"></div>
<div id="header">
    <div class="inner">
        <!-- begin notification bar -->
        <div class="notify-bar">
            <div class="container">
                <div class="row">
                    <div class="span11">
                        <!-- edit notification message here -->
                        <p>Optional notification bar for displaying important messages to your clients and colleagues. It only shows when you want it to.</p>
                    </div>
                    <div class="span1"><a href="#" class="notify-close"><i class="icon-remove-sign"></i></a></div>
                </div>
            </div>
        </div>
        <!-- /end notification bar -->
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="contacts_block">
                        <!-- edit phone number here -->
                        <div class="phone styler_color">CALL US TOLL FREE <span>888-555-1LAW</span></div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <a href="#" class="scrollup"></a>
        </div>
    </div>
</div>

<div id="wrapper">

@include('slider')

<div class="container">

@include('redes_sociales')


<div class="welcome">
    <div class="row">
        <div class="span8">
            @include('welcome')
        </div>
           @include('testimonios');
    </div>
</div>
@include('areas')


@include('abogados')

<!-- begin results -->
@include('juicios_ganados')

<!-- begin faqs -->
@include('faqs')

@include('contacto');
</div>

<!-- begin map -->
<div id="map"></div>
<!-- /end map -->

</div>
<div id="empty"></div>
</div>
</div>

@include('footer')


{{ HTML::script('assets/js/jquery-1.8.3.min.js') }}
{{ HTML::script('assets/js/jquery-ui.min.js') }}
{{ HTML::script('assets/js/bootstrap.js') }}

<!-- start style switcher -->
{{ HTML::script('assets/js/style-switcher/style-switcher.js') }}"

<!-- /end style switcher -->

{{ HTML::script('assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}">
{{ HTML::script('assets/js/rs-plugin/js/jquery.themepunch.plugins.min.js') }}
{{ HTML::script('assets/js/jquery.carouFredSel-6.2.1.js') }}
{{ HTML::script('assets/js/jquery.easy-pie-chart.js') }}
{{ HTML::script('assets/js/library.js') }}
{{ HTML::script('assets/js/function.js') }}
{{ HTML::script('assets/js/mail_validation.js') }}
<script type="text/javascript" src="http://www.google.com/jsapi"></script>

</body>
</html>