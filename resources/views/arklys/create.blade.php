@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Add new horse</div>
               <div class="card-body">
               
                  <form method="POST" action="{{route('arklys.store')}}">

                     <div class="form-group">
                        <label>Name: </label>
                        <input type="text" class="form-control" name="arklys_name">
                        <small class="form-text text-muted">Enter horse name</small>
                     </div>

                     <div class="form-group">
                        <label>Runs: </label>
                        <input type="text" class="form-control" name="arklys_runs">
                        <small class="form-text text-muted">Enter horse runs</small>
                     </div>

                     <div class="form-group">
                        <label>Wins: </label>
                        <input type="text" class="form-control" name="arklys_wins">
                        <small class="form-text text-muted">Enter horse wins</small>
                     </div>

                     <div class="form-group">
                        <label>About: </label>
                        <textarea name="arklys_about" id="summernote"></textarea>
                        <small class="form-text text-muted">Enter horse description</small>
                     </div>

                     @csrf
                     <button type="submit" class="btn btn-success">ADD</button>

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