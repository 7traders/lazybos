{{-- @foreach ($arkliai as $arklys)
  <a href="{{route('arklys.edit',[$arklys])}}">{{$arklys->name}} {{$arklys->runs}} {{$arklys->wins}} {{$arklys->about}}</a>
  <form method="POST" action="{{route('arklys.destroy', [$arklys])}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
  <br>
@endforeach --}}


@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">List oh horses</div>
               <div class="card-body">

                @foreach ($arkliai as $arklys)
                  <a href="{{route('arklys.edit',[$arklys])}}">{{$arklys->name}} {{$arklys->runs}} {{$arklys->wins}} {{$arklys->about}}</a>
                  <form method="POST" action="{{route('arklys.destroy', [$arklys])}}">
                  @csrf
                     <button type="submit" class="btn btn-danger">DELETE</button>
                  </form>
                  <br>
                @endforeach

               </div>
           </div>
       </div>
   </div>
</div>
@endsection
