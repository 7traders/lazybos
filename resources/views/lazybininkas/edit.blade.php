{{-- <form method="POST" action="{{route('lazybininkas.update',[$lazybininkas])}}">
       Name: <input type="text" name="lazybininkas_name" value="{{$lazybininkas->name}}">
       Surname: <input type="text" name="lazybininkas_surname" value="{{$lazybininkas->surname}}">
       Bet: <input type="text" name="lazybininkas_bet" value="{{$lazybininkas->bet}}">
       <select name="arklys_id">
           @foreach ($arkliai as $arklys)
               <option value="{{$arklys->id}}" @if($arklys->id == $lazybininkas->arklys_id) selected @endif>
                   {{$arklys->name}}
               </option>
           @endforeach
</select>
       @csrf
       <button type="submit">EDIT</button>
</form> --}}

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Edit better information</div>

               <div class="card-body">

                    <form method="POST" action="{{route('lazybininkas.update',[$lazybininkas])}}">
                        Name: <input type="text" name="lazybininkas_name" value="{{$lazybininkas->name}}">
                        Surname: <input type="text" name="lazybininkas_surname" value="{{$lazybininkas->surname}}">
                        Bet: <input type="text" name="lazybininkas_bet" value="{{$lazybininkas->bet}}">
                        <select name="arklys_id">
                            @foreach ($arkliai as $arklys)
                                <option value="{{$arklys->id}}" @if($arklys->id == $lazybininkas->arklys_id) selected @endif>
                                    {{$arklys->name}}
                                </option>
                            @endforeach
                    </select>
                        @csrf
                    <button type="submit" class="btn btn-success">EDIT</button>
                    </form>

               </div>
           </div>
       </div>
   </div>
</div>
@endsection
