<form method="POST" action="{{route('arklys.store')}}">
   Name: <input type="text" name="arklys_name">
   Runs: <input type="text" name="arklys_runs">
   Wins: <input type="text" name="arklys_wins">
   About: <textarea name="arklys_about"></textarea>
   @csrf
   <button type="submit">ADD</button>
</form>
