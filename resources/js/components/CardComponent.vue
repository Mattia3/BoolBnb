<template>
    <div class="row mt-5">
        <div class="col-6">
            <img class="img-filter" :src="('./storage/' + apartment.cover_img)" alt="">
        </div>

        <div class="col-6 position-relative">
            <h5 class="my-2"><a :href="'/' + apartment.slug">{{apartment.title}}</a></h5>
            <div class="my-border"></div>
            <span class="text-muted m-0" v-for="(service, i) in apartment.services" :key="i">{{service.name.replace('_', ' ')}}<span v-if="i !== apartment.services.length - 1">, </span> </span>

            <div class="text-end">
                <h4>{{apartment.price}}€</h4>
            </div>
        </div>

        <div class="my-border-2"></div>
    </div>
</template>

<script>
export default {
    name: 'CardComponent',
    props: {
        apartment: Object
    }
}
</script>

<style lang='scss' scoped>
    .border-bottom-title{
        &:before{
            content: '';
            width: 100px;
            background-color: grey;
            height: 2px;
        }
    }
</style>