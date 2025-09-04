<script setup lang="ts">
import { Head } from '@inertiajs/vue3'
import Navbar from '@/components/Navbar.vue'
import Footer from '@/components/Footer.vue'
import ScrollTop from '@/components/ScrollTop.vue'
import WhatsAppButton from '@/components/WhatsAppButton.vue'
import { ref, onMounted } from 'vue'

const navbarHeight = ref(0)

onMounted(() => {
  const header = document.querySelector('header')
  if (header) {
    navbarHeight.value = header.offsetHeight
  }
})

</script>

<template>
  <Head title="Bienvenido" /> 
  <div class="flex min-h-screen flex-col items-center bg-[#FDFDFC] text-[#1b1b18] dark:bg-[url('/img/diamond-sunset.svg')] lg:justify-center">
    <Navbar />
        <main :style="{ paddingTop: navbarHeight + 'px' }" class="flex-1">
          <slot />
        </main>
  </div>
  <Footer /> 
  <WhatsAppButton />
  <ScrollTop />
</template>
