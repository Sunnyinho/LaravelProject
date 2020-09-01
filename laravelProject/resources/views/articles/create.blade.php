@extends('layout')

@section('content')

    <div id="wrapper">
         <div id = "wrapper" >
             <div id="page" class="container">
                 <h1>New Article</h1>

                 <form action="/articles" method="post" class="col">
                     @csrf

                     <div class="form-group">
                         <label for="title" class="label col display-6 ">Title</label>

                         <div class="control">
                             <input type="text"
                                    class="form-control @error('title') alert-danger @enderror "
                                    name="title"
                                    id="title"
                                    value="{{old('title')}}"
                             >

                             @error('title')
                                <p class=" alert-danger">{{$errors->first('title')}}</p>
                             @enderror

                         </div>
                     </div>
                     <div class="form-group">
                         <label for="excerpt" class="label">Excerpt</label>

                         <div class="control">
                             <textarea
                                 class="form-control @error('excerpt') alert-danger @enderror "
                                 name="excerpt"
                                 id="excerpt"> {{old('excerpt')}} </textarea>

                             @error('excerpt')
                             <p class=" alert-danger ">{{$errors->first('excerpt')}}</p>
                             @enderror

                         </div>
                     </div>
                     <div class="form-group">
                         <label for="body" class="label">Body</label>

                         <div class="control">
                             <textarea
                                 class="form-control @error('body') alert-danger @enderror "
                                 name="body"
                                 id="body"> {{old('body')}} </textarea>

                             @error('body')
                             <p class=" alert-danger ">{{$errors->first('body')}}</p>
                             @enderror

                         </div>
                     </div>

                     <div class="field is-grouped">
                         <div class="control">
                             <button class="btn-primary btn-lg" type="submit" >Submit</button>
                         </div>
                     </div>

                 </form>
             </div>
         </div>
    </div>

@endsection
