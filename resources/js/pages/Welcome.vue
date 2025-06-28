<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import Navbar from '@/Components/Navbar.vue';
import Footer from '@/Components/Footer.vue';
import ScrollTop from '@/components/ScrollTop.vue';
import WhatsAppButton from '@/Components/WhatsAppButton.vue';
import Start from '@/components/Start.vue';

</script>

<template>
    <Head title="Bienvenido" />
    <div class="flex min-h-screen flex-col items-center bg-[#FDFDFC] text-[#1b1b18] dark:bg-[url('/img/diamond-sunset.svg')] lg:justify-center">
        <Navbar />
        <Start/>
    </div>
    <Footer />
    
    <!-- Botón de WhatsApp -->
    <WhatsAppButton />

    <!-- Botón de Volver arriba -->
    <ScrollTop />
</template>
