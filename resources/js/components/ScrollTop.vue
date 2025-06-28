<script setup lang="ts">
import { ref, onMounted, onUnmounted } from 'vue';

const showScrollTop = ref(false);

const handleScroll = () => {
  showScrollTop.value = window.scrollY > 300;
};

const scrollToTop = () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
};

onMounted(() => {
  window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll);
});
</script>

<template>
  <button
    v-show="showScrollTop"
    @click="scrollToTop"
    class="fixed bottom-4 right-4 z-50 bg-[#f0ba18] text-white p-3 rounded-full shadow-lg hover:bg-yellow-600 transition"
    title="Volver arriba"
  >
    <i class="fas fa-arrow-up text-xl"></i>
  </button>
</template>