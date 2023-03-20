@extends('layouts.main')

@section('content')
    @include('tasks._inputs')

    <div class="d-flex justify-content-center">
        <table class="table table-striped table-hover w-75">
            <thead class="table-dark">
                <tr>
                    <th class="text-center">Completed</th>
                    <th class="text-center">Task</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @include('tasks._tasks')
            </tbody>
        </table>
    </div>
@endsection
