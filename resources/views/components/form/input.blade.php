@props(['btn_name' =>null, 'value'=>null])

<div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Add Task" aria-label="Add Task"
        aria-describedby="button-addon2" value="{{ $value }}" name="task">
    <button class="btn btn-outline-success" type="submit" id="button-addon2">{{$btn_name}}</button>
</div>