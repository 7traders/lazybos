{{-- @foreach ($lazybininkai as $lazybininkas)
  <a href="{{route('lazybininkas.edit',[$lazybininkas])}}">{{$lazybininkas->name}} {{$lazybininkas->surname}} {{$lazybininkas->bet}} {{$lazybininkas->lazybininkasArklys->name}}</a>
  <form method="POST" action="{{route('lazybininkas.destroy', [$lazybininkas])}}">
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
               <div class="card-header">List of betters</div>

               <div class="card-body">

                  @foreach ($lazybininkai as $lazybininkas)
                    <a href="{{route('lazybininkas.edit',[$lazybininkas])}}">{{$lazybininkas->name}} {{$lazybininkas->surname}} {{$lazybininkas->bet}} {{$lazybininkas->lazybininkasArklys->name}}</a>
                    <form method="POST" action="{{route('lazybininkas.destroy', [$lazybininkas])}}">
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
