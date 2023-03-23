@extends('layouts.main')

@section('content')
    @include('partials.tasks._inputs')

    <div class="d-flex justify-content-center">
        <div class="w-75">
            <table style="@if(count($tasks)) margin-bottom: 75px @endif" class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th><span class="ms-3">Completed</span></th>
                        <th>Task</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @include('partials.tasks._tasks')
                </tbody>
            </table>
            @unless(count($tasks))
                <div class="alert alert-danger" role="alert">
                    There is no task.
                </div>
            @endunless
        </div>
    </div>
@endsection
