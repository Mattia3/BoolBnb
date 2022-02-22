<template>
  <div>
        <div class="row">
            <!-- Filtri -->
            <div class="col-4 my-5">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <div class="input-group mb-3 w-50 text-center">
                            <input type="text" class="form-control" :value="place" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                    
                    
                    <form action="">
                        <div class="dropdown my-4">
                    
                            <h3 class="title-service">Servizi</h3>
                            
                            <label for="dropdown-1" class="btn btn-dropdown btn-primary"><b>Filter</b></label>
                            <input class="dropdown-open" type="checkbox" id="dropdown-1" aria-hidden="true" hidden />
                            
                            <div class="dropdown-inner row row-cols-3 text-center">
                                <label class="form-check-label" for="flexCheckDefault" v-for="service in services" :key="service.id">
                                <input class="form-check-input me-1" type="checkbox"  id="flexCheckDefault" v-model="filtersArray" :value="service.id"><!-- v-model="checked" -->
                                    {{service.name.replace('_', ' ')}}
                                </label>
                            </div>

                            <button class="btn btn-primary" type="button" @click="compare()">Submit</button>

                        </div>

                        <!-- <button class="btn btn-primary">Submit</button> -->
                    </form>

                    <div class="row row-cols-2">

                        <div class="col d-flex">
                            <label for="field_square_mt " class="title-form">Stanze</label>
                            <div class="wrap">
                                    <span class="btn-counter-3 input-incremate btn-counter-style" type="button" @click="rooms_onClickLess()">-</span>
                                    <input class="total-item-3 input-incremate total-item-style" type="text" :value="roomsCounter" />
                                    <span class="btn-counter-3 input-incremate btn-counter-style" type="button" @click="rooms_onClickPlus()">+</span>
                            </div>
                        </div>

                        <div class="col d-flex">
                            <label for="field_square_mt " class="title-form">Letti</label>
                            <div class="wrap">
                                    <span class="btn-counter-3 input-incremate btn-counter-style" type="button" @click="beds_onClickLess()">-</span>
                                    <input class="total-item-3 input-incremate total-item-style" type="text" :value="bedsCounter" />
                                    <span class="btn-counter-3 input-incremate btn-counter-style" type="button" @click="beds_onClickPlus()">+</span>
                            </div>
                        </div>

                        <div class="col d-flex mt-2">
                            <label for="field_square_mt " class="title-form">Bagni</label>
                            <div class="wrap">
                                    <span class="btn-counter-3 input-incremate btn-counter-style" type="button" @click="baths_onClickLess()">-</span>
                                    <input class="total-item-3 input-incremate total-item-style" type="text" :value="bathsCounter" />
                                    <span class="btn-counter-3 input-incremate btn-counter-style" type="button" @click="baths_onClickPlus()">+</span>
                            </div>
                        </div>

                    </div>

                    <div class="container-range">
                        <label for="customRange1" class="form-label">Raggio di ricerca</label>
                        <input type="range" class="form-range w-50" id="customRange1">
                    </div>
                </div>
                
                <div class="container container-all-img">
                    <CardComponent v-for="(apartment, i) in filterService()" :key="i" :apartment="apartment"></CardComponent>
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
import CardComponent from './CardComponent.vue'
export default {
    name: 'MainComponent',
    components: {CardComponent},
    props: {
        apartments: Array,
        services: Array,
        place: String
    },
    data() {
        return {
            roomsCounter: 1,
            bedsCounter: 1,
            bathsCounter: 1,
            filtersArray: [],
            apartmentsFiltered: [],
            appServices: [],
            /////////////////////////////////////////
            APIKEY: "cYIXTXUp7yVKyDMAcyRlG3xxdxXtmotj",
            point: {
                lat: "41.28502118588756",
                lng: "13.230922869211417",
            }
            //checked: false
        }
    },

    methods: {
        rooms_onClickLess(){
            if (this.roomsCounter === 1) {
                this.roomsCounter = 1;
            } else {
                this.roomsCounter--;
            }
        },

        rooms_onClickPlus(){
            this.roomsCounter++;
        },

        beds_onClickLess(){
            if (this.bedsCounter === 1) {
                this.bedsCounter = 1;
            } else {
                this.bedsCounter--;
            }
        },

        beds_onClickPlus(){
            this.bedsCounter++;
        },

        baths_onClickLess(){
            if (this.bathsCounter === 1) {
                this.bathsCounter = 1;
            } else {
                this.bathsCounter--;
            }
        },

        baths_onClickPlus(){
            this.bathsCounter++;
        },

        filterService() {
            if (this.filtersArray.length === 0) {
                //this.apartmentsFiltered = this.apartments
            } else {
                //console.log(this.apartments.length);
                this.apartments.forEach(apartment => {
                    //console.log('appartamento' + apartment.id, apartment);

                    /**** generate apartment's array with only services id (for each apartment) ****/
                    let services = apartment.services
                    let servicesID = []
                    services.forEach(service => {
                        servicesID.push(service.id)
                    });

                    //console.log('servizi appartamento ' + apartment.id, servicesID);
                    /**** compare array's of services ID and array's filters from guest ****/
                    if (this.filtersArray.every(elem => servicesID.includes(elem))) {                   
                        //console.log(apartment.id);
                        //console.log(this.apartmentsFiltered.some(apFil => apFil == apartment))
                        if (!this.apartmentsFiltered.some(apFil => apFil == apartment)) {
                            this.apartmentsFiltered.push(apartment)
                        }

                        /* this.apartmentsFiltered.push(apartment)
                        debugger */
                        console.log('appartamento ' + apartment.id + ' presente');
                    } else {

                        if (this.apartmentsFiltered.some(apFil => apFil == apartment)) {
                            //this.apartmentsFiltered.pop(apartment)
                            let apartmentIndex = this.apartmentsFiltered.indexOf(apartment);
                            this.apartmentsFiltered.splice(apartmentIndex, 1)
                        }
                        //this.apartmentsFiltered.pop(apartment.id)
                        console.log('appartamento ' + apartment.id + ' NON PRESENTE');
                    }

                });
            }           

            return this.apartmentsFiltered;
        },

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

    },



    mounted() {
        
        /* this.apartments.forEach(apartment => {
            if (apartment.address.toLowerCase().includes(this.place.toLowerCase())) {
                this.apartmentsFiltered.push(apartment);
                
            }
        }); */
        
        
        this.initializeMap();
    }

}
</script>

<style>
#filterMap {
  height: 500px;
  width: 100%;
}
</style>