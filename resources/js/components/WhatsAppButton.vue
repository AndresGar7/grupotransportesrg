<template>
  <a
    href="https://wa.me/573207797441"
    target="_blank"
    class="whatsapp-button"
    title="Chatear por WhatsApp"
  >
    <i class="fab fa-whatsapp text-3xl"></i>
  </a>
</template>

<script setup lang="ts">
// No se necesita JS adicional
</script>

<style scoped>
.whatsapp-button {
  position: fixed;
  bottom: 5rem;
  right: 1rem;
  z-index: 50;
  background-color: #25d366;
  color: white;
  padding: 1rem;
  border-radius: 9999px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform 0.3s, background-color 0.3s;
  
  /* Animaciones */
  animation: floatSide 3s ease-in-out infinite, heartbeat 2s infinite; /* latido más lento */
}

/* Hover: agrandar un poco */
.whatsapp-button:hover {
  background-color: #20b857;
  transform: scale(1.2); /* se hace un poco más grande al hover */
  animation: floatSide 3s ease-in-out infinite, heartbeat 2.5s infinite; /* latido aún más lento */
}

/* Movimiento lateral sutil */
@keyframes floatSide {
  0%, 100% { transform: translateX(0); }
  50% { transform: translateX(5px); }
}

/* Latido tipo corazón */
@keyframes heartbeat {
  0%, 100% { transform: scale(1); }
  25% { transform: scale(1.1); }
  50% { transform: scale(0.95); }
  75% { transform: scale(1.05); }
}
</style>
