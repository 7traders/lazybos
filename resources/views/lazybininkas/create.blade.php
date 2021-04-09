<form method="POST" action="{{route('lazybininkas.store')}}">
   Name: <input type="text" name="lazybininkas_name">
   Surname: <input type="text" name="lazybininkas_surname">
   Bet: <input type="text" name="lazybininkas_bet">
   @csrf
   <button type="submit">ADD</button>
</form>
