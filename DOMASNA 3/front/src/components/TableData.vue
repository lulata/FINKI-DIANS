<template>
  <h1 class="header-2">Table data preview</h1>

  <div class="card-container">
    <div class="card" v-for="bank in store.banks" :key="bank.id">
      <div class="card-info full-width" v-if="checkBankDataProperties('name')">
        <p class="card-info-title">Name</p>
        <p class="card-info-value">{{ bank.name ? bank.name : "/" }}</p>
      </div>

      <div class="card-info" v-if="checkBankDataProperties('properties')">
        <p class="card-info-title">Name En</p>
        <p class="card-info-value">
          {{
            bank.properties && bank.properties["name:en"]
              ? bank.properties["name:en"]
              : "/"
          }}
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

      <div class="card-info" v-if="checkBankDataProperties('properties')">
        <p class="card-info-title">Amenity</p>
        <p class="card-info-value">
          {{
            bank.properties && bank.properties["amenity"]
              ? bank.properties["amenity"]
              : "/"
          }}
        </p>
      </div>

      <div class="card-info" v-if="checkBankDataProperties('properties')">
        <p class="card-info-title">Addr city</p>
        <p class="card-info-value">
          {{
            bank.properties && bank.properties["addr:city"]
              ? bank.properties["addr:city"]
              : "/"
          }}
        </p>
      </div>

      <div class="card-info" v-if="checkBankDataProperties('properties')">
        <p class="card-info-title">Addr city en</p>
        <p class="card-info-value">
          {{
            bank.properties && bank.properties["addr:city:en"]
              ? bank.properties["addr:city:en"]
              : "/"
          }}
        </p>
      </div>

      <div class="card-info" v-if="checkBankDataProperties('properties')">
        <p class="card-info-title">Addr country</p>
        <p class="card-info-value">
          {{
            bank.properties && bank.properties["addr:country"]
              ? bank.properties["addr:country"]
              : "/"
          }}
        </p>
      </div>

      <div class="card-info" v-if="checkBankDataProperties('properties')">
        <p class="card-info-title">Addr house number</p>
        <p class="card-info-value">
          {{
            bank.properties && bank.properties["addr:housenumber"]
              ? bank.properties["addr:housenumber"]
              : "/"
          }}
        </p>
      </div>

      <div class="card-info" v-if="checkBankDataProperties('properties')">
        <p class="card-info-title">Addr postcode</p>
        <p class="card-info-value">
          {{
            bank.properties && bank.properties["addr:postcode"]
              ? bank.properties["addr:postcode"]
              : "/"
          }}
        </p>
      </div>

      <div class="card-info" v-if="checkBankDataProperties('properties')">
        <p class="card-info-title">Addr street</p>
        <p class="card-info-value">
          {{
            bank.properties && bank.properties["addr:street"]
              ? bank.properties["addr:street"]
              : "/"
          }}
        </p>
      </div>

      <div class="card-info" v-if="checkBankDataProperties('properties')">
        <p class="card-info-title">ATM</p>
        <p class="card-info-value">
          {{
            bank.properties && bank.properties["atm"]
              ? bank.properties["atm"]
              : "/"
          }}
        </p>
      </div>

      <div class="card-info" v-if="checkBankDataProperties('properties')">
        <p class="card-info-title">Building</p>
        <p class="card-info-value">
          {{
            bank.properties && bank.properties["building"]
              ? bank.properties["building"]
              : "/"
          }}
        </p>
      </div>

      <div class="card-info" v-if="checkBankDataProperties('properties')">
        <p class="card-info-title">Int name</p>
        <p class="card-info-value">
          {{
            bank.properties && bank.properties["int_name"]
              ? bank.properties["int_name"]
              : "/"
          }}
        </p>
      </div>

      <div class="card-info" v-if="checkBankDataProperties('properties')">
        <p class="card-info-title">Building lvls</p>
        <p class="card-info-value">
          {{
            bank.properties && bank.properties["building:levels"]
              ? bank.properties["building:levels"]
              : "/"
          }}
        </p>
      </div>

      <div class="card-info" v-if="checkBankDataProperties('properties')">
        <p class="card-info-title">Office</p>
        <p class="card-info-value">
          {{
            bank.properties && bank.properties["office"]
              ? bank.properties["office"]
              : "/"
          }}
        </p>
      </div>
      <div class="card-info" v-if="checkBankDataProperties('properties')">
        <p class="card-info-title">Opening hours</p>
        <p class="card-info-value">
          {{
            bank.properties && bank.properties["opening_hours"]
              ? bank.properties["opening_hours"]
              : "/"
          }}
        </p>
      </div>

      <div class="card-info" v-if="checkBankDataProperties('properties')">
        <p class="card-info-title">Operator</p>
        <p class="card-info-value">
          {{
            bank.properties && bank.properties["operator"]
              ? bank.properties["operator"]
              : "/"
          }}
        </p>
      </div>

      <div class="card-info" v-if="checkBankDataProperties('properties')">
        <p class="card-info-title">Surveillance</p>
        <p class="card-info-value">
          {{
            bank.properties && bank.properties["surveillance"]
              ? bank.properties["surveillance"]
              : "/"
          }}
        </p>
      </div>

      <div class="card-info" v-if="checkBankDataProperties('properties')">
        <p class="card-info-title">Surveillance type</p>
        <p class="card-info-value">
          {{
            bank.properties && bank.properties["surveillance:type"]
              ? bank.properties["surveillance:type"]
              : "/"
          }}
        </p>
      </div>

      <div class="card-info" v-if="checkBankDataProperties('properties')">
        <p class="card-info-title">Contact website</p>
        <p class="card-info-value">
          {{
            bank.properties && bank.properties["contact:website"]
              ? bank.properties["contact:website"]
              : "/"
          }}
        </p>
      </div>
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
import { Bank } from "@/types";
import { generalStore } from "@/store/generalStore";

const store = generalStore();
function checkBankDataProperties(bankCheck: string) {
  return store.banks.some((bank) => {
    return bank[bankCheck as keyof Bank];
  });
}
</script>
