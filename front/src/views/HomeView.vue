<template>
  <div class="home-page" :class="{ dark: darkMode }">
    <h1 class="home-page-title">DIANS PROJECT</h1>
    <p class="home-page-subtitle">Select additional filters</p>
    <div class="home-page-buttons">
      <div class="home-page-button" @click="darkMode = !darkMode">
        {{ darkMode ? "White" : "Dark" }} mode
      </div>
      <div
        class="home-page-button"
        @click="filterData('withProperties')"
        :class="{
          'selected-option': selectedFilters.includes('withProperties'),
        }"
      >
        With Properties
      </div>
      <div
        class="home-page-button"
        @click="filterData('withEmail')"
        :class="{
          'selected-option': selectedFilters.includes('withEmail'),
        }"
      >
        With Email
      </div>
      <div
        class="home-page-button"
        @click="filterData('withPhone')"
        :class="{
          'selected-option': selectedFilters.includes('withPhone'),
        }"
      >
        With Phone
      </div>
      <div
        class="home-page-button"
        @click="filterData('withAtm')"
        :class="{
          'selected-option': selectedFilters.includes('withAtm'),
        }"
      >
        With ATM
      </div>
      <div
        class="home-page-button"
        @click="filterData('coordinatesOnly')"
        :class="{
          'selected-option': selectedFilters.includes('coordinatesOnly'),
        }"
      >
        Coordinates only
      </div>

      <div
        class="home-page-button"
        @click="filterData('sort')"
        :class="{
          'selected-option': sort === 'asc' || sort === 'desc',
        }"
      >
        Sort {{ sort == "asc" ? ": ASC" : sort == "desc" ? ": DESC" : "" }}
      </div>
      <div
        class="home-page-button"
        @click="filterData('limit')"
        :class="{
          'selected-option': selectedFilters.includes('sort'),
        }"
      >
        Limit: {{ limit }}
      </div>
    </div>
    <div
      id="leafletmap"
      ref="leafletmap"
      style="width: 100%; height: 500px"
    ></div>

    <h1 class="home-page-title table-title">Table data preview</h1>

    <table
      :class="{
        'selected-properties': selectedFilters.includes('withProperties'),
      }"
    >
      <thead>
        <tr>
          <th v-if="bankHasData('openstreetmap_url')">Openstreetmap_url</th>
          <th v-if="bankHasData('longitude')">Longitude</th>
          <th v-if="bankHasData('latitude')">Latitude</th>

          <th v-if="bankHasData('name')">Name</th>
          <th v-if="bankHasData('properties')">Name EN</th>
          <th v-if="bankHasData('properties')">Amenity</th>
          <th v-if="bankHasData('properties')">Addr city</th>
          <th v-if="bankHasData('properties')">Addr city en</th>
          <th v-if="bankHasData('properties')">Addr country</th>
          <th v-if="bankHasData('properties')">Addr house number</th>
          <th v-if="bankHasData('properties')">Addr postcode</th>
          <th v-if="bankHasData('properties')">Addr street</th>
          <th v-if="bankHasData('properties')">ATM</th>
          <th v-if="bankHasData('properties')">Building</th>
          <th v-if="bankHasData('properties')">Int name</th>
          <th v-if="bankHasData('properties')">Building lvls</th>
          <th v-if="bankHasData('properties')">office</th>
          <th v-if="bankHasData('properties')">Opening hours</th>
          <th v-if="bankHasData('properties')">Operator</th>
          <th v-if="bankHasData('properties')">Surveillance</th>
          <th v-if="bankHasData('properties')">Surveillance type</th>
          <th v-if="bankHasData('properties')">Contact website</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="bank in bankData" :key="bank.id">
          <td v-if="bankHasData('openstreetmap_url')">
            {{ bank.openstreetmap_url ? bank.openstreetmap_url : "/" }}
          </td>
          <td>{{ bank.longitude ? bank.longitude : "/" }}</td>

          <td>{{ bank.latitude ? bank.latitude : "/" }}</td>

          <td>
            {{ bank.name ? bank.name : "/" }}
          </td>
          <td v-if="bankHasData('properties')">
            {{
              bank.properties && bank.properties["name:en"]
                ? bank.properties["name:en"]
                : "/"
            }}
          </td>
          <td v-if="bankHasData('properties')">
            {{
              bank.properties && bank.properties["amenity"]
                ? bank.properties["amenity"]
                : "/"
            }}
          </td>

          <td v-if="bankHasData('properties')">
            {{
              bank.properties && bank.properties["addr:city"]
                ? bank.properties["addr:city"]
                : "/"
            }}
          </td>
          <td v-if="bankHasData('properties')">
            {{
              bank.properties && bank.properties["addr:city:en"]
                ? bank.properties["addr:city:en"]
                : "/"
            }}
          </td>
          <td v-if="bankHasData('properties')">
            {{
              bank.properties && bank.properties["addr:country"]
                ? bank.properties["addr:country"]
                : "/"
            }}
          </td>
          <td v-if="bankHasData('properties')">
            {{
              bank.properties && bank.properties["addr:housenumber"]
                ? bank.properties["addr:housenumber"]
                : "/"
            }}
          </td>
          <td v-if="bankHasData('properties')">
            {{
              bank.properties && bank.properties["addr:postcode"]
                ? bank.properties["addr:postcode"]
                : "/"
            }}
          </td>
          <td v-if="bankHasData('properties')">
            {{
              bank.properties && bank.properties["addr:street"]
                ? bank.properties["addr:street"]
                : "/"
            }}
          </td>
          <td v-if="bankHasData('properties')">
            {{
              bank.properties && bank.properties["atm"]
                ? bank.properties["atm"]
                : "/"
            }}
          </td>
          <td v-if="bankHasData('properties')">
            {{
              bank.properties && bank.properties["building"]
                ? bank.properties["building"]
                : "/"
            }}
          </td>
          <td v-if="bankHasData('properties')">
            {{
              bank.properties && bank.properties["int_name"]
                ? bank.properties["int_name"]
                : "/"
            }}
          </td>
          <td v-if="bankHasData('properties')">
            {{
              bank.properties && bank.properties["building:levels"]
                ? bank.properties["building:levels"]
                : "/"
            }}
          </td>
          <td v-if="bankHasData('properties')">
            {{
              bank.properties && bank.properties["office"]
                ? bank.properties["office"]
                : "/"
            }}
          </td>
          <td v-if="bankHasData('properties')">
            {{
              bank.properties && bank.properties["opening_hours"]
                ? bank.properties["opening_hours"]
                : "/"
            }}
          </td>
          <td v-if="bankHasData('properties')">
            {{
              bank.properties && bank.properties["operator"]
                ? bank.properties["operator"]
                : "/"
            }}
          </td>
          <td v-if="bankHasData('properties')">
            {{
              bank.properties && bank.properties["surveillance"]
                ? bank.properties["surveillance"]
                : "/"
            }}
          </td>
          <td v-if="bankHasData('properties')">
            {{
              bank.properties && bank.properties["surveillance:type"]
                ? bank.properties["surveillance:type"]
                : "/"
            }}
          </td>
          <td v-if="bankHasData('properties')">
            {{
              bank.properties && bank.properties["contact:website"]
                ? bank.properties["contact:website"]
                : "/"
            }}
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script lang="ts" setup>
import axios from "axios";
import { ref, onMounted, computed } from "vue";
import L, { map, Marker } from "leaflet";
import "leaflet/dist/leaflet.css";

