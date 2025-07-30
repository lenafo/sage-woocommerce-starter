<!doctype html>
<html {!! get_language_attributes() !!}>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @php wp_head() @endphp
</head>
<body @php body_class() @endphp>
  @include('partials.header')
  <main>
    @yield('content')
  </main>
  @include('partials.footer')
  @php wp_footer() @endphp
</body>
</html>
