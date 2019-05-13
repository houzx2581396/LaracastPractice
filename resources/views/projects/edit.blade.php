@extends('layout')

@section('content')
    <h1 class="title">Edit project</h1>

    <form method="post" action="/projects/{{$project->id}}">
        {{method_field('PATCH')}}
        {{csrf_field()}}

        <div class="field">
            <label class="label" for="title">title</label>

            <div class="control">
            <input type="text" class="input" name="title" placeholder="Title" value="{{$project->title}}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea class="textarea" name="description">{{$project->description}}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link margin-bottom">Update Project</button>
            </div>
        </div>
    </form>

    <form method="post" action="/projects/{{$project->id}}">
        {{method_field('DELETE')}}
        {{csrf_field()}}

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Delete Project</button>
            </div>
        </div>
    </form>
@endsection
