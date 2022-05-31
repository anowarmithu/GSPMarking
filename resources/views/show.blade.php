@extends('Backend.master')
@section('title',$applicant->applicant_name.' | GSP')
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

@section('content')
    <div class="card">
        <div class="card-body">
            {{ $applicant->applicant_name }}
        </div>
    </div>
@endsection


@push('script')
@endpush
