@extends('layout.main')

@section('content')
<section class="hero text-center">
    <br/>
    <br/>
    <br/>
    <br/>
    <h2 >
        <strong>
            FANTASY || ПРОКАТ КОСТЮМОВ
        </strong>
    </h2>
    <br>
    <a href="{{url('/shirts')}}"><button class="button large">Выбранные костюмы</button></a>
</section>
<br/>
<div class="subheader text-center">
     <h2>
    Костюмы
</h2>
</div>

<!-- Latest SHirts -->
<div class="row">
        @forelse($shirts->chunk(4) as $chunk)
        @foreach($chunk as $shirt)
           <div class="small-3 columns">
               <div class="item-wrapper">
                   <div class="img-wrapper">
                       <a href="{{route('cart.edit', $shirt->id)}}" class="button expanded add-to-cart">
                                добавить в корзину
                       </a>
                       <a href="#">
                       <img src="{{url('images',$shirt->photo)}}"/>
                       </a>
                   </div>
                   <a href="{{route('shirt')}}">
                       <h3>
                           {{$shirt->suit_name}}
                       </h3>
                   </a>
                   <h5>
                       {{$shirt->suit_price}} c.
                   </h5>
                   <p>
                       {{$shirt->suit_descript}}
                   </p>
               </div>
           </div>
           @endforeach
           @empty
           <h3>Пусто</h3>
           @endforelse
         
       </div>   
<!-- Footer -->
<br>
@endsection