const bankData = ref<Bank[]>([]);
const sort = ref<string>("");
const selectedFilters = ref<string[]>([]);
const leafletmap = ref<HTMLDivElement | null>(null);
const limit = ref(50);
const darkMode = ref(false);
const mapData = ref<any>(null);
const markers = ref<Marker[]>([]);

type Bank = {
  id: number;
  openstreetmap_url: string;
  latitude: number;
  longitude: number;
  name: string;

  properties: {
    amenity: string;
    "addr:city": string;
    "addr:city:en": string;
    "addr:country": string;
    "addr:housenumber": string;
    "addr:postcode": string;
    "addr:street": string;
    atm: string;
    building: string;
    "building:levels": string;
    int_name: string;
    "name:en": string;
    office: string;
    opening_hours: string;
    operator: string;
    surveillance: string;
    "surveillance:type": string;
    "contact:website": string;
  };
};
onMounted(() => {
  getData().then(() => {
    makeMap();
  });
});

function getData() {
  return axios.get(`/api/banks?limit=${limit.value}`).then((response) => {
    console.log(response.data);
    bankData.value = response.data;
  });
}

function makeMap(update = false) {
  if (!mapData.value) {
    mapData.value = L.map("leafletmap").setView([41.99646, 21.43141], 13);

    L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
    maxZoom: 19,
    attribution:
      '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
  }).addTo(mapData.value);
  }

  const bankIcon = L.icon({
    iconUrl:
      "data:image/png;base64,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",
  });

  if (update) {
    for (const key in markers.value) {
      mapData.value.removeLayer(markers.value[key]);
    }

    markers.value = [];
  }

  bankData.value.forEach((bank) => {
    const marker = L.marker([bank.longitude, bank.latitude], {
      icon: bankIcon,
    })
      .addTo(mapData.value)
      .bindPopup(
        bank.properties && bank.name
          ? bank.name
          : " " + " " + bank.openstreetmap_url
      );
    markers.value.push(marker);
    marker.addTo(mapData.value);
  });
}

function filterData(filterBy: string) {
  if (filterBy !== "limit" && filterBy !== "sort") {
    if (selectedFilters.value.includes(filterBy)) {
      selectedFilters.value = selectedFilters.value.filter(
        (item) => item !== filterBy
      );
    } else {
      selectedFilters.value.push(filterBy);
    }
  } else if (filterBy === "limit") {
    const limitOptions = [10, 25, 50, 100];
    const index = limitOptions.indexOf(limit.value);
    if (index === limitOptions.length - 1) {
      limit.value = limitOptions[0];
    } else {
      limit.value = limitOptions[index + 1];
    }
  } else if (filterBy === "sort") {
    if (sort.value === "asc") {
      sort.value = "desc";
    } else if (sort.value === "desc") {
      sort.value = "";
    } else {
      sort.value = "asc";
    }
  }

  let filters = selectedFilters.value.join("&");
  if (filterBy === "sort") {
    filters = `${filters}&sort=${sort.value}`;
  }

  return axios
    .get(`/api/banks?limit=${limit.value}&${filters}`)
    .then((response) => {
      console.log(response.data);
      bankData.value = response.data;
      makeMap(true);
    });
}

function bankHasData(check: string) {
  return bankData.value.some((bank) => {
    return bank[check as keyof Bank];
  });
}
</script>
