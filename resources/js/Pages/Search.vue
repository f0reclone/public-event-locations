<script setup>
import { ref } from 'vue';
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import PublicLayout from '@/Layouts/PublicLayout.vue';
import LocationAutocomplete from '@/Components/LocationAutocomplete.vue';

const props = defineProps({places: Array})

console.log(props.places);
</script>

<template>
    <PublicLayout>
      Hello
    </PublicLayout>
  </template>

  <style>
  .autocomplete-div input {
    width: 600px;
  }
  </style>
