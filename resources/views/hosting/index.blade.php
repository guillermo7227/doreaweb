@extends('layout.master')
@section('title', 'Hosting web profesional')
@section('content')
<main>
  <div class="container mx-auto">
    <h1 class="font-bold text-4xl lg:text-5xl leading-none text-center mb-8 text-purple-800">Hosting Web Profesional</h1>

    <div class="grid grid-cols-2">
      <div>
        <h1 class="text-3xl font-bold">Características</h1>
        <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 mt-2 rounded-bl-lg rounded-br-lg">
          <table class="min-w-full">
            <!-- <thead>
              <tr>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider">ID</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Fullname</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Email</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Phone</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Status</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">Created At</th>
                <th class="px-6 py-3 border-b-2 border-gray-300"></th>
              </tr>
            </thead> -->
            <tbody class="bg-white text-purple-800">
              <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="flex items-center">
                    <div>
                      <div class="text-sm leading-5">99.9% Uptime garantizado</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="text-sm leading-5">✔️</div>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="flex items-center">
                    <div>
                      <div class="text-sm leading-5">CPanel, poderoso panel de control
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="text-sm leading-5">✔️</div>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="flex items-center">
                    <div>
                      <div class="text-sm leading-5">Acceso webmail</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="text-sm leading-5">✔️</div>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="flex items-center">
                    <div>
                      <div class="text-sm leading-5">Gestor de DNS</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="text-sm leading-5">✔️</div>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="flex items-center">
                    <div>
                      <div class="text-sm leading-5">Subdominios ilimitados</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="text-sm leading-5">✔️</div>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="flex items-center">
                    <div>
                      <div class="text-sm leading-5">Cuentas FTP ilimitadas</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="text-sm leading-5">✔️</div>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="flex items-center">
                    <div>
                      <div class="text-sm leading-5">Múltiples versiones de PHP</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="text-sm leading-5">✔️</div>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="flex items-center">
                    <div>
                      <div class="text-sm leading-5">phpMyAdmin</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="text-sm leading-5">✔️</div>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="flex items-center">
                    <div>
                      <div class="text-sm leading-5">Softaculous (Wordpress incluido)</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="text-sm leading-5">✔️</div>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="flex items-center">
                    <div>
                      <div class="text-sm leading-5">Apps Ruby On Rails</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="text-sm leading-5">✔️</div>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="flex items-center">
                    <div>
                      <div class="text-sm leading-5">Apps Nodejs</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                  <div class="text-sm leading-5">✔️</div>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-gray-500">
                  <div class="flex items-center">
                    <div>
                      <div class="text-sm leading-5">Apps Python</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-no-wrap border-gray-500">
                  <div class="text-sm leading-5">✔️</div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="h-full  py-16a antialiased bg-primary-very-light font-sans mt-12">
        <!-- <header class="flex flex-col items-center mb-12">
          <h2 class="text-3xl text-primary-normal  font-bold">Our Pricing</h2>
          <div class="pt-8 w-3/5 lg:w-1/5 flex justify-around ">
            <p class="text-sm text-gray-500 font-bold mt-2">Annually</p>
            <div>
              <label for="toggle" class="relative">
                <input type="checkbox" name="toggle" id="" class="hidden" />
                <div class="absolute w-16 h-8 rounded-full shadow-inner inset-y-0 " style="background-image:linear-gradient(90deg, #a3a8f0 0%, #696fdd 100%);"></div>
                <div class="absolute w-6 h-6 bg-white rounded-full shadow inset-y-0 mt-1 ml-1 "></div>
              </label>
            </div>
            <p class="text-sm text-gray-500 font-bold mt-2 ml-16">Monthly</p>
          </div>
        </header> -->
        <section class="flex flex-col lg:flex-row items-start items-center lg:justify-center w-full w-full lg:px-10 py-12a ">
          <article class="bg-white w-full lg:w-custom mb-10 lg:px-4 px-6 py-10 text-center text-primary-dark rounded-lg border">
            <h5 class="font-bold text-base">Plan ilimitado anual</h5>
            <h2 class="pb-4 flex flex-col justify-center font-bold border-b border-gray-300">
              <div class="flex justify-center">
                <span class="text-3xl mt-6 mr-1">USD$</span>
                <span class="text-6xl">20</span><br>
              </div>
              <div class="flex justify-center">
                <span class="text-2xl">(</span>
                <span class="text-lg mt-1 mr-1">COP$</span>
                <span class="text-2xl">75.000)</span>
              </div>
            </h2>
            <ul class="text-sm font-bold">
              <li class="pt-4 pb-4 border-b border-gray-300 text-purple-800">2GB Espacio</li>
              <li class="pt-4 pb-4 border-b border-gray-300 text-purple-800">0.5 TB/mes</li>
              <li class="pt-3 pb-4 border-b border-gray-300 text-purple-800">BD ilimitadas</li>
              <li class="pt-3 pb-4 border-b border-gray-300 text-purple-800">Dominios ilimitados</li>
              <li class="pt-3 pb-4 border-b border-gray-300 text-purple-800">Cuentas Email ilimitadas</li>
              <li class="pt-4 pb-4 border-b border-gray-300 text-purple-800">Con SSH (Acceso remoto)</li>
            </ul>
            <button onclick="window.location='https://mpago.li/1xVP2Ro'" class="mt-6 uppercase text-center text-sm mt-12 xl:px-24 px-12 sm:px-16 py-2 font-bold text-gray-200 rounded-md" style="background-image:linear-gradient(90deg, #a3a8f0 0%, #696fdd 100%);">CONTRATAR</button>
          </article>
          <!-- <article class="lg:w-custom w-4/5 mb-10 px-6 py-16 lg:-mt-1 text-white text-center rounded-lg" style="background-image:linear-gradient(90deg, #a3a8f0 0%, #696fdd 100%);">
            <h5 class="font-bold text-base ">Professional</h5>
            <h2 class="font-bold pb-4 mt-2 border-b border-gray-100 flex justify-center"> <span class="text-3xl mt-6 mr-1">$</span><span class="text-6xl "> 249.99</span></h2>
            <ul class=" text-sm font-bold">
              <li class="pt-4 pb-4 border-b border-gray-200">1 TB Storage</li>
              <li class="pt-4 pb-4 border-b border-gray-200">5 Users Allowed</li>
              <li class="pt-4 pb-4 border-b border-gray-200">Send up to 10 GB</li>
            </ul>
            <button class="uppercase text-center text-sm mt-10 xl:px-24 px-12 sm:px-16 py-2 rounded-md font-bold bg-primary-very-light text-primary-blue">Learn More</button>

          </article> -->
          <!-- <article class="bg-white w-4/5 lg:w-custom mb-10 lg:px-4 px-6 py-10 text-center text-primary-dark rounded-lg">
            <h5 class="font-bold text-base">Master</h5>
            <h2 class="flex justify-center pb-4 font-bold border-b border-gray-200"><span class="text-3xl mt-6 mr-1">$</span><span class="text-6xl">399.99</span></h2>
            <ul class="text-sm font-bold">
              <li class="pt-4 pb-4 border-b border-gray-200">2 TB Storage</li>
              <li class="pt-4 pb-4 border-b border-gray-200">10 Users Allowed</li>
              <li class="pt-4 pb-4 border-b border-gray-200">Send up to 20 GB</li>
            </ul>
            <button class="uppercase text-center text-sm mt-12 xl:px-24 px-12 sm:px-16 py-2 rounded-md font-bold text-primary-very-light" style="background-image:linear-gradient(90deg, #a3a8f0 0%, #696fdd 100%);">Learn More</button>
          </article> -->
        </section>
      </div>

    </div>

</main>
@endsection