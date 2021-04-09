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
   <button type="submit">ADD</button>
</form>
