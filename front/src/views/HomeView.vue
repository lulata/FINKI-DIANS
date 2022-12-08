<template>
  <div class="home-page" :class="{ dark: darkMode }">
    <div class="home-page-header">
      <div class="home-page-title">
        <h1 class="paragraph-big">DIANS PROJECT</h1>
        <h4 class="header-4">Select additional filters</h4>
      </div>
      <div class="button" @click="darkMode = !darkMode">
        {{ darkMode ? "White" : "Dark" }} mode
      </div>
    </div>

    <MapFilters @applyFilters="updateMapData()" />
    <div
      id="leafletmap"
      ref="leafletmap"
      style="width: 100%; height: 500px"
    ></div>
    <TableData />
  </div>
</template>

<script lang="ts" setup>
import { ref } from "vue";
import "leaflet/dist/leaflet.css";
import { makeMap } from "@/composables/Map";
import TableData from "@/components/TableData.vue";
import MapFilters from "@/components/MapFilters.vue";

const darkMode = ref(false);
const map: any = ref(makeMap());

function updateMapData() {
  map.value.updateMap(true);
}
</script>
