


<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>title</label>
<input    value="{{ $category->title }}" class="form-control"  disabled>
</div>	
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>slug:</label>
<input  value="{{ $category->slug }}" class=" sm form-control" disabled>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>photo:</label>
<input  value="{{ $category->photo }}" class="form-control" disabled>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>status</label>
 <input  value="{{ $category->status }}" class="form-control" disabled>

</div>
</div>


</div>
</div> 

    

   

    <a class="btn btn-danger" href="{{ route('category.index') }}">Back to category List</a>

</div>