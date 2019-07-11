<template>
	<div class="row">
	    <div v-for="(item,index) in items" :key="index" class="col-md-4"  style="padding:5px">
	      <div class="card">
	        <img class="card-img-top" :src="item.photo" alt="Card image cap">
	        <div class="card-body">
	          <h5 class="card-title">{{ item.title }}</h5>
	          <p> {{ item.price }} </p>
	          <a href="#">Add</a>
	        </div>
	      </div>
	    </div>


	</div>
</template>
<script>

	export default {
		props: ['items']
	}

</script>
<style>
</style>