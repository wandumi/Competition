@extends('backend.layouts.app')

@section('header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css"
          integrity="sha512-hievggED+/IcfxhYRSr4Auo1jbiOczpqpLZwfTVL/6hFACdbI3WQ8S9NCX50gsM9QVE+zLk/8wb9TlgriFbX+Q=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Submissions</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">submissions</li>
        </ol>
    </div>
    <!-- Invoice Example -->
    <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">All Submissions</h6>
                <a class="m-0 float-right btn btn-warning btn-sm" href="{{ url('/home') }}">Dashboard <i
                        class="fas fa-chevron-right"></i></a>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($submissions as $submision)
                        <tr>
                            <td><a href="#">{{ $submision->full_name }}</a></td>
                            <td>{{ $submision->email }}</td>
                            <td>{{ $submision->mobile }}</td>

                            <td>
                                <img src="{{ $submision->slip ? asset('slips/'. $submision->slip) : "http://via.placeholder.com/150X150" }}"
                                     style="width: 100px; height: 80px;" />
                            </td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="javascript:void(0);" data-toggle="modal" data-target="#viewSubmission">View</a>

                                <input data-id="{{ $submision->id }}" class="toggle-class btn btn-md" type="checkbox" data-onstyle="success"
                                           data-offstyle="danger" data-toggle="toggle" data-on="Approve" data-off="Ignore"
                                        {{ $submision->status ? 'checked' : '' }}
                                    />

                            </td>
                        </tr>

                    @endforeach


                    </tbody>
                    <tfoot class="thead-light">
                        {{ $submissions->links() }}
                    </tfoot>
                </table>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>

    <!-- Modal Logout -->
    <div class="modal fade" id="viewSubmission" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
         aria-hidden="true">
        <div class="modal-dialog mw-100 w-50" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelLogout">View Slip</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ $submision->slip ? asset('slips/'. $submision->slip) : "http://via.placeholder.com/150X150" }}"
                          width="100%" />
                </div>
            </div>
        </div>
    </div>


@endsection
@section('footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <script>
        $(document).ready(function(){

            $(function(){
                $('.toggle-class').change(function(){
                    var status = $(this).prop('checked') == true ? 1 : 0;
                    var member_id = $(this).data('id');

                    $.ajax({
                        type:'GET',
                        dataType:'json',
                        url: '/admin/changeStatus',
                        data: {'status': status, 'id': member_id},
                        success: function(data) {
                            console.log(data);
                        }
                    })
                })
            })
        });
    </script>
@endsection
