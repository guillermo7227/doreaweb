@extends('layout.master')
@section('title', 'Inicio')
@section('content')
    <main>
        <!-- Hero -->
        <section class="min-h-screen bg-gray-800 grid grid-cols-2 px-10">

            <div class="flex flex-col justify-center text-gray-100">
                <h1 class="text-5xl font-bold">SITIOS WEB PROFESIONALES EN VALLEDUPAR</h1>
                <p class="text-3xl">Llevamos tu presencia al ciberespacio</p>
                <a href="#contacto" class="bg-red-700 text-gray-300 font-semibold w-1/2 py-2 px-10 text-2xl mt-4">TRABAJEMOS JUNTOS</a>
            </div>

            <div class="flex items-center justify-center">
                <img src="{{ asset('img/spaceship.png') }}" width="500" alt="">
            </div>

        </section>


        <!-- Quiénes somos -->
         <section id="quienes-somos" class="bg-red-500 h-40 flex flex-col justify-between py-10 items-center text-gray-100">
            <h1 class="font-bold text-3xl">DISEÑO DE PÁGINAS WEB</h1>
            <p><i>Diseño páginas web Valledupar – Diseño páginas web administrables y con tecnología, Cms, html 5, Css3, Php, Mysql y muchos más..</i></p>
        </section>

        <section class="bg-purple-800 grid grid-cols-2 pr-10 text-gray-200 pt-24">
            <div class="flex justify-center items-center">
                <img src="{{ asset('img/working.png') }}" alt="" width="400">
            </div>
            <div class="flex flex-col justify-center">
                <h2 class="font-bold text-2xl mb-4">¿QUIÉNES SOMOS?</h2>
                <p class="mb-4">
    Empresa especializada en diseño web de páginas web, tiendas virtuales, catálogos en línea, posicionamiento web en Google (SEO), Marketing digital, diseño de páginas web administrables.
                </p>

                <p class="mb-4">
    Nuestro equipo asesora, moldea y ejecuta soluciones pensadas según sus necesidades y los objetivos que desee lograr. No esperes más somos tu mejor aliado.
                </p>

                <a href="#contacto" class="bg-green-500 text-gray-100 w-1/4 py-2 px-4 text-lg text-center">CONTÁCTENOS</a>

            </div>
        </section>


        <!-- Servicios -->
        <section id="nuestros-servicios" class="text-purple-800 p-20 text-center">
            <h1 class="font-bold text-5xl leading-none mb-8">Diseño de páginas web, diseño web, diseño tiendas virtuales, sitios web, hosting web y mas.</h1>
            <h2 class="font-bold text-4xl mb-8">
                Elige el servicio en el que estas interesado
            </h2>

            <p class="text-lg">Ofrecemos diseño de páginas web profesionales, tiendas online, posicionamiento de páginas web en buscadores y hosting para tu sitio web.</p>

            <section class="grid grid-cols-4 gap-4 mt-10">
                <x-servicio :title="'DISEÑO PÁGINAS WEB'" :image="asset('img/web-design.png')">
                    Doreaweb ofrece soluciones para todo tipo de personas o empresas que desean tener una presencia en internet con una página web.
                </x-servicio>

                <x-servicio :title="'TIENDA VIRTUAL'" :image="asset('img/ecommerce.png')">
                    Diseñamos páginas web transaccionales para que puedas vender y ofrecer productos con un catálogo virtual o tienda el online.
                </x-servicio>

                <x-servicio :title="'POSICIONAMIENTO WEB'" :image="asset('img/seo.png')">
                    Si desea aparecer en los primeros lugares de búsqueda en google, nuestro equipo tiene la solución perfecta para su sitio web.
                </x-servicio>

                <x-servicio :title="'HOSTING WEB'" :image="asset('img/hosting.png')">
                    Tenemos disponibles hosting compartido para que hospede su blog personal o tienda electrónica. Bienvenido al siguiente nivel.
                </x-servicio>
            </section>
        </section>


        <!-- Contacto -->
        <section id="contacto" class="bg-gray-800 grid grid-cols-2 p-20 text-gray-100">
            <div>
                <h2 class="font-bold text-6xl">CONTÁCTENOS</h2>
                <p class="text-2xl mb-6">Trabajemos juntos para llevar su empresa al ciberespacio. Sus clientes lo están buscando en la web y nosotros los ayudaremos a encontrarlo.</p>
                <p class="text-2xl flex items-center">@mdi('chat', 'fill-current') 301 752 0473</p>
                <p class="text-2xl flex items-center">@mdi('email', 'fill-current') contacto@doreaweb.ml</p>
            </div>

            <div>
                <form action="#" ></form>
            </div>
        </section>


    </main>
@endsection
