@extends('layouts.container')

@section('contenue')


<div class=" col-8 container-fluid">
<form style="margin-top:100px" method="POST" action="articles">
    <div class="form-group"> 

        {{ $errors->first('titre') }}


        <label for="exampleInputEmail1">Titre</label>
        <input type="text" class="form-control"  name="titre" id="titre" aria-describedby="titre"
            placeholder="Enrez le titre"  value="{{ old('titre') }}">
        <small id="titre" class="form-text text-muted">
            Entrze le titre de vos articles 
        </small>
    </div>
    
   
{{ $errors->first('contenu') }}
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Contenu</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="contenu"
        >{{ old('contenu') }}</textarea>
      </div>


      <div class="input-group mb-3">
            <select class="custom-select"  name="active" id="inputGroupSelect02">
              <option selected>Choose </option>
              <option value="1">publie</option>
              <option value="0">non publie</option>
            
            </select>
            <div class="input-group-append">
              <label class="input-group-text" for="inputGroupSelect02">Options</label>
            </div>
          </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    @csrf
</form>

</div>


<div class="container" style="margin-top:100px">

    <h1> list des articles actives </h1>

    @foreach ($list as $item)
    <li> {{ $item->titre }} </li>
    @endforeach
</div>







@endsection