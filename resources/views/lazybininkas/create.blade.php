{{-- <form method="POST" action="{{route('lazybininkas.store')}}">
   Name: <input type="text" name="lazybininkas_name">
   Surname: <input type="text" name="lazybininkas_surname">
   Bet: <input type="text" name="lazybininkas_bet">
   <select name="arklys_id">
       @foreach ($arkliai as $arklys)
           <option value="{{$arklys->id}}">{{$arklys->name}}</option>
       @endforeach
</select>
   @csrf
   <button type="submit">ADD</button>
</form> --}}


@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Add new better</div>

               <div class="card-body">

                    <form method="POST" action="{{route('lazybininkas.store')}}">
                    Name: <input type="text" name="lazybininkas_name">
                    Surname: <input type="text" name="lazybininkas_surname">
                    Bet: <input type="text" name="lazybininkas_bet">
                    <select name="arklys_id">
                        @foreach ($arkliai as $arklys)
                            <option value="{{$arklys->id}}">{{$arklys->name}}</option>
                        @endforeach
                    </select>
                    @csrf
                    <button type="submit" class="btn btn-success">ADD</button>
                    </form>

               </div>
           </div>
       </div>
   </div>
</div>
@endsection
