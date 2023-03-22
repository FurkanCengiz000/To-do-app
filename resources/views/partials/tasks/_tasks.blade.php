@foreach ($tasks as $task)
    <tr>
        <td>
            <div class="">
                <input class="form-check-input ms-3" type="checkbox" id="defaultCheck1"
                    @if ($task->is_completed == 1) checked @endif>
            </div>
        </td>

        <td>
            <div class="@if ($task->is_completed == 1) text-decoration-line-through fst-italic @endif">
                {{ $task->task }}
            </div>
        </td>

        <td>
            <div class="d-flex">
                <form action="{{ route('destroy', $task->id) }}" method="POST" style="display: inline">
                    @csrf
                    @method('delete')
                    <button class="btn-sm btn-danger border-0 me-2" type="submit">
                        <i class="fa fa-trash" style="color: #ffffff;"></i>
                    </button>
                </form>
                <a class="btn-sm btn-warning border-0" href="#">
                    <i class="fa-solid fa-pen-to-square" style="color: #212529;"></i>
                </a>
            </div>
        </td>
    </tr>
@endforeach
