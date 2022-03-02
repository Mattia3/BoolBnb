<template>
  <div>
    <div class="row m-0">
      <!-- Filtri -->
      <div class="col-4">
        <div class="container">
          <div>
            <div class="bar_search" id="ttSearch"></div>
          </div>

          <form action="">
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

              <div class="dropdown-inner row row-cols-sm-2 row-cols-xl-3">
                <label
                  class="form-check-label"
                  for="flexCheckDefault"
                  v-for="service in services"
                  :key="service.id"
                >
                  <input
                    class="form-check-input me-1"
                    type="checkbox"
                    id="flexCheckDefault"
                    v-model="filtersArray"
                    :value="service.id"
                  /><!-- v-model="checked" -->
                  {{ service.name.replace("_", " ") }}
                </label>
              </div>
            </div>
          </form>

          <div
            class="
              row row-cols-xl-2 row-cols-sm-1
              justify-content-sm-center justify-content-xl-between
            "
          >
            <div class="row mb-3 align-items-center">
              <div class="col-4">
                <label for="field_square_mt ">Stanze</label>
              </div>
              <div class="col-8">
                <div class="wrap d-flex">
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
            </div>

            <div class="row mb-3 align-items-center">
              <div class="col-4 d-flex">
                <label for="field_square_mt " class="title-form">Letti</label>
              </div>
              <div class="col-8">
                <div class="wrap d-flex">
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
            </div>

            <div class="row mb-3 align-items-center">
              <div class="col-4">
                <label for="field_square_mt " class="title-form">Bagni</label>
              </div>
              <div class="col-8">
                <div class="wrap d-flex">
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
            v-for="(apartment, i) in filter()"
            :key="i"
            :apartment="apartment"
          ></CardComponent>
        </div>
      </div>

      <!-- Mappa -->
      <div class="col-8 p-0">
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
/////
import { services } from "@tomtom-international/web-sdk-services";
import SearchBox from "@tomtom-international/web-sdk-plugin-searchbox";

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
      filtersArray: [],
      apartmentsFiltered: [],
      appServices: [],
      /////////////////////////////////////////
      APIKEY: "cYIXTXUp7yVKyDMAcyRlG3xxdxXtmotj",
      inRangeApartments: [],
      inCircleRange: [],
    };
  },

  methods: {
    rooms_onClickLess() {
      if (this.roomsCounter === 1) {
        this.roomsCounter = 1;
      } else {
        this.roomsCounter--;
      }
    },

    rooms_onClickPlus() {
      this.roomsCounter++;
    },

    beds_onClickLess() {
      if (this.bedsCounter === 1) {
        this.bedsCounter = 1;
      } else {
        this.bedsCounter--;
      }
    },

    beds_onClickPlus() {
      this.bedsCounter++;
    },

    baths_onClickLess() {
      if (this.bathsCounter === 1) {
        this.bathsCounter = 1;
      } else {
        this.bathsCounter--;
      }
    },

    baths_onClickPlus() {
      this.bathsCounter++;
    },

    filter() {
      if (this.filtersArray.length === 0) {
        this.apartments.forEach((apartment) => {
          if (
            apartment.n_rooms >= this.roomsCounter &&
            apartment.n_beds >= this.bedsCounter &&
            apartment.n_baths >= this.bathsCounter
          ) {
            //console.log('dentro if');
            return this.apartments;
          }
        });
      }

      this.apartments.forEach((apartment) => {
        // need lat lng
        let apartmentAddress = false;
        let tdupla = [];
        let tlat = apartment.lat;
        let tlng = apartment.lng;
        tdupla.push(tlng, tlat);

        //console.log(tlat, tlng);

        // apartment in range lat lng
        let ilat = "";
        let ilng = "";
        this.inCircleRange.forEach(function (coords) {
          if (!apartmentAddress) {
            ilng = coords[0];
            ilat = coords[1];

            if (ilng == tlng && ilat == tlat) {
              apartmentAddress = true;
            }
          }
        });
        // console.log(ilat);
        //console.log('tdupla: ' + typeof(tdupla) , 'dupla di inCircleRange: ' + typeof(this.inCircleRange[0]));
        /**** generate apartment's array with only services id (for each apartment) ****/
        let services = apartment.services;
        let servicesID = [];
        services.forEach((service) => {
          servicesID.push(service.id);
        });
        // console.log(tlat, tlng);
        /**** compare array's of services ID and array's filters from guest ****/
        if (
          this.filtersArray.every((elem) => servicesID.includes(elem)) &&
          apartment.n_rooms >= this.roomsCounter &&
          apartment.n_beds >= this.bedsCounter &&
          apartment.n_baths >= this.bathsCounter &&
          apartmentAddress
        ) {
          if (!this.apartmentsFiltered.some((apFil) => apFil == apartment)) {
            this.apartmentsFiltered.push(apartment);
          }
          //console.log('appartamento ' + apartment.id + ' presente');
        } else {
          if (this.apartmentsFiltered.some((apFil) => apFil == apartment)) {
            let apartmentIndex = this.apartmentsFiltered.indexOf(apartment);
            this.apartmentsFiltered.splice(apartmentIndex, 1);
          }
          //console.log("appartamento " + apartment.id + " NON PRESENTE");
        }
      });

      return this.apartmentsFiltered;
    },

    initializeMap() {
      // Load Assets
      document.getElementById("filterMap").innerHTML = "";
      this.inRangeApartments = [];
      this.inCircleRange = [];
      // ----------------------------------

      var map = tt.map({
        key: this.APIKEY,
        container: "filterMap",
        center: {
          lat: this.searchPoint.lat,
          lng: this.searchPoint.lng,
        },
        // zoom: 10.5,
        zoom: 8,
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
      // -------------

      this.apartments.forEach((apartment) => {
        let lng = parseFloat(apartment.lng);
        let lat = parseFloat(apartment.lat);
        let dupla = [];
        dupla.push(lng);
        dupla.push(lat);
        this.inRangeApartments.push(dupla);
      });

      this.drawCircle(map, "selected", [
        this.searchPoint.lng,
        this.searchPoint.lat,
      ]);
      // console.log(this.inRangeApartments);

      // Aggiungo marker per ogni appartamento
      this.inCircleRange.forEach(function (dupla) {
        var customMarker = document.createElement("div");
        customMarker.className = "marker";
        new tt.Marker({ element: customMarker }).setLngLat(dupla).addTo(map);
      });

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
      var points = turf.points(this.inRangeApartments);
      var ptsWithin = turf.pointsWithinPolygon(points, circle);
      // console.log(ptsWithin.features);
      // console.log(ptsWithin.features[0].geometry.coordinates);
      ptsWithin.features.forEach((apartment) => {
        this.inCircleRange.push(apartment.geometry.coordinates);
      });
      console.log(this.inCircleRange);

      map.on("load", function () {
        map.addLayer({
          id: name,
          type: "fill",
          // geometry: "Polygon",
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
    searchBar() {
      let searchbox = document.getElementById("ttSearch");
      var APIKEY = "cYIXTXUp7yVKyDMAcyRlG3xxdxXtmotj";
      var options = {
        searchOptions: {
          key: APIKEY,
          language: "it-IT",
          limit: 5,
        },
        autocompleteOptions: {
          key: APIKEY,
          language: "it-IT",
        },
        placeholder: "Dove vuoi andare?",
      };

      var ttSearchBox = new SearchBox(services, options);
      var searchBoxHTML = ttSearchBox.getSearchBoxHTML();
      searchbox.append(searchBoxHTML);
      ttSearchBox.on("tomtom.searchbox.resultselected", function (event) {
        // console.log(event.data.result);
        const results = event.data.result.position;

        sessionStorage.setItem("location", JSON.stringify(results));
        window.location.href = "/search";
      });
    },
  },

  mounted() {
    // get location from home-search
    this.searchPoint = JSON.parse(sessionStorage.getItem("location"));
    // console.log(this.searchPoint.lat, this.searchPoint.lng);

    this.searchBar();

    this.initializeMap();
  },
};
</script>

<style>
#filterMap {
  height: 1087px;
  width: 100%;
}
</style>