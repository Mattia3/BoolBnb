<template>
  <div>
    <div class="row">
      <!-- Filtri -->
      <div class="col-4 my-5">
        <div class="container">
          <div class="d-flex justify-content-center">
            <div class="input-group mb-3 w-50 text-center">
              <input
                type="text"
                class="form-control"
                :value="place"
                aria-label="Recipient's username"
                aria-describedby="button-addon2"
              />
              <button class="btn btn-primary" type="button" id="button-addon2">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </div>
          </div>

          <div class="dropdown my-4">
            <h3 class="title-service">Servizi</h3>

            <label for="dropdown-1" class="btn btn-dropdown btn-primary"
              ><b>Filter</b></label
            >
            <input
              class="dropdown-open"
              type="checkbox"
              id="dropdown-1"
              aria-hidden="true"
              hidden
            />

            <div class="dropdown-inner row row-cols-3 text-center">
              <div
                id="checkbox_service"
                class="form-check form-check-inline"
                v-for="service in services"
                :key="service.id"
              >
                <input
                  class="form-check-input"
                  type="checkbox"
                  :id="`service-${service.id}`"
                  :value="service.name"
                  v-model="selectedServices"
                />
                <label
                  class="form-check-label"
                  :for="`service-${service.id}`"
                  >{{ service.name }}</label
                >
              </div>
            </div>
          </div>

          <div class="row row-cols-2">
            <div class="col d-flex">
              <label for="field_square_mt " class="title-form">Stanze</label>
              <div class="wrap">
                <span
                  class="btn-counter-3 input-incremate btn-counter-style"
                  type="button"
                  @click="rooms_onClickLess()"
                  >-</span
                >
                <input
                  class="total-item-3 input-incremate total-item-style"
                  type="text"
                  :value="roomsCounter"
                />
                <span
                  class="btn-counter-3 input-incremate btn-counter-style"
                  type="button"
                  @click="rooms_onClickPlus()"
                  >+</span
                >
              </div>
            </div>

            <div class="col d-flex">
              <label for="field_square_mt " class="title-form">Letti</label>
              <div class="wrap">
                <span
                  class="btn-counter-3 input-incremate btn-counter-style"
                  type="button"
                  @click="beds_onClickLess()"
                  >-</span
                >
                <input
                  class="total-item-3 input-incremate total-item-style"
                  type="text"
                  :value="bedsCounter"
                />
                <span
                  class="btn-counter-3 input-incremate btn-counter-style"
                  type="button"
                  @click="beds_onClickPlus()"
                  >+</span
                >
              </div>
            </div>

            <div class="col d-flex mt-2">
              <label for="field_square_mt " class="title-form">Bagni</label>
              <div class="wrap">
                <span
                  class="btn-counter-3 input-incremate btn-counter-style"
                  type="button"
                  @click="baths_onClickLess()"
                  >-</span
                >
                <input
                  class="total-item-3 input-incremate total-item-style"
                  type="text"
                  :value="bathsCounter"
                />
                <span
                  class="btn-counter-3 input-incremate btn-counter-style"
                  type="button"
                  @click="baths_onClickPlus()"
                  >+</span
                >
              </div>
            </div>
          </div>

          <div class="container-range">
            <label for="customRange1" class="form-label"
              >Raggio di ricerca</label
            >
            <input
              type="range"
              class="form-range w-50"
              id="customRange1"
              min="10"
              max="70"
              step="20"
              v-model="rangeValue"
              @change="initializeMap()"
            />
          </div>
        </div>

        <div class="container container-all-img">
          <CardComponent
            v-for="apartment in apartmentsFiltered"
            :key="apartment.id"
            :apartment="apartment"
          ></CardComponent>
        </div>
      </div>

      <!-- Mappa -->
      <div class="col-8">
        <div id="filterMap"></div>
      </div>
    </div>
  </div>
</template>

<script>
// SDK
import tt from "@tomtom-international/web-sdk-maps";
//import { services } from "@tomtom-international/web-sdk-services";
import PanControls from "@tomtom-international/web-sdk-plugin-pancontrols";
//import SearchBox from "@tomtom-international/web-sdk-plugin-searchbox";
/////////////////////////
import CardComponent from "./CardComponent.vue";
export default {
  name: "MainComponent",
  components: { CardComponent },
  props: {
    apartments: Array,
    services: Array,
    place: String,
  },
  data() {
    return {
      searchPoint: null,
      rangeValue: "10",
      roomsCounter: 1,
      bedsCounter: 1,
      bathsCounter: 1,
      selectedServices: [],
      apartmentsFiltered: [],
      /////////////////////////////////////////
      APIKEY: "cYIXTXUp7yVKyDMAcyRlG3xxdxXtmotj",
      mymap: {},
    };
  },

  methods: {
    initializeMap() {
      var map = tt.map({
        key: this.APIKEY,
        container: "filterMap",
        center: {
          lat: this.searchPoint.lat,
          lng: this.searchPoint.lng,
        },
        zoom: 10.5,
      });
      // panControl
      const ttPanControls = new PanControls({
        className: "my-class-name", // default = ''
        panOffset: 100, // default = 100
      });

      // navigation controller
      var nav = new tt.NavigationControl({
        showCompass: true,
      });

      map.addControl(new tt.FullscreenControl());
      map.addControl(nav);
      map.addControl(ttPanControls, "top-left");

      this.mymap = map;
      // -------------
      this.drawCircle(map, "selected", [
        this.searchPoint.lng,
        this.searchPoint.lat,
      ]);
      // var marker = new tt.Marker().setLngLat(this.point).addTo(map);
    },
    // TurfJS
    drawCircle(map, name, center) {
      if (map.getLayer(name)) {
        map.removeLayer(name);
        map.removeSource(name);
      }
      var options = {
        steps: 64,
        units: "kilometers",
        properties: { key: name },
      };
      var circle = turf.circle(center, this.rangeValue, options);
      map.on("load", function () {
        map.addLayer({
          id: name,
          type: "fill",
          source: {
            type: "geojson",
            data: circle,
          },
          paint: {
            "fill-color": "green",
            "fill-opacity": 0.3,
          },
        });
      });
    },
    // ---------------------------
  },

  mounted() {
    /* this.apartments.forEach(apartment => {
            if (apartment.address.toLowerCase().includes(this.place.toLowerCase())) {
                this.apartmentsFiltered.push(apartment);
                
            }
        }); */

    // get location from home-search
    this.searchPoint = JSON.parse(sessionStorage.getItem("location"));
    // console.log(this.searchPoint.lat, this.searchPoint.lng);

    this.initializeMap();
  },
};
</script>

<style>
#filterMap {
  height: 500px;
  width: 100%;
}
</style>