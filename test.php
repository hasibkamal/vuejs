
<?php
echo "<pre>";
$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$location_vars = array("city", "state");

$result = compact("event", $location_vars);
print_r($result);
?>
exit();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>
<body>
	<div id="app" class="container">
		{{ name }}
		<label @click=clkaction(this) class="btn btn-info">More</label>	
	</div>


<script type="text/javascript">
	new Vue({
		el:'#app',
		data:{
			name:"This is a string"
		},
		methods:{
			clkaction(a){
				a.style.display = "none";

			}
		}
	});
</script>
</body>
</html>