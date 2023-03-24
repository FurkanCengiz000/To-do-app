<div class="d-flex justify-content-center mt-5">
    <x-form action="{{ route('store') }}" class="w-75" method="POST">
        <x-form.input btn_name="Add" />
    </x-form>
</div>

@error('task')
    @include('partials._alert')
@enderror
