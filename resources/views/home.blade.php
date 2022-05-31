@extends('Backend.master')
@section('title','Home | GSP')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')

    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container">

            <div class="row">
                <div class="col">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-header">Total Applicant</h5>
                            <center><h1>{{ $data->total_application }}</h1></center>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-header">Total Processed</h5>
                            <center><h1>{{ $data->total_processed }}</h1></center>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-success  mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-header">Mark 30 & Above</h5>
                            <center><h1>{{ $data->total_above }}</h1></center>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-header">Mark 30 Below</h5>
                            <center><h1>{{ $data->total_below }}</h1></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

@endpush
