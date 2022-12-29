<template>
  <div class="buttons-container">
    <div class="top-row">
      <button
        class="button"
        @click="applyFilters('withProperties')"
        :class="{
          'selected-option': store.selectedFilters.includes('withProperties'),
          'disabled-option': store.selectedFilters.includes('coordinatesOnly'),
        }"
        :disabled="store.selectedFilters.includes('coordinatesOnly')"
      >
        With Properties
      </button>
      <button
        class="button"
        @click="applyFilters('withAtm')"
        :class="{
          'selected-option': store.selectedFilters.includes('withAtm'),
          'disabled-option': store.selectedFilters.includes('coordinatesOnly'),
        }"
        :disabled="store.selectedFilters.includes('coordinatesOnly')"
      >
        With ATM
      </button>
      <button
        class="button"
        @click="applyFilters('coordinatesOnly')"
        :class="{
          'selected-option': store.selectedFilters.includes('coordinatesOnly'),
          'disabled-option':
            store.selectedFilters.includes('withEmail') ||
            store.selectedFilters.includes('withPhone') ||
            store.selectedFilters.includes('withProperties') ||
            store.selectedFilters.includes('withAtm'),
        }"
        :disabled="
          store.selectedFilters.includes('withEmail') ||
          store.selectedFilters.includes('withPhone') ||
          store.selectedFilters.includes('withProperties') ||
          store.selectedFilters.includes('withAtm')
        "
      >
        Coordinates only
      </button>
      <button
        class="button"
        @click="applyFilters('withEmail')"
        :class="{
          'selected-option': store.selectedFilters.includes('withEmail'),
          'disabled-option': store.selectedFilters.includes('coordinatesOnly'),
        }"
        :disabled="store.selectedFilters.includes('coordinatesOnly')"
      >
        With Email
      </button>
      <button
        class="button"
        @click="applyFilters('withPhone')"
        :class="{
          'selected-option': store.selectedFilters.includes('withPhone'),
          'disabled-option': store.selectedFilters.includes('coordinatesOnly'),
        }"
        :disabled="store.selectedFilters.includes('coordinatesOnly')"
      >
        With Phone
      </button>
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
