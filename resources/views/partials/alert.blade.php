@if (session()->has('success'))
    <div class="container">
        <div class="row md-6">
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
               {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        </div>
    </div>
@endif

@if (session()->has('error'))
    <div class="container">
        <div class="row md-6">
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                {{ session()->get('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        </div>
    </div>
@endif