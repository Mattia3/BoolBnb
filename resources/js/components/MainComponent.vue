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
                placeholder="Recipient's username"
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
              <label class="form-check-label" for="flexCheckDefault">
                <input
                  class="form-check-input me-1"
                  type="checkbox"
                  id="flexCheckDefault"
                />
                Default checkbox
              </label>
              <label class="form-check-label" for="flexCheckDefault1">
                <input
                  class="form-check-input me-1"
                  type="checkbox"
                  id="flexCheckDefault1"
                />Default checkbox
              </label>
              <label class="form-check-label" for="flexCheckDefault2">
                <input
                  class="form-check-input me-1"
                  type="checkbox"
                  id="flexCheckDefault2"
                />Default checkbox
              </label>
              <label class="form-check-label" for="flexCheckDefault3">
                <input
                  class="form-check-input me-1"
                  type="checkbox"
                  id="flexCheckDefault3"
                />Default checkbox
              </label>
              <label class="form-check-label" for="flexCheckDefault4">
                <input
                  class="form-check-input me-1"
                  type="checkbox"
                  id="flexCheckDefault4"
                />Default checkbox
              </label>
              <label class="form-check-label" for="flexCheckDefault5">
                <input
                  class="form-check-input me-1"
                  type="checkbox"
                  id="flexCheckDefault5"
                />Default checkbox
              </label>
              <label class="form-check-label" for="flexCheckDefault6">
                <input
                  class="form-check-input me-1"
                  type="checkbox"
                  id="flexCheckDefault6"
                />Default checkbox
              </label>
              <label class="form-check-label" for="flexCheckDefault7">
                <input
                  class="form-check-input me-1"
                  type="checkbox"
                  id="flexCheckDefault7"
                />Default checkbox
              </label>
            </div>
          </div>

          <div class="row row-cols-2">
            <div class="col d-flex">
              <label for="field_square_mt " class="title-form">Stanze</label>
              <div class="wrap">
                <form action="">
                  <input
                    class="btn-counter-3 input-incremate btn-counter-style"
                    type="button"
                    value="-"
                  />
                  <input
                    class="total-item-3 input-incremate total-item-style"
                    type="text"
                    value="1"
                  />
                  <input
                    class="btn-counter-3 input-incremate btn-counter-style"
                    type="button"
                    value="+"
                  />
                </form>
              </div>
            </div>

            <div class="col d-flex">
              <label for="field_square_mt " class="title-form">Letti</label>
              <div class="wrap">
                <form action="">
                  <input
                    class="btn-counter-1 input-incremate btn-counter-style"
                    type="button"
                    value="-"
                  />
                  <input
                    class="total-item-1 input-incremate total-item-style"
                    type="text"
                    value="1"
                  />
                  <input
                    class="btn-counter-1 input-incremate btn-counter-style"
                    type="button"
                    value="+"
                  />
                </form>
              </div>
            </div>

            <div class="col d-flex mt-2">
              <label for="field_square_mt " class="title-form">Stanze</label>
              <div class="wrap">
                <form action="">
                  <input
                    class="btn-counter-2 input-incremate btn-counter-style"
                    type="button"
                    value="-"
                  />
                  <input
                    class="total-item-2 input-incremate total-item-style"
                    type="text"
                    value="1"
                  />
                  <input
                    class="btn-counter-2 input-incremate btn-counter-style"
                    type="button"
                    value="+"
                  />
                </form>
              </div>
            </div>
          </div>

          <div class="container-range">
            <label for="customRange1" class="form-label"
              >Raggio di ricerca</label
            >
            <input type="range" class="form-range w-50" id="customRange1" />
          </div>
        </div>

        <div class="container container-all-img">
          <div class="row mt-5">
            <div class="col-6">
              <img class="img-filter" src="#" alt="" />
            </div>

            <div class="col-6 position-relative">
              <h5 class="my-2">titolo:</h5>
              <div class="my-border"></div>
              <p class="text-muted m-0">servizi smoke,toilette,casa,casa</p>
              <p class="text-muted">servizi smoke,toilette,casa,casa</p>

              <div class="container-price">
                <h4>187$</h4>
              </div>
            </div>
          </div>
          <div class="my-border-2"></div>

          <div class="row mt-5">
            <div class="col-6">
              <img class="img-filter" src="#" alt="" />
            </div>
          </div>
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
import { services } from "@tomtom-international/web-sdk-services";
import PanControls from "@tomtom-international/web-sdk-plugin-pancontrols";
import SearchBox from "@tomtom-international/web-sdk-plugin-searchbox";

export default {
  name: "MainComponent",
  props: {
    apartments: Array,
  },
  data() {
    return {
      APIKEY: "cYIXTXUp7yVKyDMAcyRlG3xxdxXtmotj",
      point: {
        lat: "41.28502118588756",
        lng: "13.230922869211417",
      },
    };
  },

  methods: {
    initializeMap() {
      var map = tt.map({
        key: this.APIKEY,
        container: "filterMap",
        center: [12, 41],
        zoom: 4,
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

      // var marker = new tt.Marker().setLngLat(this.point).addTo(map);
    },
    // filterButtons() {
    //   var btnCounterOne = document.querySelectorAll(".btn-counter-1");
    //   var totalItemOne = document.querySelector(".total-item-1");
    //   var btnCounterTwo = document.querySelectorAll(".btn-counter-2");
    //   var totalItemTwo = document.querySelector(".total-item-2");
    //   var btnCounterThree = document.querySelectorAll(".btn-counter-3");
    //   var totalItemThree = document.querySelector(".total-item-3");
    //   var btnCounterFour = document.querySelectorAll(".btn-counter-4");
    //   var totalItemFour = document.querySelector(".total-item-4");
    //   function countItems(one, two) {
    //     for (var i = 0; i < one.length; i++) {
    //       one[i].addEventListener("click", function () {
    //         var oldValue = two.value;
    //         if (this.value === "+") {
    //           // var string convert to integer
    //           var newValue = parseInt(oldValue, 10) + 1;
    //         } else {
    //           // Don't allow decrementing below 1
    //           if (oldValue > 1) {
    //             var newValue = parseInt(oldValue, 10) - 1;
    //           } else {
    //             newValue = 0;
    //           }
    //         }
    //         // check if value is a number
    //         newValue = isNaN(newValue) ? 1 : newValue;
    //         two.value = newValue;
    //       });
    //     }
    //   }
    //   countItems(btnCounterOne, totalItemOne);
    //   countItems(btnCounterTwo, totalItemTwo);
    //   countItems(btnCounterThree, totalItemThree);
    //   countItems(btnCounterFour, totalItemFour);
    // },
  },
  mounted() {
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