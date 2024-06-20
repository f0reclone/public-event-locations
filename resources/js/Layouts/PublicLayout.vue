<script setup>
import Navbar from "@/Components/Navbar.vue";

</script>
<template>
  <div id="app" class="bg-surface">
    <Navbar />
    
    <main>
    <slot></slot>
    </main>
    
    <footer>
      <p>&copy; 2024 My Application</p>
    </footer>
  </div>
</template>

<script>

export default {
  name: 'DefaultLayout',
  components: [Navbar],
};
</script>

<style scoped>
#app {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

header {
  background-color: #4CAF50;
  color: white;
  padding: 1rem;
  text-align: center;
}

main {
  flex: 1;
  padding: 1rem;
}

footer {
  background-color: #4CAF50;
  color: white;
  padding: 1rem;
  text-align: center;
}
</style>
