@extends('Backend.master')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@endpush
@section('top_button')
    <a href="{{route('applicant.create')}}" class="btn btn-sm btn-warning"><i class="fa fa-plus"></i> Add New Applicant</a>
@endsection
@section('content')
    <div class="justify-content-center">
            <div class="card">
               <div class="card-body">
                   <table id="example" class="table table-striped table-bordered my-5" >
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
                                   <a href="" class="btn btn-primary">View</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable(
                {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                }
            );
        });
    </script>

@endpush
