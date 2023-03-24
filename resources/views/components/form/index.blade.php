@props(['action', 'method' => 'POST', 'class'=>null, 'btn_name' =>null, 'class'=>null, 'value'=>null, 'style'=>null])

<form action="{{ $action }}" style="{{ $style }}" class="{{ $class }}" method="{{ strtolower($method) == 'get' ? 'GET' : 'POST' }}">
    @csrf

    @unless(in_array($method, ['GET', 'POST']))
        @method($method)
    @endunless

    {{ $slot }}

</form>
