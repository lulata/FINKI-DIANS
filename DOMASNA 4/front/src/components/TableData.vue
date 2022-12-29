<template>
  <h1 class="header-2">Table data preview</h1>

  <div class="card-container">
    <div class="card" v-for="bank in store.banks" :key="bank.id">
      <div class="card-info full-width" v-if="checkBankDataProperties('name')">
        <p class="card-info-title">Name</p>
        <p class="card-info-value" :title="bank.name ? bank.name : '/'">
          {{ bank.name ? bank.name : "/" }}
        </p>
      </div>

      <div class="card-info" v-if="checkBankDataProperties('longitude')">
        <p class="card-info-title">Longitude</p>
        <p class="card-info-value">
          {{ bank.longitude ? bank.longitude : "/" }}
        </p>
      </div>

      <div class="card-info" v-if="checkBankDataProperties('latitude')">
        <p class="card-info-title">Latitude</p>
        <p class="card-info-value">
          {{ bank.latitude ? bank.latitude : "/" }}
        </p>
      </div>

      <div
        class="card-info full-width"
        v-if="
          checkBankDataProperties('properties') &&
          store.selectedFilters.includes('withEmail')
        "
        :title="
          bank.properties && bank.properties['email']
            ? bank.properties['email']
            : '/'
        "
      >
        <p class="card-info-title">Email</p>
        <p class="card-info-value">
          {{
            bank.properties && bank.properties["email"]
              ? bank.properties["email"]
              : "/"
          }}
        </p>
      </div>

      <div
        class="card-info full-width"
        v-if="
          checkBankDataProperties('properties') &&
          store.selectedFilters.includes('withPhone')
        "
      >
        <p class="card-info-title">Phone</p>
        <p
          class="card-info-value"
          :title="
            bank.properties && bank.properties['phone']
              ? bank.properties['phone']
              : '/'
          "
        >
          {{
            bank.properties && bank.properties["phone"]
              ? bank.properties["phone"]
              : "/"
          }}
        </p>
      </div>

      <template
        v-if="
          checkBankDataProperties('properties') &&
          store.selectedFilters.includes('withProperties')
        "
      >
        <div
          class="card-info"
          v-for="(bankProp, index) in bankProperties"
          :key="index"
        >
          <p class="card-info-title">{{ bankProp.name }}</p>
          <p
            class="card-info-value"
            :title="
              bank.properties && bank.properties[bankProp.value]
                ? bank.properties[bankProp.value]
                : '/'
            "
          >
            {{
              bank.properties && bank.properties[bankProp.value]
                ? bank.properties[bankProp.value]
                : "/"
            }}
          </p>
        </div>
      </template>
    </div>
    <div class="card-fake"></div>
    <div class="card-fake"></div>
    <div class="card-fake"></div>
    <div class="card-fake"></div>
    <div class="card-fake"></div>
    <div class="card-fake"></div>
    <div class="card-fake"></div>
    <div class="card-fake"></div>
  </div>
</template>
<script lang="ts" setup>
import { Bank, BankProperties } from "@/types";
import { generalStore } from "@/store/generalStore";
import { ref } from "vue";

const bankProperties = ref<
  {
    name: string;
    value: keyof BankProperties;
  }[]
>([
  {
    name: "Name en",
    value: "name:en",
  },
  {
    name: "Amenity",
    value: "amenity",
  },
  {
    name: "Addr city",
    value: "addr:city",
  },
  {
    name: "Addr city en",
    value: "addr:city:en",
  },
  {
    name: "Addr country",
    value: "addr:country",
  },
  {
    name: "Addr housenumber",
    value: "addr:housenumber",
  },
  {
    name: "Addr postcode",
    value: "addr:postcode",
  },
  {
    name: "Addr street",
    value: "addr:street",
  },
  {
    name: "ATM",
    value: "atm",
  },
  {
    name: "Building",
    value: "building",
  },
  {
    name: "Building levels",
    value: "building:levels",
  },
  {
    name: "Int name",
    value: "int_name",
  },

  {
    name: "Office",
    value: "office",
  },
  {
    name: "Opening hours",
    value: "opening_hours",
  },
  {
    name: "Operator",
    value: "operator",
  },
  {
    name: "Surveillance",
    value: "surveillance",
  },
  {
    name: "Surveillance type",
    value: "surveillance:type",
  },
  {
    name: "Contact website",
    value: "contact:website",
  },
]);

const store = generalStore();
function checkBankDataProperties(bankCheck: string) {
  return store.banks.some((bank) => {
    return bank[bankCheck as keyof Bank];
  });
}
</script>
