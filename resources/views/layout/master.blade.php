
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="facebook-domain-verification" content="7kd77ulgbho5bl9mgmu5llj54jnxi3" />
    <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '233145378552106');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=233145378552106&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


    <title>
      Doreaweb, Hosting y Diseño Web Profesional - 
      @yield('title')
    </title>

    {!! SEO::generate() !!}

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @include('layout.includes.css')
  </head>
  <body>
    @include('layout.header')
    @yield('content')
    @include('layout.footer')

    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
