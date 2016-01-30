
@extends('main_layout')

@section('content')
<div class="container">
	<h1>All User:</h1>
	@foreach($users as $user)        
				 <h4>{{$user->first_name}} {{$user->last_name}}</h4>    
				 {{$user->email}} 
	@endforeach
	@foreach($sensors as $sensor)        
				 <h4>{{$sensor->id}}</h4>    
	@endforeach
	<!-- Measurement -->
	<div id="measurement" class="container-fluid bg-grey">
		<h2>Measurement</h2>
		<br>
		<div class="row text-center">
			<div class="col-sm-4">
				<div class="ct-chart ct-perfect-fourth" id="chart1"></div>
			</div>
		</div>	
	</div>
	<script>
		// Initialize a Line chart in the container with the ID chartX
		var data1 = {
				labels: [1, 2, 3, 4, 5, 6],
				series: [[9, 6, 2, 5, 3, 5]]
			};
		new Chartist.Line('#chart1', data1);
	</script>
</div>
@stop