@inject('countries', 'App\Http\Utilities\Country')

{{ csrf_field() }}

<legend>I will sell my house here!</legend>
		
			<div class="form-group">
				<label for="street">Street:</label>
				<input type="text" name="street" class="form-control" id="street" value="{{old('street')}}" placeholder="" required>
			</div>
		
			<div class="form-group">
				<label for="city">City:</label>
				<input type="text" name="city" class="form-control" id="city" value="{{old('city')}}" placeholder="" required>
			</div>

			<div class="form-group">
				<label for="zip">Zip/Postal Code:</label>
				<input type="text" name="zip" class="form-control" id="zip" value="{{old('zip')}}" placeholder="" required>
			</div>
		
			<div class="form-group">
				<label for="country">Country:</label>
				<select name="country" id="country" class="form-control" >
					@foreach ($countries::all() as $country => $code)
						<option value="{{ $code }}">{{ $country }}</option>
					@endforeach
				</select>
			</div>

			
			<div class="form-group">
				<label for="state">State:</label>
				<input type="text" name="state" class="form-control" id="state" value="{{old('state')}}" placeholder="" required>
			</div>
			
			<div class="form-group">
				<label for="price">Sale Price:</label>
				<input type="text" name="price" class="form-control" id="price" value="{{old('price')}}" placeholder="" required>
			</div>

			<div class="form-group">
				<label for="description">House Description:</label>
				<textarea name="description" id="inputDescription" class="form-control" rows="10" value="{{old('description')}}" required></textarea>
			</div>
			

			<!-- <div class="form-group">
				<label for="photos">Photos:</label>
				<input type="file" name="photos" class="form-control" id="photos" value="{{old('photos')}}" placeholder="" required>

			</div> -->

			<button type="submit" class="btn btn-primary">Create Flyer</button>