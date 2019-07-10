<!DOCTYPE html>
<html>
<head>
	<title>Item List</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>
<body>
	<div id="app" class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<h3 class="text-center">Item List</h3>
				<form @submit.prevent="addItem">
					<input class="form-control" type="text" v-model="new_item">
					{{ new_item }}
				</form>
				<hr/>

				<ul class="list-group">
					<li v-for="(item , index) in items" :key="index" class="list-group-item">
						<button class="btn btn-danger" @click="removeItem(index)">-</button>
						{{ item.name }} - <input v-model="item.price" type="number">
					</li>

					<li class="list-group-item well">Total - {{ total }} </li>
				</ul>
			</div>
		</div>
	</div>


	<script type="text/javascript">
		new Vue({
			el:'#app',
			data:{
				items : [
					{name:'Rice',price:50.50}
				],
			new_item : ''
			},
			computed:{
				total(){
					var total = 0;
					this.items.forEach(item => {
						total += parseFloat(item.price)
					});
					return total;
				}
			},
			methods:{
				addItem(){
					this.items.push({
						name:this.new_item,
						price:0.00
					})

					this.new_item = '';
				},
				removeItem(index){
					console.dir(this.items);
					this.items.splice(index,1);
					console.dir(this.items);
				}
			}
		});
		
	</script>
</body>
</html>