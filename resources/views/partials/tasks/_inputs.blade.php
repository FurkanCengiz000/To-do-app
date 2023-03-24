<div class="d-flex justify-content-center mt-5">
    <x-input_form action="{{ route('store') }}" class="w-75" method="POST" />
</div>

@error('task')
    @include('partials._alert')
@enderror
