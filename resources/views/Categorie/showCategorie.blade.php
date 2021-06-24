@extends('layouts.app')
<script>
    function myFunction() {
        if(!confirm("Êtes-vous sûr de supprimer ceci"))
            event.preventDefault();
    }
</script>
<h1> Salut </h1>


@if ($cats->count()>0)

<table class="table table-dark" >
  <thead>
    <tr>
      <th scope="col">Name</th>
  
    </tr>
  </thead>
  <tbody>


      @foreach($cats as $cate)
     
        <tr>
      
      <td scope="row">{{$cate->name}}</td>
      <td><a class="" href="{{route('Categorie.edit',['id'=>$cate->id])}} ">
              <button type="button" class="btn btn-dark">Modfier</button>
      </a></td>
     <td><a class="" href="{{route('Categorie.delete',['id'=>$cate->id])}} "  onclick="return myFunction();">
             <button type="button" class="btn btn-danger">Supprimer</button>
      </a></td>

   
    </tr>
@endforeach


   @else
  <p scope="row" class="text-center">No  cours</p>
  @endif
  </tbody>
</table>
<form method="post" action="/Categorie/store">
@csrf
<div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      
    </div>
    <button type="submit" class="btn btn-primary">Primary</button>
    </form>