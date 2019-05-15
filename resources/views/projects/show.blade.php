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
        <div>
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
@endsection