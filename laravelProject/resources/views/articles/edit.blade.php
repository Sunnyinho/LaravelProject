@extends('layout')

@section('content')

    <div id="wrapper">
        <div id = "wrapper" >
            <div id="page" class="container">
                <h1>Update Article</h1>

                <form action="/articles/{{$article->id}}" method="POST">
                    @csrf  {{--   to insert values from form into laravel --}}
                    @method('PUT')
                                        {{--  browser till date does not know methods other than Post and Get so we
                                        need to use such methods ways --}}

                    <div class="field">
                        <label for="title" class="label">Title</label>

                        <div class="control">
                            <input type="text" class="input" name="title" id="title" value="{{$article->title}}">
                        </div>
                    </div>
                    <div class="field">
                        <label for="excerpt" class="label">Excerpt</label>

                        <div class="control">
                            <textarea  class="textarea" name="excerpt" id="excerpt" >{{$article->excerpt}}</textarea>
                        </div>
                    </div>
                    <div class="field">
                        <label for="body" class="label">Body</label>

                        <div class="control">
                            <textarea class="textarea" name="body" id="body">{{$article->body}}</textarea>
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit" >Update</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


@endsection
