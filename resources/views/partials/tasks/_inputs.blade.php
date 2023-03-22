<div class="d-flex justify-content-center mt-5">
    <form class="w-75" action="{{ route('store') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Add Task" aria-label="Add Task"
                aria-describedby="button-addon2" name="task">
            <button class="btn btn-outline-success" type="submit" id="button-addon2">Add</button>
        </div>
    </form>
</div>

@error('task')
    @include('partials._alert')
@enderror
