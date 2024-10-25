@extends('layouts.base')

@section('title', __('Страница не найдена'))

@section('content')
<!-- <style>
@import 'https://fonts.googleapis.com/css?family=VT323';
 body, h1, h2, h3, h4, p, a {
	 color: #e0e2f4;
}
 body, p {
	 font: normal 20px/1.25rem 'VT323', monospace;
}
 h1 {
	 font: normal 2.75rem/1.05em 'VT323', monospace;
}
 h2 {
	 font: normal 2.25rem/1.25em 'VT323', monospace;
}
 h3 {
	 font: lighter 1.5rem/1.25em 'VT323', monospace;
}
 h4 {
	 font: lighter 1.125rem/1.2222222em 'VT323', monospace;
}
 body {
	 background: #0414a7;
}
 .container {
	 width: 90%;
	 margin: auto;
	 max-width: 640px;
}
 .bsod {
	 padding-top: 10%;
}
 .bsod .neg {
	 text-align: center;
	 color: #0414a7;
}
 .bsod .neg .bg {
	 background: #aaa;
	 padding: 0 15px 2px 13px;
}
 .bsod .title {
	 margin-bottom: 50px;
}
 .bsod .nav {
	 margin-top: 35px;
	 text-align: center;
}
 .bsod .nav .link {
	 text-decoration: none;
	 padding: 0 9px 2px 8px;
}
 .bsod .nav .link:hover, .bsod .nav .link:focus {
	 background: #aaa;
	 color: #0414a7;
}
 

</style>
<main class="bsod container">
  <h1 class="neg title"><span class="bg">Error - 404</span></h1>
  <p>An error has occured, to continue:</p>
  <p>* Return to our homepage.<br />
  * Send us an e-mail about this error and try later.</p>
  <nav class="nav">
    <a href="#" class="link">index</a>&nbsp;|&nbsp;<a href="#" class="link">webmaster</a>
  </nav>
</main> -->
<!DOCTYPE html>
<html lang="{{ $lang }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('Страница не найдена')</title>
</head>
<body>
    <h1>404 - @lang('Страница не найдена')</h1>
    <p>@lang('Извините, но страница, которую вы ищете, не существует.')</p>
    <a href="{{ url("/$lang") }}">@lang('Вернуться на главную страницу')</a>
</body>
</html>

@endsection