  
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<h2>Sample CSV data</h2>
		<p>The data collected form a mock csv data is diaplayed here, the CSV
			file can be seen here.</p>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>nodes</th>
						<th>node_id</th>
						<th>address</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $item)
					<tr>
						<td>{{$item->nodes}}</td>
						<td>{{$item->node_id}}</td>
						<td>{{$item->address}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

</body>
</html>