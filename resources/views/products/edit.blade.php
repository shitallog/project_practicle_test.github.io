 <form action="{{ route('category.update', $category->id) }}" method="post">
        @csrf
        @method('PUT')
        
	<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>title</label>
<input type="text" name="name" value="{{ $category->title }}" class="form-control" placeholder="Enter name" required>
</div>	
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>slug</label>
<input type="text" name="slug" value="{{ $category->slug }}" class=" sm form-control" placeholder="Enter slug" required>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>photo</label>
<input  type ="file" name="photo" value="{{ $category->photo }}" class="form-control" placeholder="photo" name="name">
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>Gender:</label>
 <select name="gender" required>
            <option value="male" {{ $category->gender == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ $category->gender == 'female' ? 'selected' : '' }}>Female</option>
        </select>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>status</label>
<input type="text" name="status" value="{{ $category->status }}" class="form-control" placeholder="Enter  status">
</div>
</div>

</div>
</div>	
	 <button class="btn btn-danger" type="submit">Update</button>
    </form>