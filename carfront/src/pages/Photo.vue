<template>
<q-page class="q-pa-xs">
  <div class="row">
    <div class="col-12 col-md-3"></div>
    <div class="col-12 col-md-6">
      <q-carousel
        height="50em"
        swipeable
        animated
        v-model="slide"
        v-model:fullscreen="fullscreen"
        thumbnails
        infinite
        arrows
      >
        <q-carousel-slide :name="1" img-src="img/1.jpeg" />
        <q-carousel-slide :name="2" img-src="img/2.jpeg" />
        <q-carousel-slide :name="3" img-src="img/3.jpeg" />
        <q-carousel-slide :name="4" img-src="img/4.jpeg" />
        <q-carousel-slide :name="5" img-src="img/5.jpeg" />
        <q-carousel-slide :name="6" img-src="img/6.jpeg" />
        <q-carousel-slide :name="7" img-src="img/7.jpeg" />
        <q-carousel-slide :name="8" img-src="img/8.jpeg" />
        <q-carousel-slide :name="9" img-src="img/9.jpeg" />
        <q-carousel-slide :name="10" img-src="img/10.jpeg" />
        <q-carousel-slide :name="11" img-src="img/11.jpeg" />
        <q-carousel-slide :name="12" img-src="img/12.jpeg" />
        <q-carousel-slide :name="13" img-src="img/13.jpeg" />
        <q-carousel-slide :name="14" img-src="img/14.jpeg" />
        <q-carousel-slide :name="15" img-src="img/15.jpeg" />
        <template v-slot:control>
          <q-carousel-control
            position="bottom-right"
            :offset="[18, 18]"
          >
            <q-btn
              push round dense color="white" text-color="primary"
              :icon="fullscreen ? 'fullscreen_exit' : 'fullscreen'"
              @click="fullscreen = !fullscreen"
            />
          </q-carousel-control>
        </template>
      </q-carousel>
    </div>
    <div class="col-12 col-md-3"></div>
  </div>


</q-page>
</template>

<script>
export default {
  data(){
    return{
      slide: 1,
      fullscreen:false,
    }
  }
}
</script>

<style lang="sass" scoped>
.custom-caption
  text-align: center
  padding: 12px
  color: white
  background-color: rgba(0, 0, 0, .3)
</style>
