<template>
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
                    <a href="/servicios/mudanza-local" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold text-md px-3 py-2 rounded transition">Ver más →</a>
                </div>
            </div>

            <!-- Recuadro 2 -->
            <div class="bg-white shadow-lg rounded-lg p-4 flex items-start space-x-4 hover:shadow-xl transition">
                <i class="fas fa-route text-3xl text-[#f0ba18]"></i>
                <div class="flex-1">
                    <h3 class="text-xl font-bold text-[#f0ba18] mb-1">Mudanza Nacional</h3>
                    <p class="text-gray-700 text-sm mb-2">Llevamos tus pertenencias a cualquier punto del país con seguridad garantizada.</p>
                    <a href="/servicios/mudanza-nacional" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold text-md px-3 py-2 rounded transition">Ver más →</a>
                </div>
            </div>

            <!-- Recuadro 3 -->
            <div class="bg-white shadow-lg rounded-lg p-4 flex items-start space-x-4 hover:shadow-xl transition">
                <i class="fas fa-box-open text-3xl text-[#f0ba18]"></i>
                <div class="flex-1">
                    <h3 class="text-xl font-bold text-[#f0ba18] mb-1">Empaque Profesional</h3>
                    <p class="text-gray-700 text-sm mb-2">Empacamos todo por ti, usando materiales de calidad y técnicas seguras.</p>
                    <a href="/servicios/empaque-profesional" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold text-md px-3 py-2 rounded transition">Ver más →</a>
                </div>
            </div>

            <!-- Recuadro 4 -->
            <div class="bg-white shadow-lg rounded-lg p-4 flex items-start space-x-4 hover:shadow-xl transition">
                <i class="fas fa-warehouse text-3xl text-[#f0ba18]"></i>
                <div class="flex-1">
                    <h3 class="text-xl font-bold text-[#f0ba18] mb-1">Guardamuebles</h3>
                    <p class="text-gray-700 text-sm mb-2">Almacenamiento seguro y flexible para tus objetos durante la mudanza.</p>
                    <a href="/servicios/guardamuebles" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold text-md px-3 py-2 rounded transition">Ver más →</a>
                </div>
            </div>
        </div>
    </div>
</template>