<template>
  <div id="app">
    <navbar></navbar>

    <div class="container">
      <div class="row">
        
        <div class="col-md-9">
          <inventory :items=items></inventory>
        </div>
        <div class="col-md-3">
          <cart :items=cart></cart>
        </div>

      </div>
    </div>
  </div>
</template>

<script>
import Navbar from './components/Navbar'
import Cart from './components/Cart'
import Inventory from './components/Inventory'
import data from './data.js'

export default {
  components:{
    Navbar,
    Cart,
    Inventory
  },
  data(){
    return {
      items:[],
      cart:[{
        id:1,
        title:'test',
        price:10,
        photo:'http://dummyimage.com/250x250.bmp/dddddd/000000'
      }]
    }
  },
  mounted(){
    this.items = data
  }
}
</script>

<style>
  .container{
    margin-top:5px;
  }
</style>
