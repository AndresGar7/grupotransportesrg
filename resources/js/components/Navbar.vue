<script setup lang="ts">
import { ref } from 'vue';

const isMobileMenuOpen = ref(false);
const menuItems = ref([
  { name: 'Servicios', showSubmenu: false, isHovered: false, submenu: ['Ejemplo 1', 'Ejemplo 2', 'Ejemplo 3'] },
  { name: 'Nosotros', showSubmenu: false, isHovered: false, submenu: ['Quiénes somos', 'Nuestro equipo'] },
  { name: 'Contacto', showSubmenu: false, isHovered: false, submenu: ['Email', 'Teléfono'] },
]);

function toggleSubmenu(index: number) {
  menuItems.value[index].showSubmenu = !menuItems.value[index].showSubmenu;
}

function hoverSubmenu(index: number, value: boolean) {
  menuItems.value[index].showSubmenu = value;
  menuItems.value[index].isHovered = value;
}

function toggleMobileMenu() {
  isMobileMenuOpen.value = !isMobileMenuOpen.value;
}
</script>

<template>
    <header class="w-full fixed top-0 left-0 z-50">
            <div class="bg-[#f0ba18] p-2 text-sm text-center md:text-left w-full">
                <div class="max-w-7xl mx-auto flex justify-between items-center relative">
                    <!-- Información contacto (correo y teléfono) -->
                    <div class="flex space-x-1  hidden sm:block">
                        <span class="text-gray-700 space-x-2 text-xl">
                            <a href="mailto:example@example.com" class="text-black font-bold">
                                <i class="fa-solid fa-envelope"></i>
                            </a>
                            <a href="mailto:example@example.com" class="text-black font-bold">
                                example@example.com
                            </a>
                        </span>
                    </div>
                    <div class="border-l-2 h-6"></div>
                    <div class="text-xl">
                        <span class="text-gray-700 flex  space-x-2 justify-between">
                            <a href="tel:+1234567890" class="text-black font-bold">
                                <i class="fa-solid fa-phone-volume"></i>
                            </a>
                            <a href="tel:+1234567890" class="text-black font-bold">
                                (+57) 567-890
                            </a>
                        </span>
                    </div>
                    <div class="border-l-2 h-6 mx-2"></div>
                    <!-- Redes sociales -->
                    <div class="flex space-x-4 hidden sm:block">
                        <a href="#" class="text-gray-700 hover:text-neutral-950 text-3xl"><i class="fa-brands fa-square-facebook"></i></a>
                        <a href="#" class="text-gray-700 hover:text-neutral-950 text-3xl"><i class="fa-brands fa-square-twitter"></i></a>
                        <a href="#" class="text-gray-700 hover:text-neutral-950 text-3xl"><i class="fa-brands fa-square-instagram"></i></a>
                    </div>
                </div>
            </div>

            <nav class="bg-white dark:bg-[#2a2a2a] shadow-md relative">
                <div class="max-w-7xl mx-auto px-8 md:px-10 py-8 flex items-center justify-between h-22 relative">                   
                    <!-- Izquierda: Logo -->
                    <a href="/" class="block w-16 h-16 md:w-20 md:h-20">
                        <img src="/img/logo.svg" alt="Logo" class="w-full h-full object-contain" />
                    </a>

                    <!-- Centro: Menú para escritorio (centrado) -->
                    <div class="hidden md:flex absolute left-1/2 transform -translate-x-1/2 items-center h-full text-white">
                        <ul class="flex space-x-8 text-lg font-semibold">
                            <li>
                                <a href="/" class="flex items-center justify-center h-full px-4 py-2 hover:text-yellow-500">Inicio</a>
                            </li>
                            <li
                                v-for="(item, index) in menuItems"
                                :key="index"
                                class="relative"
                                @mouseenter="hoverSubmenu(index, true)"
                                @mouseleave="hoverSubmenu(index, false)"
                            >
                                <button
                                    @click="toggleSubmenu(index)"
                                    class="flex items-center justify-center space-x-1 h-full px-4 py-2 text-left hover:text-yellow-500"
                                >
                                    <span>{{ item.name }}</span>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 transition-transform"
                                        :class="item.showSubmenu ? 'rotate-180 text-yellow-500' : ''"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        >
                                        <path
                                            fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.172l3.71-3.94a.75.75 0 111.08 1.04l-4.24 4.5a.75.75 0 01-1.08 0l-4.24-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                </button>
                                <!-- Submenú -->
                                <ul
                                    v-if="item.showSubmenu"
                                    class="absolute left-0 top-full mt-1 bg-white dark:bg-[#1f1f1f] text-black dark:text-white shadow-lg rounded py-2 z-50 w-44"
                                >
                                    <li v-for="(sub, i) in item.submenu" :key="i">
                                        <a href="#" class="block px-4 py-2 hover:text-yellow-500">{{ sub }}</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <!-- Derecha: Botón Cotizar -->
                    <div class="hidden md:flex ml-auto">
                    <a
                        href="https://wa.me/54604168308"
                        target="_blank"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-4 py-2 rounded transition block text-center"
                    >
                        ¡Cotiza ahora!
                    </a>
                    </div>

                    <!-- Botón hamburguesa -->
                    <button @click="toggleMobileMenu" class="md:hidden text-black dark:text-white text-3xl focus:outline-none ml-4">
                    <i :class="isMobileMenuOpen ? 'fas fa-times' : 'fas fa-bars'"></i>
                    </button>
                </div>

                <!-- Menú móvil -->
                <div v-if="isMobileMenuOpen" class="md:hidden px-4 pb-4">
                    <ul class="flex flex-col space-y-2 text-lg font-semibold text-black dark:text-white">
                    <li>
                        <a href="/" class="block px-4 py-2 hover:text-yellow-500">Inicio</a>
                    </li>
                    <li
                        v-for="(item, index) in menuItems"
                        :key="index"
                        class="relative"
                    >
                        <button
                        @click="toggleSubmenu(index)"
                        class="w-full flex justify-between items-center px-4 py-2 hover:text-yellow-500"
                        >
                        <span>{{ item.name }}</span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 transition-transform"
                            :class="item.showSubmenu ? 'rotate-180 text-yellow-500' : ''"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                            fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.172l3.71-3.94a.75.75 0 111.08 1.04l-4.24 4.5a.75.75 0 01-1.08 0l-4.24-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd"
                            />
                        </svg>
                        </button>
                        <ul
                        v-if="item.showSubmenu"
                        class="pl-8 mt-1 space-y-1"
                        >
                        <li v-for="(sub, i) in item.submenu" :key="i">
                            <a href="#" class="block px-2 py-1 hover:text-yellow-500">{{ sub }}</a>
                        </li>
                        </ul>
                    </li>
                    <li>
                        <a
                        href="https://wa.me/54604168308"
                        target="_blank"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-4 py-2 rounded transition block text-center"
                        >
                        ¡Cotiza ahora!
                        </a>
                    </li>
                    </ul>
                </div>
            </nav>
        </header>
</template>
