@extends('Backend.master')
@section('title','Applicants | GSP')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
@endpush
@section('top_button')
    <form class="form-group" action="{{route('applicant_all.delete')}}" method="POST">
        <a href="{{route('applicant.create')}}" class="btn btn-sm btn-warning"><i class="fa fa-plus"></i> Add New
            Applicant</a>
        <a class="btn btn-sm btn-primary" href="{{ route('process') }}"><i class="fa fa-cogs"></i> Process Result</a>
        <a class="btn btn-sm btn-success" href="{{route('applicant_export')}}"><i class="fa fa-th-large"></i> Export All</a>
        @csrf
        <button type="submit" class="btn btn-sm btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>
            <i class="fa fa-trash"></i>
            Empty Database
        </button>
    </form>
@endsection
@section('content')
    <div class="justify-content-center">
        <div class="card">
            <div class="card-body">
                @if(session('status'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{session('status')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (count($errors) > 0)
                    <div class="alert alert-danger alert-dismissible fade show">
                        <div class="container">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                @endif
                <form action="{{route('applicant_import')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-2 mb-3">
                            <input class="form-control" type="file" name="file" id="formFile">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-sm btn-secondary">Import</button>
                        </div>

                    </div>
                </form>
                <table id="example" class="table table-striped table-bordered my-5">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Zone</th>
                        <th scope="col">Code</th>
                        <th scope="col">Applicant Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Institute</th>
                        <th scope="col">Department</th>
                        <th scope="col">Primary Marks</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ( $data as $item )
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->zone }}</td>
                            <td>{{ $item->zone_code }}</td>
                            <td>{{ $item->applicant_name }}</td>
                            <td>{{ $item->primary_mobile }}</td>
                            <td>{{ $item->institute }}</td>
                            <td>{{ $item->department }}</td>
                            <td>{{ $item->total_mark }}</td>
                            <td>
                                <a href="{{ route('applicant.show',$item) }}" class="btn btn-primary">View</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function (event) {
            var form = $(this).closest("form");
            event.preventDefault();
            swal({
                title: `Delete !`,
                text: 'Are you sure you want to delete all applicant?',
                icon: "warning",
                dangerMode: true,
                buttons: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        swal("All Applicant has been deleted !", "You clicked the button!", "danger");
                        form.submit();
                    }
                });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable(
                {
                    dom: 'Bfrtip',
                    buttons: [
                        {
                            extend: 'copyHtml5',
                            exportOptions: {
                                columns: [0, ':visible']
                            }
                        },
                        {
                            extend: 'print',
                            exportOptions: {
                                columns: [0, ':visible'],
                            }
                        },
                        {
                            extend: 'excelHtml5',
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            exportOptions: {
                                columns: [0, 1, 2, 5]
                            }
                        },
                        'colvis'
                    ]
                }
            );
        });
    </script>

@endpush
