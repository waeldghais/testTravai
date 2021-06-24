@extends('layouts.app')

<div>
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="card-header"><b>Modfier Category {{$cats->name}}</b></div>

                
  <form  action="{{route('Categorie.update',['id' => $cats->id ])}}" methode='post'>
  {{ method_field('POST') }}
  <a class="btn btn-primary" data-toggle="collapse" href="/Categorie" role="button" aria-expanded="false" aria-controls="collapseExample">
   Home
  </a>
  <div class="form-group"  >
    <label for="name">name</label>
    <input type="text" class="form-control" name="name"  value="{{$cats->name}}">
  </div>
  <button type="submit" class="btn btn-primary">update</button>
</form>
            </div>

    </div>
</div>