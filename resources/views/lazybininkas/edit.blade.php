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
       <button type="submit">EDIT</button>
</form>