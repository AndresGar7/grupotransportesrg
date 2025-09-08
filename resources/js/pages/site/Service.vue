  <script setup lang="ts">
  import { Head } from '@inertiajs/vue3'
   import MainLayout from '../MainLayout.vue'
  </script>

  <template>
    <MainLayout>
      <Head title="Servicios" />
        <div class="w-full gap-0 md:gap-2 p-0 md:p-0 max-w-7xl  mx-auto shadow-2xl z-50">

            <!-- Contenedor interno -->
          <div class="w-full min-h-[80vh] flex flex-col md:flex-row relative bg-cover bg-center bg-no-repeat" style="background-image: url('/img/colombia.jpg');">
            <!-- Capa de opacidad -->
            <div class="absolute inset-0 bg-white/80"></div>

            <!-- Contenedor centrado con ancho máximo -->
            <div class="relative w-full max-w-7xl mx-auto flex flex-col md:flex-row z-10">
              
              <!-- Columna izquierda con texto -->
              <div class="w-full md:w-1/2 flex items-center justify-center p-6 md:p-12">
                <transition
                  enter-active-class="transition-all duration-5000 ease-out"
                  enter-from-class="opacity-0 -translate-y-12"
                  enter-to-class="opacity-100 translate-y-0"
                  appear
                >
                  <div class="flex flex-col text-black items-center md:items-start w-full space-y-4">
                    <!-- Estrellas -->
                    <div class="flex space-x-1">
                      <i class="fas fa-star text-yellow-400 text-2xl"></i>
                      <i class="fas fa-star text-yellow-400 text-2xl"></i>
                      <i class="fas fa-star text-yellow-400 text-2xl"></i>
                      <i class="fas fa-star text-yellow-400 text-2xl"></i>
                      <i class="fas fa-star text-yellow-400 text-2xl"></i>
                    </div>

                    <!-- Título -->
                    <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl text-[#f0ba18] font-bold text-center md:text-left">
                      Servicios 
                    </h2>

                    <!-- Párrafo -->
                    <p class="text-xl text-justify font-medium">
                      Nos encargamos de todo, desde mudanzas hasta transporte de vehículos, 
                      ofreciendo un servicio ágil y confiable en logística. 
                      Haz tu cambio con tranquilidad, nosotros lo hacemos sencillo.
                    </p>

                    <!-- Subtítulo -->
                    <p class="text-2xl font-medium">Local y nacional.</p>
                    <!-- Botón grande -->
                     <div class="w-full flex justify-center mt-6">
                      <a href="https://wa.me/573207797441?text=Hola,%20quiero%20más%20información." target="_blank" 
                        class="mt-4 bg-yellow-500 hover:bg-yellow-600 text-white font-bold text-2xl px-20 py-4 rounded-lg shadow-lg transition transform hover:scale-105">
                        ¡Cotiza Ahora!
                      </a>
                    </div>
                  </div>
                </transition>
              </div>

              <!-- Columna derecha con imagen -->
              <div class="w-full md:w-1/2 flex items-center justify-center p-6">
                <transition
                  enter-active-class="transition-all duration-5000 ease-out"
                  enter-from-class="opacity-0 -translate-y-12"
                  enter-to-class="opacity-100 translate-y-0"
                  appear
                >
                  <img 
                    src="/img/servicios.jpg" 
                    alt="Descripción" 
                    class="object-cover w-full h-[400px] md:h-[500px] rounded-lg shadow-md" 
                  />
                </transition>
              </div>
            </div>
          </div>

           <!-- Sección Servicios -->
            <div class="w-full bg-slate-200 py-12">
                <!-- Título -->
                <div class="w-full flex items-center justify-center mb-10">
                    <h1 class="font-bold text-6xl text-[#f0ba18]">Servicios</h1>
                </div>

                <!-- Recuadros -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 px-8 w-full max-w-6xl mx-auto">
                    
                    <!-- Recuadro 1 -->
                    <div class="bg-white shadow-lg rounded-lg p-4 flex items-start space-x-4 hover:shadow-xl transition">
                    <i class="fas fa-truck-moving text-3xl text-[#f0ba18]"></i>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-[#f0ba18] mb-1">Mudanza Local</h3>
                        <p class="text-gray-700 text-sm mb-2">Servicio rápido y seguro dentro de tu ciudad. Coordinación fácil y eficiente.</p>
                        <div class="mb-2">
                        <a href="/servicios/mudanza-local" class="text-blue-600 hover:underline text-sm font-medium">Ver más →</a>
                        </div>
                        <a href="https://wa.me/573207797441?text=Hola,%20quiero%20más%20información." target="_blank" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold text-sm px-3 py-2 rounded transition">Cotiza aquí</a>
                    </div>
                    </div>

                    <!-- Recuadro 2 -->
                    <div class="bg-white shadow-lg rounded-lg p-4 flex items-start space-x-4 hover:shadow-xl transition">
                    <i class="fas fa-route text-3xl text-[#f0ba18]"></i>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-[#f0ba18] mb-1">Mudanza Nacional</h3>
                        <p class="text-gray-700 text-sm mb-2">Llevamos tus pertenencias a cualquier punto del país con seguridad garantizada.</p>
                        <div class="mb-2">
                        <a href="/servicios/mudanza-nacional" class="text-blue-600 hover:underline text-sm font-medium">Ver más →</a>
                        </div>
                        <a href="https://wa.me/573207797441?text=Hola,%20quiero%20más%20información." target="_blank" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold text-sm px-3 py-2 rounded transition">Cotiza aquí</a>
                    </div>
                    </div>

                    <!-- Recuadro 3 -->
                    <div class="bg-white shadow-lg rounded-lg p-4 flex items-start space-x-4 hover:shadow-xl transition">
                    <i class="fas fa-box-open text-3xl text-[#f0ba18]"></i>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-[#f0ba18] mb-1">Empaque Profesional</h3>
                        <p class="text-gray-700 text-sm mb-2">Empacamos todo por ti, usando materiales de calidad y técnicas seguras.</p>
                        <div class="mb-2">
                        <a href="/servicios/empaque-profesional" class="text-blue-600 hover:underline text-sm font-medium">Ver más →</a>
                        </div>
                        <a href="https://wa.me/573207797441?text=Hola,%20quiero%20más%20información." target="_blank" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold text-sm px-3 py-2 rounded transition">Cotiza aquí</a>
                    </div>
                    </div>

                    <!-- Recuadro 4 -->
                    <div class="bg-white shadow-lg rounded-lg p-4 flex items-start space-x-4 hover:shadow-xl transition">
                    <i class="fas fa-warehouse text-3xl text-[#f0ba18]"></i>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-[#f0ba18] mb-1">Guardamuebles</h3>
                        <p class="text-gray-700 text-sm mb-2">Almacenamiento seguro y flexible para tus objetos durante la mudanza.</p>
                        <div class="mb-2">
                        <a href="/servicios/guardamuebles" class="text-blue-600 hover:underline text-sm font-medium">Ver más →</a>
                        </div>
                        <a href="https://wa.me/573207797441?text=Hola,%20quiero%20más%20información." target="_blank" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold text-sm px-3 py-2 rounded transition">Cotiza aquí</a>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </MainLayout>
  </template>
