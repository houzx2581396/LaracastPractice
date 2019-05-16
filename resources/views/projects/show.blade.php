@extends('layout')

@section('content')

    <h1 class="title">{{$project->title}}</h1>
    <div class="content">
        {{$project->description}}
        <p>
            <a href="/projects/{{$project->id}}/edit">Edit</a>
        </p>
    </div>

    @if($project->tasks->count())
        <div class="box">
            @foreach($project->tasks as $task)
                <div>
                    <form method="POST" action="/tasks/{{$task->id}}">
                        @method('PATCH')
                        @csrf

                        <label class="checkbox {{$task->complete ? 'is-complete' : '' }}" for="complete">
                            <input type="checkbox" name="complete"
                                   onchange="this.form.submit()" {{$task->complete ? 'checked' : '' }}>
                            {{$task->description}}
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
    @endif

    <form method="post" action="/projects/{{ $project->id }}/tasks" class="box">
        @csrf

        <div class="field">
            <label class="label" for="description">New Task</label>

            <div class="control">
                <input type="text" class="input" name="description" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Add</button>
            </div>
        </div>
        @include('errors')
    </form>
@endsection