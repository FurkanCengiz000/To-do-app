@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-center mt-5">
        <div class="card border-light mb-3 w-50">
            <div class="card-header bg-dark text-white">Edit Task</div>
            <div class="card-body p-4">
                @error('task')
                    @include('partials._alert')
                @enderror
                <form action="{{ route('update', $task->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Add Task" aria-label="Add Task"
                            aria-describedby="button-addon2" name="task" value="{{ old('task', $task->task) }}">
                        <button class="btn btn-outline-success" type="submit" id="button-addon2">Update</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
