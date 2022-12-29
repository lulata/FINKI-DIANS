import { ref, onMounted } from "vue";
import L, { Marker } from "leaflet";
import { generalStore } from "@/store/generalStore";

export function makeMap() {
  const mapData = ref<any>(null);
  const markers = ref<Marker[]>([]);
  const store = generalStore();
  onMounted(() => {
    store.getBanksData().then(() => {
      updateMap();
    });
  });
  function updateMap(update = false) {
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

    store.banks.forEach((bank) => {
      const marker = L.marker([bank.longitude, bank.latitude], {
        icon: bankIcon,
      })
        // .addTo(mapData.value)
        // .bindPopup(bank.name ? bank.name : "Name not defined ");
      markers.value.push(marker);
      marker.addTo(mapData.value);
    });
  }

  return {
    updateMap,
  };
}
