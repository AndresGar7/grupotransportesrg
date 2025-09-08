<script setup lang="ts">
    import { Head } from '@inertiajs/vue3'
    import MainLayout from '../MainLayout.vue'
    import ServiceSection from '@/components/ServiceSection.vue';
    import WhyChooseUs from '@/components/WhyChooseUs.vue';
</script>

<template>
    <MainLayout>
        <Head title="Bienvenido" /> 

        <!-- Contenedor principal de la imagen y los mensajes -->
        <div class="w-full ease-in-out items-center justify-center">
            <transition
                    enter-active-class="transition-all duration-5000 ease-out"
                    enter-from-class="opacity-0 -translate-y-12"
                    enter-to-class="opacity-100 translate-y-0"
                    appear
                >
                <img
                    src="/img/welcome.jpg"
                    alt="Bienvenida"
                    class="w-full h-auto max-w-7xl mx-auto object-contain shadow-md mt-0"
                />
            </transition>
        </div>

        <!-- Contenedor externo con sombra -->
        <div class="w-full gap-0 md:gap-2 p-0 md:p-0  max-w-7xl  mx-auto shadow-2xl">

            <!-- Contenedor interno -->
            <div class="w-full h-full flex flex-col md:flex-row overflow-hidden relative bg-[url('/img/colombia2.jpg')] md:bg-[url('/img/colombia.jpg')] bg-cover md:bg-contain md:bg-center md:bg-no-repeat">
                <!-- Capa de opacidad -->
                <div class="absolute inset-0 bg-white opacity-80"></div>

                <!-- Columna izquierda con texto vertical -->
                <div class="relative w-full md:w-1/2 h-full flex items-center justify-center"> <!-- relative para que quede encima del overlay -->
                    <transition
                        enter-active-class="transition-all duration-5000 ease-out"
                        enter-from-class="opacity-0 -translate-y-12"
                        enter-to-class="opacity-100 translate-y-0"
                        appear
                    >
                        <div class="flex flex-col text-black text-center items-center justify-center "> <!-- text-white para mejor contraste -->
                            <div class="h-6 sm:h-12 md:h-[72px] lg:h-[70px]"></div>
                            <p class="text-lg">¿Pensando en mudarte?</p>
                            <h2 class="text-3xl pt-4 sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl text-[#f0ba18] font-bold">
                                Servicios de mudanzas
                            </h2>
                            <p class="text-lg pt-4">Local y nacional</p>

                            <!-- Iconos de estrellas -->
                            <div class="flex space-x-1 mt-2 mb-4">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                            </div>
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

                <!-- Columna derecha normal -->
                <div class="relative w-full md:w-1/2 md:h-full flex flex-col p-4"> <!-- relative aquí también -->
                    <div class="h-2 sm:h-4 md:h-6 lg:h-14"></div>
                    <transition
                        enter-active-class="transition-all duration-5000 ease-out"
                        enter-from-class="opacity-0 -translate-y-12"
                        enter-to-class="opacity-100 translate-y-0"
                        appear
                    >
                        <img src="/img/welcome2.jpg" alt="Descripción" class="object-contain rounded-lg shadow-md" />
                    </transition>
                </div>
            </div>

            
        </div>

        <!-- Sección Servicios -->
        <ServiceSection></ServiceSection>

        <!-- Sección ¿Por qué elegirnos? -->
        <WhyChooseUs></WhyChooseUs>
    </MainLayout>
</template>
