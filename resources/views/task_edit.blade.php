@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-center mt-5">
        <div class="card border-light mb-3 w-50">
            <div class="card-header bg-dark text-white">Edit Task</div>
            <div class="card-body p-4">
                @error('task')
                    @include('partials._alert')
                @enderror
                <x-form action="{{ route('update', $task->id) }}" method="PUT">
                    <x-form.input btn_name="Update" value="{{ old('task', $task->task) }}" />
                </x-form>
            </div>
        </div>
    @endsection
