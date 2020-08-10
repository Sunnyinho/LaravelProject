@extends('layout')

@section('content')

    <div id="wrapper">
         <div id = "wrapper" >
             <div id="page" class="container">
                 <h1>New Article</h1>

                 <form action="/articles" method="post">
                     @csrf
                     <div class="field">
                         <label for="title" class="label">Title</label>

                         <div class="control">
                             <input type="text" class="input" name="title" id="title">
                         </div>
                     </div>
                     <div class="field">
                         <label for="excerpt" class="label">Excerpt</label>

                         <div class="control">
                             <textarea  class="textarea" name="excerpt" id="excerpt"></textarea>
                         </div>
                     </div>
                     <div class="field">
                         <label for="body" class="label">Body</label>

                         <div class="control">
                             <textarea class="textarea" name="body" id="body"></textarea>
                         </div>
                     </div>

                     <div class="field is-grouped">
                         <div class="control">
                             <button class="button is-link" type="submit" >Submit</button>
                         </div>
                     </div>

                 </form>
             </div>
         </div>
    </div>

@endsection