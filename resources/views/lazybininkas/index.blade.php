@foreach ($lazybininkai as $lazybininkas)
  <a href="{{route('lazybininkas.edit',[$lazybininkas])}}">{{$lazybininkas->name}} {{$lazybininkas->surname}} {{$lazybininkas->bet}}</a><br>
  <form method="POST" action="{{route('lazybininkas.destroy', [$lazybininkas])}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
  <br>
@endforeach
