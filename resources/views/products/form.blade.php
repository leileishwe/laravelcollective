<div class="form-group">
	<label>Name</label>
	{{ Form::text('name', null, ['class' => "form-control"]) }}
</div>

<div class="form-group">
	<label>Price</label>
	{{ Form::text('price', null, ['class' => "form-control"]) }}
</div>

<div class="form-group">
	<label>Stock</label>
	{{ Form::text('stock', null, ['class' => "form-control"]) }}
</div>
<div class="form-group">
	<label>Featured</label>
	{{ Form::text('is_featured', null, ['class' => "form-control"]) }}
</div>

<div class="form-group">
	<label>description</label>
	{{ Form::textarea('description', null, ["class" => "form-control"]) }}
</div>