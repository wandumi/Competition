@extends('backend.layouts.app')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users</li>
        </ol>
    </div>

    <!-- Invoice Example -->
    <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">All Users</h6>
                <a class="m-0 float-right btn btn-danger btn-sm" href="#">Dashboard <i
                        class="fas fa-chevron-right"></i></a>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Item</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="#">RA0449</a></td>
                        <td>Udin Wayang</td>
                        <td>Nasi Padang</td>
                        <td><span class="badge badge-success">Delivered</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">RA5324</a></td>
                        <td>Jaenab Bajigur</td>
                        <td>Gundam 90' Edition</td>
                        <td><span class="badge badge-warning">Shipping</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">RA8568</a></td>
                        <td>Rivat Mahesa</td>
                        <td>Oblong T-Shirt</td>
                        <td><span class="badge badge-danger">Pending</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">RA1453</a></td>
                        <td>Indri Junanda</td>
                        <td>Hat Rounded</td>
                        <td><span class="badge badge-info">Processing</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">RA1998</a></td>
                        <td>Udin Cilok</td>
                        <td>Baby Powder</td>
                        <td><span class="badge badge-success">Delivered</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>

@endsection
