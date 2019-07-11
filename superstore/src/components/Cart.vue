<template>
	<ul class="list-group">
		<li class="list-group-item"> Item - Price </li>
		<li v-for='(item,index) in items' :key=index class="list-group-item"> {{ item.title }} - {{ item.price }} </li>
		<li class="list-group-item"> Item - Price </li>
	</ul>
</template>

<script>
</script>
	export default{
		props:['items']
	}
<style>
</style>