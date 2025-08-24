<template>
    <div class="h-2 sm:h-4 md:h-6 lg:h-14"></div>
        <div class="h-2 sm:h-4 md:h-6 lg:h-14"></div>
        <div class="h-2 sm:h-4 md:h-6 lg:h-5"></div>
        
        <!-- Contenedor principal de la imagen y los mensajes -->
        <div class="w-full ease-in-out  items-center justify-center">
            <transition
                    enter-active-class="transition-all duration-5000 ease-out"
                    enter-from-class="opacity-0 -translate-y-12"
                    enter-to-class="opacity-100 translate-y-0"
                    appear
                >
                <img
                    src="/img/welcome.jpg"
                    alt="Bienvenida"
                    class="w-full h-auto max-w-7xl mx-auto object-contain shadow-md"
                />
            </transition>
        </div>

        <!-- Contenedor externo con sombra -->
        <div class="w-full gap-0 md:gap-2 p-0 md:p-0  max-w-7xl  mx-auto shadow-2xl">

            <!-- Contenedor interno -->
            <div class="w-full h-full flex flex-col md:flex-row overflow-hidden relative bg-contain bg-center bg-no-repeat" style="background-image: url('/img/colombia.jpg');" >
                <!-- ✅ Capa de opacidad -->
                <div class="absolute inset-0 bg-white opacity-80"></div>

                <!-- Columna izquierda con texto vertical -->
                <div class="relative w-full md:w-1/2 h-full flex items-center justify-center"> <!-- ✅ relative para que quede encima del overlay -->
                    <transition
                        enter-active-class="transition-all duration-5000 ease-out"
                        enter-from-class="opacity-0 -translate-y-12"
                        enter-to-class="opacity-100 translate-y-0"
                        appear
                    >
                        <div class="flex flex-col text-black text-center items-center justify-center "> <!-- ✅ text-white para mejor contraste -->
                            <div class="h-6 sm:h-12 md:h-[72px] lg:h-[168px]"></div>
                            <p class="text-lg">¿Pensando en mudarte?</p>
                            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl text-[#f0ba18] font-bold">
                                Servicios de mudanzas
                            </h2>
                            <p class="text-lg">Local y nacional</p>

                            <!-- Iconos de estrellas -->
                            <div class="flex space-x-1 mt-2 mb-4">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                            </div>
                        </div>
                    </transition>
                </div>

                <!-- Columna derecha normal -->
                <div class="relative w-full md:w-1/2 md:h-full flex flex-col p-4"> <!-- ✅ relative aquí también -->
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
                        <a href="#cotizar" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold text-sm px-3 py-2 rounded transition">Cotiza aquí</a>
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
                        <a href="#cotizar" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold text-sm px-3 py-2 rounded transition">Cotiza aquí</a>
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
                        <a href="#cotizar" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold text-sm px-3 py-2 rounded transition">Cotiza aquí</a>
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
                        <a href="#cotizar" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold text-sm px-3 py-2 rounded transition">Cotiza aquí</a>
                    </div>
                    </div>

                </div>
        </div>

            <!-- Sección ¿Por qué elegirnos? -->
            <div class="w-full bg-white py-16 px-4">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-4xl md:text-5xl font-bold text-[#f0ba18] mb-6">
                    ¿Por qué hacer tu mudanza con Grupo Transportes RG?
                    </h2>
                    <p class="text-lg text-gray-700 leading-relaxed mb-4">
                        Porque es la empresa en Colombia que más ventajas, seguridad y beneficios otorga a sus clientes.
                    </p>
                </div>
                <!-- Sección de cualidades -->
                
                <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        
                    <!-- Recuadro 1 -->
                    <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-xl transition">
                    <h3 class="text-2xl font-bold text-[#f0ba18] mb-2">Experiencia</h3>
                    <img
                        src="/img/experiencia.jpg"
                        alt="Imagen experiencia"
                        class="w-48 h-48  mx-auto mb-4 rounded transform transition-transform duration-300 hover:scale-105"
                    />
                    <p class="text-gray-700 text-sm">
                        Más de 20 años realizando mudanzas a nivel nacional e internacional.
                    </p>
                    </div>
        
                    <!-- Recuadro 2 -->
                    <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-xl transition">
                    <h3 class="text-2xl font-bold text-[#f0ba18] mb-2">Profesionalismo</h3>
                    <img
                        src="/img/profesionalismo.png"
                        alt="Imagen profesionalismo"
                        class="w-48 h-48 object-cover mx-auto mb-4 rounded transform transition-transform duration-300 hover:scale-105"
                    />
                    <p class="text-gray-700 text-sm">
                        Personal capacitado, amable y puntual en cada servicio prestado.
                    </p>
                    </div>
        
                    <!-- Recuadro 3 -->
                    <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-xl transition">
                    <h3 class="text-2xl font-bold text-[#f0ba18] mb-2">Calidad</h3>
                    <img
                        src="/img/calidad.png"
                        alt="Imagen calidad"
                        class="w-48 h-48 object-cover mx-auto mb-4 rounded transform transition-transform duration-300 hover:scale-105"
                    />
                    <p class="text-gray-700 text-sm">
                        Servicios respaldados por estándares de calidad y satisfacción del cliente.
                    </p>
                    </div>
        
                    <!-- Recuadro 4 -->
                    <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-xl transition">
                    <h3 class="text-2xl font-bold text-[#f0ba18] mb-2">Nuestros Vehículos</h3>
                    <img
                        src="/img/vehiculos.png"
                        alt="Imagen vehículos"
                        class="w-48 h-48 object-cover mx-auto mb-4 rounded transform transition-transform duration-300 hover:scale-105"
                    />
                    <p class="text-gray-700 text-sm">
                        Flota moderna, equipada y adaptada para proteger tus pertenencias.
                    </p>
                    </div>
        
                    <!-- Recuadro 5 -->
                    <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-xl transition">
                    <h3 class="text-2xl font-bold text-[#f0ba18] mb-2">Seguridad</h3>
                    <img
                        src="/img/seguridad.png"
                        alt="Imagen seguridad"
                        class="w-48 h-48 object-cover mx-auto mb-4 rounded transform transition-transform duration-300 hover:scale-105"
                    />
                    <p class="text-gray-700 text-sm">
                        Monitoreo, embalaje profesional y manejo cuidadoso en todo momento.
                    </p>
                    </div>
        
                    <!-- Recuadro 6 -->
                    <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-xl transition">
                    <h3 class="text-2xl font-bold text-[#f0ba18] mb-2">Cumplimiento</h3>
                    <img
                        src="/img/cumplimiento.png"
                        alt="Imagen cumplimiento"
                        class="w-48 h-48 object-cover mx-auto mb-4 rounded transform transition-transform duration-300 hover:scale-105"
                    />
                    <p class="text-gray-700 text-sm">
                        Entregas a tiempo, con comunicación constante y compromiso total.
                    </p>
                    </div>
        
                </div>
                
            </div>
        </div>
</template>