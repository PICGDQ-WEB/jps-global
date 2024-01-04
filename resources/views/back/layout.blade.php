<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head')
    <link rel="shortcut icon" href="/front/media/JPS Global Logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="/back/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
    <script src="/front/js/jquery.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap" rel="stylesheet">
    {{-- Text Editor --}}
    <link rel="stylesheet" href="/back/richtexteditor/rte_theme_default.css" />
    <script type="text/javascript" src="/back/richtexteditor/rte.js"></script>
    <script type="text/javascript" src='/back/richtexteditor/plugins/all_plugins.js'></script>
    {{-- End Text Editor --}}
</head>
<body class="bg-light">
    @yield('body')
</body>
@yield('foot')
<script>
    var editor1 = new RichTextEditor("#inp_editor1");
</script>
<script src="/back/js/script.js"></script>
<script src="https://kit.fontawesome.com/05fc8edc36.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>