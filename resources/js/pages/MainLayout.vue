  <script setup lang="ts">
  import { Head } from '@inertiajs/vue3'
  import Navbar from '@/components/Navbar.vue'
  import Footer from '@/components/Footer.vue'
  import ScrollTop from '@/components/ScrollTop.vue'
  import WhatsAppButton from '@/components/WhatsAppButton.vue'
  </script>

  <template>
    <Head title="Bienvenido" /> 
    <div class="flex min-h-screen flex-col items-center bg-[#FDFDFC] text-[#1b1b18] dark:bg-[url('/img/diamond-sunset.svg')] lg:justify-center">
      <Navbar />
      <slot />
    </div>
    <Footer /> 
    <WhatsAppButton />
    <ScrollTop />
  </template>
