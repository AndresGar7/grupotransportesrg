<script setup lang="ts">
import { onMounted, ref } from 'vue';

const sectionRef = ref<HTMLElement | null>(null);

onMounted(() => {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        const el = entry.target as HTMLElement;
        if (entry.isIntersecting) {
          el.classList.add('animate-fade-up');
          el.classList.remove('before-fade-up');
        } else {
          el.classList.remove('animate-fade-up');
          el.classList.add('before-fade-up');
        }
      });
    },
    { threshold: 0.1 }
  );

  if (sectionRef.value) {
    observer.observe(sectionRef.value);
  }
});
</script>

<template>
  <div ref="sectionRef">
    <slot />
  </div>
</template>
