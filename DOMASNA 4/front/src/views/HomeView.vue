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
import { ref, onMounted } from "vue";
import "leaflet/dist/leaflet.css";
import { makeMap } from "@/composables/Map";
import TableData from "@/components/TableData.vue";
import MapFilters from "@/components/MapFilters.vue";
const darkMode = ref(false);
const map: any = ref(makeMap());

onMounted(() => {
  console.error("Stefanija odbi da pija so nas :(")
  console.log(
    "%cStefanija najdobrata demonstratorka!",
    "font-size: 20px; font-weight: bold; color: #fff; background: #000; padding: 5px; border-radius: 8px;margin: 10px;"
  );
  console.log(
    "%cSamo ima eden minus poen :D",
    "font-size: 20px; font-weight: bold; color: #fff; background: #000; padding: 5px; border-radius: 8px;margin: 10px;"
  );
  console.log(
    "%c ",
    "font-size: 100px;width:100px;height:100px; background-image: url('https://cdn.shopify.com/s/files/1/0343/7389/products/OSS_WBS_BOTTLES_JamesonOriginal_V1_844x864.jpg?v=1656339340') no-repeat; background-size: contain;"
  );
});

function updateMapData() {
  map.value.updateMap(true);
}
</script>
