@extends('backend.layouts.app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Draws</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Draws</li>
        </ol>
    </div>

    <!-- Invoice Example -->
    <div class="col-xl-12 col-lg-12 mb-4">
        <div class="card">

            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">All Draws</h6>
                <a href="" class="m-0 btn btn-primary btn-sm">Start Draw</a>
                <form method="get" action="{{ url('/admin/chooseWinner') }}">
                    @csrf
                    <input type="submit" name="raffle" value="Raffle" class="btn btn-secondary" />
                </form>
                <a class="m-0 float-right btn btn-warning btn-sm" href="{{ url('/home') }}">Dashboard <i
                        class="fas fa-chevron-right"></i></a>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush" id="showWinner">
                    <thead class="thead-light">
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Image</th>
                        <th>Status</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($approvedSubmissions as $submision)
                        <tr>
                            <td><a href="#">{{ $submision->full_name }}</a></td>
                            <td>{{ $submision->email }}</td>
                            <td>{{ $submision->mobile }}</td>

                            <td>
                                <img src="{{ $submision->slip ? asset('slips/'. $submision->slip) : "http://via.placeholder.com/150X150" }}"
                                     style="width: 100px; height: 80px;" />
                            </td>

                            <td>
                                @if($submision->status == 1)
                                    <span class="badge badge-success">Approved</span>
                                @else
                                    <span class="badge badge-secondary">Not Approved</span>
                                @endif
                            </td>

                        </tr>

                    @endforeach


                    </tbody>
                    <tfoot class="thead-light">
                        {{ $approvedSubmissions->links() }}
                    </tfoot>
                </table>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>

@endsection

@section('footer')
    <script>

        $(document).ready(function(){

            $('#loader').hide();

            function getWinner(){

                //div contains the loader
                //$('#loader').show();

                $.get('/admin/winner', function(data) {
                    //
                    $('#content').html(data);
                    //hide the loader
                    $('#loader').hide();
                    //build DataTable
                    $('#showWinner table').dataTable();

                });
            }

        });
    </script>
@endsection

