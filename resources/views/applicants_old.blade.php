@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Zone</th>
                          <th scope="col">Code</th>
                          <th scope="col">Applicant Name</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Institute</th>
                          <th scope="col">Department</th>
                          <th scope="col">Primary Marks</th>
                          <th scope="col">Zone</th>
                          <th scope="col">Zone</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ( $data as $item )
                          <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->primary_mobile }}</td>
                            <td>{{ $item->gender }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->institute }}</td>
                            <td>{{ $item->zone }}</td>
                            <td>{{ $item->zone_code }}</td>

                          </tr>
                          @endforeach
                      </tbody>
                </table>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
