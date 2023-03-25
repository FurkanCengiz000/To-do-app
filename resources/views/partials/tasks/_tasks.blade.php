@foreach ($tasks as $task)
    <tr>
        <td>
            <div>
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
                <x-form action="{{ route('destroy', $task->id) }}" method="DELETE" style="display: inline">
                    <button class="btn-sm btn-danger border-0 me-2" type="submit">
                        <i class="fa fa-trash text-white"></i>
                    </button>
                </x-form>
                <a class="btn-sm btn-warning border-0" href="{{ route('edit', $task->slug) }}">
                    <i class="fa-solid fa-pen-to-square" style="color: #212529;"></i>
                </a>
            </div>
        </td>
    </tr>
@endforeach
