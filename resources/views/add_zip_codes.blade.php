<from action="{{url('zipcodes/create')}}"method="post"accept-charset ="utf-8">
	<label for="city">city</label><input type="text"name="city"value=""id="city">
	<label for="state">state</label><input type="text"name="state"value=""id="state">
	<label for="zipcode">zipcode</label><input type="text"name="zipcode"value=""id="zipcode">
	<input type="hidden" name="_token"value="{{csrf_token()}}"id="">
	
	<p><input type="submit" value="Save New ZipCode"></p>
</form>