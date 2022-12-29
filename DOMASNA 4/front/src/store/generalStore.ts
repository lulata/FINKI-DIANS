import { defineStore } from "pinia";
import axios from "axios";
import { Bank } from "@/types";

type generalStore = {
  banks: Bank[];
  selectedBank: Bank;
  limit: number;
  sort: "asc" | "desc" | null;
  selectedFilters: string[];
};

export const generalStore = defineStore("general", {
  state: (): generalStore => {
    return {
      banks: [],
      selectedBank: {} as Bank,
      limit: 50,
      sort: null,
      selectedFilters: [],
    };
  },
  getters: {
    getBanks: (state) => state.banks,
    getSelectedBank: (state) => state.selectedBank,
  },
  actions: {
    setBanks(banks: Bank[]) {
      this.banks = banks;
    },
    setSelectedBank(bank: Bank) {
      this.selectedBank = bank;
    },
    getBanksData() {
      return axios.get(`/api/banks?limit=${this.limit}`).then((response) => {
        this.banks = response.data;
      });
    },
    filterData(filterBy: string) {
      if (filterBy !== "limit" && filterBy !== "sort") {
        if (this.selectedFilters.includes(filterBy)) {
          this.selectedFilters = this.selectedFilters.filter(
            (item) => item !== filterBy
          );
        } else {
          this.selectedFilters.push(filterBy);
        }
      } else if (filterBy === "limit") {
        const limitOptions = [10, 25, 50, 100, 150];
        const index = limitOptions.indexOf(this.limit);
        if (index === limitOptions.length - 1) {
          this.limit = limitOptions[0];
        } else {
          this.limit = limitOptions[index + 1];
        }
      } else if (filterBy === "sort") {
        if (this.sort === "asc") {
          this.sort = "desc";
        } else if (this.sort === "desc") {
          this.sort = null;
        } else {
          this.sort = "asc";
        }
      }

      let filters = this.selectedFilters.join("&");
      if (filterBy === "sort") {
        filters = `${filters}&sort=${this.sort}`;
      }

      return axios
        .get(`/api/banks?limit=${this.limit}&${filters}`)
        .then((response) => {
          this.banks = response.data;
        });
    },
  },
});
