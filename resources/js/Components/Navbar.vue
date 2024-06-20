<template>
  <nav class="bg-white shadow">
    <div class="container mx-auto px-4 py-2 flex justify-between items-center">
      <div class="flex items-center">
        <a href="#" class="text-xl font-bold text-primary-600">BrandLogo</a>
      </div>
      <div class="hidden md:flex space-x-8 ml-10 justify-center flex-grow">
        <a href="#" class="text-gray-600 hover:text-primary-600">Start</a>
        <a href="#" class="text-gray-600 hover:text-primary-600">Veranstaltungsorte</a>
        <a href="#" class="text-gray-600 hover:text-primary-600">Infos</a>
        <a href="#" class="text-gray-600 hover:text-primary-600">+ Ort hinzufügen</a>
      </div>
      <div class="hidden md:flex items-center space-x-4">
        <a href="#" class="bg-primary-600 text-white px-4 py-2 rounded hover:bg-primary-700">Registrieren</a>
        <a href="#" class="border border-primary px-4 py-2 rounded text-primary hover:bg-primary hover:text-white">Log In</a>
      </div>
      <div class="md:hidden">
        <button @click="toggleMenu" class="text-gray-600 focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>
    </div>
    <div v-if="isMenuOpen" class="md:hidden">
      <a href="#" class="block px-4 py-2 text-gray-600 hover:text-primary-600">Start</a>
      <a href="#" class="block px-4 py-2 text-gray-600 hover:text-primary-600">Veranstaltungsorte</a>
      <a href="#" class="block px-4 py-2 text-gray-600 hover:text-primary-600">Infos</a>
      <a href="#" class="block px-4 py-2 text-gray-600 hover:text-primary-600">+ Ort hinzufügen</a>
      <a href="#" class="block px-4 py-2 text-white bg-primary-600 hover:bg-primary-700">Registrieren</a>
      <a href="#" class="block px-4 py-2 text-gray-600 hover:text-primary-600 bg-gray-100 hover:bg-gray-200">Log In</a>
    </div>
  </nav>
</template>

<script>
export default {
  data() {
    return {
      isMenuOpen: false,
    };
  },
  methods: {
    toggleMenu() {
      this.isMenuOpen = !this.isMenuOpen;
    },
  },
};
</script>

<style scoped>
/* Add any additional custom styles here if necessary */
</style>