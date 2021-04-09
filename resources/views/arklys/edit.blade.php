<form method="POST" action="{{route('arklys.update',[$arklys->id])}}">
   Name: <input type="text" name="arklys_name" value="{{$arklys->name}}">
   Runs: <input type="text" name="arklys_runs" value="{{$arklys->runs}}">
   Wins: <input type="text" name="arklys_wins" value="{{$arklys->wins}}">
   About: <textarea name="arklys_about">{{$arklys->about}}</textarea>
   @csrf
   <button type="submit">EDIT</button>
</form>

