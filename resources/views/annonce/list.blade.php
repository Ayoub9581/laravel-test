


<ul> 
	@foreach ($annonces as $a)
		<li> {{ $a->name_annonce }} </li>
	@endforeach
</ul>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	
	<div class="container">
	<form method="POST" enctype="multipart/form-data" action='listannonce'>
  <div class="form-group">
  	{{ $errors->first('annonce') }}
    <label for="exampleInputEmail1">annonce name</label>
    <input type="text" class="form-control" name="annonce" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('annonce') }}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
    <div class="custom-file">
    	{{ $errors->first('picture') }}
    <input type="file" name="picture" >
  </div>
  <div class="form-group form-check">
  </div>
    <div class="form-group">
    	{{ $errors->first('description') }}
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1"  name="description"rows="3">
    	
    	{{ old('description') }}
    </textarea>
  </div>




  <button type="submit" class="btn btn-primary">Submit</button>
  @csrf 
</form>
</div>