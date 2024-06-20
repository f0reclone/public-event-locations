<script setup>
import { ref, watch, defineEmits } from 'vue';

import { OpenStreetMapProvider } from 'leaflet-geosearch';
import AutoComplete from 'primevue/autocomplete';
import { debounce } from 'lodash';
defineProps({ placeCategories: Array });
const emit = defineEmits(['locationSelected']);

const searchInput = ref('');
const lastSelectedPlace = ref({});
const searchResults = ref([]);

const provider = new OpenStreetMapProvider({
    params: {
      countrycodes: 'de', // Restricting the search to Germany
      addressdetails: 1,
      extratags: 1,
      namedetails: 1,
      'accept-language': 'de',
      layer: 'address',
      featureType: 'city'
    }
});
const allowedTypes = ['city', 'town', 'postcode'];

const performSearch = async () => {
    // Fetch results from the provider
    const results = await provider.search({ query: searchInput.value });
  console.log(results);
  
// Filter results to only include cities
  searchResults.value = results.filter(result =>
    allowedTypes.includes(result.raw.addresstype)
  );
};
// Debounce the performSearch function
const debouncedSearch = debounce(performSearch, 300);

// Watch the searchInput ref
watch(searchInput, (newValue) => {
  if (typeof newValue === 'object' && newValue !== null) {
    // Emit the 'inputObjectAssigned' event
    console.log(newValue);
    emit('locationSelected', {latitude: newValue.x, longitude: newValue.y});
    lastSelectedPlace.value = newValue
  }

  if(newValue === null || newValue === '') {
    emit('locationSelected', null)
    lastSelectedPlace.value = null;
  }
});
</script>

<template>
  <AutoComplete
    v-model="searchInput"
    :suggestions="searchResults"
    optionLabel="label"
    @complete="debouncedSearch"
    placeholder="Ort eingeben..."
    forceSelection
    class="autocomplete-div"
    :invalid="lastSelectedPlace === null"
  />
</template>