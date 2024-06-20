<script setup>
import { ref } from 'vue';
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import PublicLayout from '@/Layouts/PublicLayout.vue';
import LocationAutocomplete from '@/Components/LocationAutocomplete.vue';

defineProps({placeCategories: Array})

const coordinates = ref(null);

function setLocation(newCoordinates) {
  coordinates.value = newCoordinates
  console.log('Location set', newCoordinates);
}

function searchLocations() {
  if(coordinates.value === null) {
    console.log('No location selected.')
    return;
  }

  router.get(route('places.search'), coordinates.value);

}
</script>

<template>
    <PublicLayout>
      <!-- Hero Section -->
      <div class="bg-cover bg-center h-[800px] flex items-center justify-center text-center m-[-1rem] backdrop-brightness-50 bg-black/30" style="background-image: url('/images/pexels-jonathanborba-9703892.jpg');">

        <div class="text-center items-center justify-center" >
<h1 class="font-inter font-bold text-5xl leading-none text-center tracking-[3.2px] uppercase text-white flex-none order-0 flex-grow-0 mb-16 backdrop-brightness-50 bg-black/50 max-w-[650px] mx-auto">
  Finde einen Ort für deine Veranstaltung
</h1>
          <div class="mt-4 flex justify-center">
            <div>
    <LocationAutocomplete @location-selected="setLocation"></LocationAutocomplete>
                
            
               </div>
            
            <button class="ml-4 bg-white hover:bg-primary-600 hover:text-white p-2 rounded-md px-6" @click="searchLocations">Suche</button>

        </div>
      </div></div>
      <!-- Categories Section -->
      <div class="container mx-auto px-4 text-center my-20">
        <h2 class="text-4xl font-semibold mb-8">Kategorien</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16">

          <div class="p-4 rounded text-center" v-for="placeCategory in placeCategories">
          <div>
            <img :src="placeCategory.image.path" alt="Category 1" class="mx-auto mb-4 w-100" />
            <h3 class="font-bold" v-text="placeCategory.name" />
            <p class="text-gray-600" v-text="placeCategory.description" />
          </div>
          </div>
        </div>
      </div>
    </PublicLayout>
  </template>

  <style>
  .autocomplete-div input {
    width: 600px;
  }
  </style>
