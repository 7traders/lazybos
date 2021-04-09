<form method="POST" action="{{route('lazybininkas.update',[$lazybininkas->id])}}">
   Name: <input type="text" name="lazybininkas_name" value="{{$lazybininkas->name}}">
   Surname: <input type="text" name="lazybininkas_surname" value="{{$lazybininkas->surname}}">
   Bet: <input type="text" name="lazybininkas_bet" value="{{$lazybininkas->bet}}">
   @csrf
   <button type="submit">EDIT</button>
</form>
