<!-- Servicios -->
<section id="nuestros-servicios" class="text-purple-800 p-8 lg:p-20 text-center">
  <h1 class="font-bold text-4xl lg:text-5xl leading-none mb-8">Diseño de páginas web, diseño web, diseño tiendas virtuales, sitios web, hosting web y mas.</h1>
  <h2 class="font-bold text-3xl lg:text-4xl mb-8">
    Elige el servicio en el que estas interesado
  </h2>

  <p class="text-lg">Ofrecemos diseño de páginas web profesionales, tiendas online, posicionamiento de páginas web en buscadores y hosting para tu sitio web.</p>

  <section class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mt-10">
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

