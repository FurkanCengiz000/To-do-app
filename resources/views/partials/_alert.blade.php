<div class="d-flex justify-content-center">
    <div class="alert alert-danger alert-dismissible fade show w-75 @if(request()->routeIs('edit')) w-100 @endif" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
