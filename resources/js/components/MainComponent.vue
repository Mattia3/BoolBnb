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
                    
                    
                    <div class="dropdown my-4">
                    
                        <h3 class="title-service">Servizi</h3>
                    
                        <label for="dropdown-1" class="btn btn-dropdown btn-primary"><b>Filter</b></label>
                        <input class="dropdown-open" type="checkbox" id="dropdown-1" aria-hidden="true" hidden />
                        
                        <div class="dropdown-inner row row-cols-3 text-center">
                            <label class="form-check-label" for="flexCheckDefault" v-for="service in services" :key="service.id">
                            <input class="form-check-input me-1" type="checkbox"  id="flexCheckDefault" @change="addFilter(service)" ><!-- v-model="checked" -->
                                {{service.name.replace('_', ' ')}}
                            </label>
                        </div>
                    
                    </div>

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
                    <CardComponent v-for="apartment in apartmentsFiltered" :key="apartment.id" :apartment="apartment"></CardComponent>
                </div>
            </div>

            <!-- Mappa -->
            <div class="col-8"></div>
      </div>
  </div>
</template>

<script>
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
            serviceFilter: [],
            apartmentsFiltered: [],
            //checked: false
        }
    },

    methods: {
/*         filterButtons(){
            var btnCounterOne = document.querySelectorAll('.btn-counter-1');
            var totalItemOne = document.querySelector('.total-item-1');

            var btnCounterTwo = document.querySelectorAll('.btn-counter-2');
            var totalItemTwo = document.querySelector('.total-item-2');

            var btnCounterThree = document.querySelectorAll('.btn-counter-3');
            var totalItemThree = document.querySelector('.total-item-3');

            var btnCounterFour = document.querySelectorAll('.btn-counter-4');
            var totalItemFour = document.querySelector('.total-item-4');

            function countItems(one, two) {
            
                for(var i = 0; i < one.length; i++) {
                
                one[i].addEventListener('click', function() {
                    var oldValue = two.value;
                    
                    if( this.value === '+' ) {
                    // var string convert to integer
                    var newValue = parseInt(oldValue, 10) + 1;
                    } else {
                    // Don't allow decrementing below 1
                    if(oldValue > 1) {
                        var newValue = parseInt(oldValue, 10) - 1;
                    } else {
                        newValue = 0;
                    }
                    }
                    
                    // check if value is a number
                    newValue = isNaN(newValue) ? 1 : newValue;
                    two.value = newValue;
                    
                });
                }
            }

            countItems(btnCounterOne, totalItemOne);
            countItems(btnCounterTwo, totalItemTwo);
            countItems(btnCounterThree, totalItemThree);
            countItems(btnCounterFour, totalItemFour);

        }, */

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

        /* prova(service){
            service.checked = this.checked;
            if (this.checked) {
                console.log('checked');
            }else {
                console.log('not checked');
            }
        }, */

        addFilter(service){
            if (!this.serviceFilter.includes(service.name)) {
               this.serviceFilter.push(service.name); 
            }
            
            /* this.apartments.forEach(apartment => {
                if (this.twoArrEqual(apartment.services, this.serviceFilter)) {
                    this.apartmentsFiltered.push(apartment)
                }
            });
 */
            

            
            this.apartments.forEach(apartment => {
                let prova = apartment.services.filter((service) => {
                    
                    if (this.serviceFilter.includes(service.name)) {
                        if (!this.apartmentsFiltered.includes(apartment)/*  && apartment.address.toLowerCase().includes(this.place.toLowerCase()) */) {
                            this.apartmentsFiltered.push(apartment);
                        }
                        return this.apartmentsFiltered;
                    }
                })
            });

            return console.log(this.apartmentsFiltered);

            //console.log(this.apartments[0].services.includes(service.name));;
            /* return this.apartments.filter((apartment) => {
                return console.log(apartment.services.includes(this.serviceFilter));;
            }) */
        },

        twoArrEqual(apService, filService) { 
                // If lengths of array are not equal means 
                // array are not equal 
                
                /* if (apService.length != filService.length) {
                    return false;
                } */
            
                // Sort both arrays 
                apService.sort()
                filService.sort()
            
                // Linearly compare elements 
                for (let i = 0; i < apService.length; i++) {
                    console.log(apService[i].name, filService[i]);
                    if (apService[i].name != filService[i]) {
                        return false
                    }
                    return true
                }
        }

    },

    mounted() {
        
        /* this.apartments.forEach(apartment => {
            if (apartment.address.toLowerCase().includes(this.place.toLowerCase())) {
                this.apartmentsFiltered.push(apartment);
                
            }
        }); */
    }

}
</script>

<style>

</style>