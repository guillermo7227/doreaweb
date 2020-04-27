<header>
  <section class="bg-purple-600 text-sm text-gray-200 py-2 px-20 flex justify-between">
    <span>Contáctenos ahora 301 752 9473</span>
    <div class="flex">
      <span class="ml-3">
        <a href="mailto:contacto@doreaweb.ml" title="Envíenos un email">@mdi('email', 'fill-current')</a>
      </span>
    </div>
  </section>

  <section class="py-4 lg:px-20 flex flex-col lg:flex-row lg:items-center" x-data="{open: false}">
    <div class="pl-4 pr-6 flex justify-between items-center w-full lg:w-auto">
      <img src="{{ asset('img/logo.png') }}" class="w-1/2 sm:w-auto" alt="Logotipo doreaweb">
      <div class="block lg:hidden text-green-500">
        <button class="border border-green-500 rounded p-2" @click="open=!open">
          @mdi('view-sequential', 'fill-current')
        </button>
      </div>
    </div>
    <nav class="flex items-center font-bold text-lg text-purple-600 pt-2 lg:block" :class="{'hidden': !open}">
      <ul class="flex flex-col lg:flex-row text-center w-full">
        <li><a href="#top" class="mx-3 hover:text-green-600">INICIO</a></li>
        <li><a href="#quienes-somos" class="mx-3 hover:text-green-600">QUIÉNES SOMOS</a></li>
        <li><a href="#nuestros-servicios" class="mx-3 hover:text-green-600">NUESTROS SERVICIOS</a></li>
        <li><a href="#contacto" class="mx-3 hover:text-green-600">CONTACTO</a></li>
      </ul>
    </nav>
  </section>
</header>
