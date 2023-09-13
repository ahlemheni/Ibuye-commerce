@extends('layouts.index')
@section('content')
<main>
<br><br>
  <!-- Main Container -->
  <div class="container">

    <section class="section my-5 pb-5">

      <!-- Shopping Cart table -->
      <div class="table-responsive">

        <table class="table product-table table-cart-v-1">

          <!-- Table head -->
          <thead>

            <tr>
              <th></th>
              <th ><strong>Nom de Produit</strong></th>
              <th>Qte</th>
              <th><strong>Prix</strong></th>
              <th><strong>Offre</strong></th>
              <th><strong>Montant</strong></th>
              <th></th>
            </tr>

          </thead>
          <!-- Table head -->

          <!-- Table body -->
          <tbody>
            @php
                $total=0;
            @endphp
            <form >
          @foreach ($paniers as $panier)
      

                    <!-- First row -->
                    <tr>

                      <th scope="row">

                      <img src="{{DB::table('produits')->where('id',$panier->produit_id)->select('photo')->value('photo')}}"  class="img-fluid z-depth-0">

                      </th>

                      <td>

                        <h5 class="mt-3">

                        <strong>{{DB::table('produits')->where('id',$panier->produit_id)->select('name')->value('name')}}</strong>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                        </h5>

                      

                      </td>
                      <td class="text-center text-md-left">

                        {{$panier->qte}}

                      

                        </div>

                      </td>


                  


                    <td>{{DB::table('produits')->where('id',$panier->produit_id)->select('prix')->value('prix')}}</td>
                    <td>{{DB::table('produits')->where('id',$panier->produit_id)->select('offre')->value('offre')}}</td>
         
                      <td class="font-weight-bold">

                        @php
                        $prixprod=DB::table('produits')->where('id',$panier->produit_id)->select('prix')->value('prix');
                        $offreprod=DB::table('produits')->where('id',$panier->produit_id)->select('offre')->value('offre');
                        $qte=$panier->qte;

                        $t=($prixprod*$qte)/100;
                        $st=$t*$offreprod;  
                        
                      @endphp
                    <strong>{{$prixprod*$qte-$st}}</strong>

                   @php
                    $total=$total+$prixprod*$qte-$st;   
                   @endphp
                   
                    

                      </td>

                      <td>

                      <a href="{{route('deletepanier',$panier->id)}}" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                          title="Remove item">X

                        </button>

                      </td>

                   </tr>
                   
            <!-- First row -->
            @endforeach
                  </form>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>Total:{{$total}}         
                
               </td>
            </tr>
          </tbody>
          <!-- Table body -->
<input type="hidden" name="total" >
        </table>
      <a href="{{route('addcmd',$total)}}" class="btn btn-primary" style="float:right">Passer Une Commande</a>
      </div>
      <!-- Shopping Cart table -->

    </section>

  </div>
  <!-- Main Container -->

</main>
<!-- Main Layout -->
@endsection