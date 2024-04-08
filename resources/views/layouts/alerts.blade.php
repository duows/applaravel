@if (session()->get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <span>
        <strong>{{ session()->get('sucess') }}</strong> 
    </span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (session()->get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <span>
        <strong>{{ session()->get('error') }}</strong> 
    </span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif