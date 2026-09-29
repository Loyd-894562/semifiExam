@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">

    <h2>Patients List</h2>

   
</div>

@if(session('success'))

    <div class="alert alert-success">

        {{ session('success') }}

    </div>

@endif

<table class="table table-bordered table-striped">

    <thead>

        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Course</th>
            <th>Year Level</th>
        </tr>

    </thead>

    <tbody>

        @foreach($patients as $patient)

            <tr>

                <td>{{ $patient->student_id }}</td>

                <td>{{ $patient->name }}</td>

                <td>{{ $patient->course }}</td>

                <td>{{ $patient->year_level }}</td>

            </tr>

        @endforeach

    </tbody>

</table>

@endsection