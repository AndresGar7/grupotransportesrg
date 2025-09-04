<template>
    <!-- Pie de página personalizado -->
    <footer class="bg-[#1f1f1f] text-white py-12 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Columna 1: Nombre y descripción -->
            <div>
            <h3 class="text-3xl font-bold text-[#f0ba18] mb-4 hover:text-yellow-400 transition-colors">
                Grupo Transportes RG
            </h3>
            <p class="text-gray-300 mb-4 hover:text-white transition-colors">
                Somos tu aliado en mudanzas locales y nacionales. Seguridad, cumplimiento y confianza nos definen.
            </p>
            <a href="#cotizar"
                class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-4 py-2 rounded transition">
                ¡Cotiza ahora!
            </a>
            </div>

            <!-- Columna 2: Menú principal -->
            <div>
            <h4 class="text-xl font-semibold mb-4 hover:text-yellow-400 transition-colors">Navegación</h4>
            <ul class="space-y-2">
                <li><a href="/" class="text-gray-300 font-semibold hover:underline hover:text-yellow-400 transition">Inicio</a></li>
                <li><a href="/servicios" class="text-gray-300 hover:underline hover:text-yellow-400 transition">Servicios</a></li>
                <li><a href="/nosotros" class="text-gray-300 hover:underline hover:text-yellow-400 transition">Nosotros</a></li>
                <li><a href="/contacto" class="text-gray-300 hover:underline hover:text-yellow-400 transition">Contacto</a></li>
            </ul>
            </div>

            <!-- Columna 3: Páginas de interés -->
            <div>
            <h4 class="text-xl font-semibold mb-4 hover:text-yellow-400 transition-colors">Páginas de interés</h4>
            <ul class="space-y-2">
                <li><a href="/politicas" class="text-gray-300 hover:underline hover:text-yellow-400 transition">Política de privacidad</a></li>
                <li><a href="/terminos" class="text-gray-300 hover:underline hover:text-yellow-400 transition">Términos y condiciones</a></li>
                <li><a href="/preguntas" class="text-gray-300 hover:underline hover:text-yellow-400 transition">Preguntas frecuentes</a></li>
                <li><a href="/blog" class="text-gray-300 hover hover:underline:text-yellow-400 transition">Blog</a></li>
            </ul>
            </div>

            <!-- Columna 4: Dirección -->
            <div>
            <h4 class="text-xl font-semibold mb-4 hover:text-yellow-400 transition-colors">Contáctanos</h4>
            <p class="text-gray-300 mb-2 hover:text-white transition-colors">
                <strong>Sede Principal:</strong> La Virginia / Risaralda
            </p>
            <p class="text-gray-300 mb-2 hover:text-white transition-colors">
                <strong>Teléfono:</strong>  320 779 7441
            </p>
            <p class="text-gray-300 mb-2 hover:text-white transition-colors">
                <strong>Dirección:</strong> Calle 16A #4A - 05 
            </p>
            <p class="text-gray-300 hover:text-white transition-colors">
                <strong>Ubicación:</strong><a href="https://maps.app.goo.gl/Bqxv3ireyjHzqE8JA" target="_blank" rel="noopener noreferrer"> Abrir Ubicación</a>
            </p>
            </div>

        </div>

        <!-- Línea inferior -->
        <div class="mt-12 border-t border-gray-700 pt-4 text-center text-sm text-gray-400 hover:text-white transition-colors">
            &copy; {{ new Date().getFullYear() }} Grupo Transportes RG. Todos los derechos reservados.
        </div>
    </footer>
</template>