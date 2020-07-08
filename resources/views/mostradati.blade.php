 @extends('layout.app')
 @section('content')
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <h1>Lista Prodotti</h1>
                 @foreach ($listaprodotti as $prodotto)
                     {{-- -> per gli oggetti --}}
                     <p>{{$prodotto->name}}</p>
                 @endforeach
             </div>
         </div>
     </div>
 @endsection
@section('titolo','Lista Prodotti')
