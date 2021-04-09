{{-- <form method="POST" action="{{route('arklys.update',[$arklys->id])}}">
   Name: <input type="text" name="arklys_name" value="{{$arklys->name}}">
   Runs: <input type="text" name="arklys_runs" value="{{$arklys->runs}}">
   Wins: <input type="text" name="arklys_wins" value="{{$arklys->wins}}">
   About: <textarea name="arklys_about">{{$arklys->about}}</textarea>
   @csrf
   <button type="submit">EDIT</button>
</form> --}}

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Edit horse information</div>
               <div class="card-body">

                  <form method="POST" action="{{route('arklys.update',[$arklys->id])}}">

                     <div class="form-group">
                        <label>Name: </label>
                        <input type="text" class="form-control" name="arklys_name" value="{{$arklys->name}}">
                        <small class="form-text text-muted">Enter horse name</small>
                     </div>

                     <div class="form-group">
                        <label>Runs: </label>
                        <input type="text" class="form-control" name="arklys_runs" value="{{$arklys->runs}}">
                        <small class="form-text text-muted">Enter horse runs</small>
                     </div>

                     <div class="form-group">
                        <label>Wins: </label>
                        <input type="text" class="form-control" name="arklys_wins" value="{{$arklys->wins}}">
                        <small class="form-text text-muted">Enter horse wins</small>
                     </div>

                     <div class="form-group">
                        <label>About: </label>
                        <textarea name="arklys_about" id="summernote">{{$arklys->about}}</textarea>
                        <small class="form-text text-muted">Enter horse description</small>
                     </div>

                     @csrf
                     <button type="submit" class="btn btn-primary">EDIT</button>
                     
                  </form>

               </div>
           </div>
       </div>
   </div>
</div>
<script>
window.addEventListener('DOMContentLoaded', (event) => {
    $('#summernote').summernote();
});
</script>
@endsection