<x-layout>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Lead List </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Lead List</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="lead-heading-top d-flex align-items-center justify-content-center">
                            <!-- search bar start -->
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search your items..."
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">Search</span>
                            </div>
                            <!-- search bar end -->

                            <!-- lead add button start -->
                            <div class="top-button">
                                <button class="lead-button btn btn-primary rounded-0">New Lead</button>
                            </div>
                            <!-- lead add button end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
