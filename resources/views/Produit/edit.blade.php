@extends('layouts.app')

<div>
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="card-header"><b>Modfier Produit {{$prods->name}}</b></div>

                
  <form  action="{{route('Produit.update',['id' => $prods->id ])}}" methode='post'>
  {{ method_field('POST') }}
  <a class="btn btn-primary" data-toggle="collapse" href="/Produit" role="button" aria-expanded="false" aria-controls="collapseExample">
   Home
  </a>
  <div class="form-group"  >
    <label for="name">name</label>
    <input type="text" class="form-control" name="name"  value="{{$prods->name}}">
  </div>
  <div class="form-group"  >
    <label for="name">prix</label>
    <input type="text" class="form-control" name="prix"  value="{{$prods->prix}}">
  </div>
  
  <div class="form-group">
                        <label for="category">Categorie</label>
                        <select class="form-control" name="categorie_id" id="category">
                            @foreach ($cats as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
  <button type="submit" class="btn btn-primary">update</button>
</form>
            </div>

    </div>
</div>