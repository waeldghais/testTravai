@extends('layouts.app')

@if ($cats->count()>0)

<table class="table table-dark" >
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Prix</th>
      <th scope="col">Catigorie</th>
    </tr>
  </thead>
  <tbody>


      @foreach($prods as $prod)
        <tr>  
      <td scope="row">{{$prod->name}}</td>
      <td scope="row">{{$prod->prix}}</td>
      @foreach($cats as $cat)
       @if ($prod->categorie_id == $cat->id)
       <th scope="row">{{$cat->name}}</th>
       @endif
      @endforeach
      <td><a class="" href="{{route('Produit.edit',['id'=>$prod->id])}} ">
              <button type="button" class="btn btn-dark">Modfier</button>
      </a></td>
     <td><a class="" href="{{route('Produit.delete',['id'=>$prod->id])}} "  onclick="return myFunction();">
             <button type="button" class="btn btn-danger">Supprimer</button>
      </a></td>
    </tr>
@endforeach


   @else
  <p scope="row" class="text-center">No  cours</p>
  @endif
  </tbody>
</table>

<form action="{{route('Produit.store')}}" enctype="multipart/form-data" method="POST">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="category">Categorie</label>
                        <select class="form-control" name="categorie_id" id="category">
                            @foreach ($cats as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group"  >
                        <label for="titel">Name</label>

                        <input type="text" class="form-control" name="name" id="titel" placeholder="Enter titel">
                        <br>
                    </div>
                    <div class="form-group"  >
                        <label for="titel">Prix</label>

                        <input type="text" class="form-control" name="prix" id="titel" placeholder="Enter titel">
                        <br>
                    </div>
                   


                    <button type="submit" class="btn btn-primary">sauvgarder</button>
                </form>

            </div>
        </div>
    </div>