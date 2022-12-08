<template>
  <div class="buttons-container">
    <div class="top-row">
      <div
        class="button"
        @click="applyFilters('withProperties')"
        :class="{
          'selected-option': store.selectedFilters.includes('withProperties'),
        }"
      >
        With Properties
      </div>
      <div
        class="button"
        @click="applyFilters('withAtm')"
        :class="{
          'selected-option': store.selectedFilters.includes('withAtm'),
        }"
      >
        With ATM
      </div>
      <div
        class="button"
        @click="applyFilters('coordinatesOnly')"
        :class="{
          'selected-option': store.selectedFilters.includes('coordinatesOnly'),
        }"
      >
        Coordinates only
      </div>
      <div
        class="button"
        @click="applyFilters('withEmail')"
        :class="{
          'selected-option': store.selectedFilters.includes('withEmail'),
        }"
      >
        With Email
      </div>
      <div
        class="button"
        @click="applyFilters('withPhone')"
        :class="{
          'selected-option': store.selectedFilters.includes('withPhone'),
        }"
      >
        With Phone
      </div>
    </div>
    <div class="bottom-row">
      <div
        class="button"
        @click="applyFilters('sort')"
        :class="{
          'selected-option': store.sort === 'asc' || store.sort === 'desc',
        }"
      >
        Sort
        {{
          store.sort == "asc"
            ? ": Ascending"
            : store.sort == "desc"
            ? ": Descending"
            : ""
        }}
      </div>
      <div
        class="button"
        @click="applyFilters('limit')"
        :class="{
          'selected-option': store.selectedFilters.includes('sort'),
        }"
      >
        Limit: {{ store.limit === 150 ? "All" : store.limit }}
      </div>
    </div>
  </div>
</template>

<script lang="ts" setup>
import { defineEmits } from "vue";
import { generalStore } from "@/store/generalStore";

const store = generalStore();

const emit = defineEmits(["applyFilters"]);

function applyFilters(filterBy: string) {
  store.filterData(filterBy).then(
    () => {
      emit("applyFilters");
    },
    (error) => {
      console.log(error);
    }
  );
}
</script>
