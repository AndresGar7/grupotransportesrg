<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
import MainLayout from '../MainLayout.vue'
import ServiceSection from '@/components/ServiceSection.vue';
</script>

<template>
  <MainLayout>
    <Head title="Servicios" />

    <!-- Contenedor principal con sombra -->
    <div class="w-full gap-0 md:gap-2 p-0 max-w-7xl mx-auto shadow-2xl z-50">

      <!-- Contenedor interno con imagen de Colombia -->
      <div class="w-full flex flex-col md:flex-row relative bg-cover bg-center md:bg-contain md:bg-no-repeat" style="background-image: url('/img/colombia.jpg');">
        <!-- Overlay de opacidad -->
        <div class="absolute inset-0 bg-white/80"></div>

        <!-- Contenedor centrado -->
        <div class="relative w-full max-w-7xl mx-auto flex flex-col md:flex-row z-10">

          <!-- Columna izquierda con texto -->
          <div class="relative w-full md:w-1/2 h-full flex flex-col items-center justify-center p-6 md:p-12 bg-white md:bg-transparent">
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
          <div class="relative w-full md:w-1/2 flex items-center justify-center p-6">
            <transition
              enter-active-class="transition-all duration-5000 ease-out"
              enter-from-class="opacity-0 -translate-y-12"
              enter-to-class="opacity-100 translate-y-0"
              appear
            >
              <img 
                src="/img/servicios.jpg" 
                alt="Descripción" 
                class="object-contain w-full h-[400px] md:h-[500px] rounded-lg shadow-md" 
              />
            </transition>
          </div>
        </div>
      </div>

      <!-- Sección Servicios -->
      <ServiceSection></ServiceSection>
    </div>
  </MainLayout>
</template>
