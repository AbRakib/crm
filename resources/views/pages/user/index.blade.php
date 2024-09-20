@extends('components.layout')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Users </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User List</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="customer-heading-top d-flex align-items-center justify-content-center mb-5">
                            <!-- search bar start -->
                            <div class="input-group search-bar-group">
                                <input type="text" class="form-control search-bar" placeholder="Search your items..."
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-text search-btn" id="basic-addon2">Search</span>
                            </div>
                            <!-- search bar end -->

                            <!-- lead add button start -->
                            <div class="top-button">
                                <button class="customer-button btn btn-primary" onclick="showUserModal()">
                                    Add User
                                </button>
                            </div>
                            <!-- lead add button end -->
                        </div>

                        <!-- Table Start -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> User </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                    <th> Phone </th>
                                    <th> Created Date </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-1">
                                        <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                                    </td>
                                    <td> Herman Beck </td>
                                    <td> jessica.sunshine@example.com </td>
                                    <td> (555) 246-8101 </td>
                                    <td> May 15, 2015 </td>
                                </tr>
                                <tr>
                                    <td class="py-1">
                                        <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
                                    </td>
                                    <td> Messsy Adam </td>
                                    <td> tommy.brightstar@example.com </td>
                                    <td> (555) 555-1212 </td>
                                    <td> July 1, 2015 </td>
                                </tr>
                                <tr>
                                    <td class="py-1">
                                        <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                                    </td>
                                    <td> John Richards </td>
                                    <td> lila.dreamer123@example.com </td>
                                    <td> (555) 111-2222 </td>
                                    <td> Apr 12, 2015 </td>
                                </tr>
                                <tr>
                                    <td class="py-1">
                                        <img src="../../assets/images/faces-clipart/pic-4.png" alt="image" />
                                    </td>
                                    <td> Peter Meggik </td>
                                    <td> bobby.pineapple@example.com </td>
                                    <td> (555) 777-8888 </td>
                                    <td> May 15, 2015 </td>
                                </tr>
                                <tr>
                                    <td class="py-1">
                                        <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                                    </td>
                                    <td> Edward </td>
                                    <td> starlight.panda@example.com </td>
                                    <td> (555) 333-4444 </td>
                                    <td> May 03, 2015 </td>
                                </tr>
                                <tr>
                                    <td class="py-1">
                                        <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
                                    </td>
                                    <td> John Doe </td>
                                    <td> happy.koala2023@example.com </td>
                                    <td> (555) 999-0000 </td>
                                    <td> April 05, 2015 </td>
                                </tr>
                                <tr>
                                    <td class="py-1">
                                        <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                                    </td>
                                    <td> Henry Tom </td>
                                    <td> quirky.dolphin@example.com </td>
                                    <td> (555) 888-5555 </td>
                                    <td> June 16, 2015 </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Table End -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal include -->
    {{-- @include('pages.customer.modal.add_modal') --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-description text-center"> Customer Registration </h5>
                            <form class="forms-sample">
                                <div class="form-group">
                                    <label for="customerName">Name</label>
                                    <input type="text" class="form-control" id="customerName" placeholder="Customer Name">
                                </div>
                                <div class="form-group">
                                    <label for="customerEmail">Email address</label>
                                    <input type="email" class="form-control" id="customerEmail" placeholder="Customer Email">
                                </div>
                                <div class="form-group">
                                    <label for="customerPhone">Phone</label>
                                    <input type="email" class="form-control" id="customerPhone" placeholder="01*********">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password">
                                </div>

                                <div class="text-center">
                                    <button type="button" class="btn btn-light" onclick="closeCustomerModal()">Cancel</button>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function showUserModal() {
            $("#userModal").modal('show');
        }
        function closeUserModal() {
            $("#userModal").modal('hide');
        }
    </script>
@endsection