@props(['action', 'method' => 'POST', 'class'=>null, 'btn_name' => 'Add', 'class', 'value'=>null])

<form action="{{ $action }}" class="{{ $class }}" method="{{ strtolower($method) == 'get' ? 'GET' : 'POST' }}">
    @csrf

    @unless(in_array($method, ['GET', 'POST']))
        @method($method)
    @endunless

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Add Task" aria-label="Add Task"
            aria-describedby="button-addon2" value="{{ $value }}" name="task">
        <button class="btn btn-outline-success" type="submit" id="button-addon2">{{$btn_name}}</button>
    </div>

</form>
