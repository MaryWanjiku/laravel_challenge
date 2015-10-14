<table border="o" cellspacing="5">
<tr>
	<th>Zipcode</th>
	<th>City</th>
	<th>State</th>
	<th>Zip</th>

</tr>
@foreach($zip_codes as $ZipCode)
<tr>
	<td>{{$ZipCode->Zipcode}}</td>
	<td>{{$ZipCode->City}}</td>
	<td>{{$ZipCode->State}}</td>
	<td>{{$ZipCode->Zipcode}}</td>
</tr>
@endforeach
</table>