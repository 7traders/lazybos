@foreach ($arkliai as $arklys)
  <a href="{{route('arklys.edit',[$arklys])}}">{{$arklys->name}} {{$arklys->runs}} {{$arklys->wins}} {{$arklys->about}}</a>
  <form method="POST" action="{{route('arklys.destroy', [$arklys])}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
  <br>
@endforeach


