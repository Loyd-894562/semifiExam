@extends ('layouts.app')

@section('content')
<h1>List of Doctors</h1>
<div>
     <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
            <tr>
                <td>{{ $doctor->name }}</td>
                 <td>{{ $doctor->specialization }}</td>
                  <td>{{ $doctor->email }}</td>
                   <td>{{ $doctor->phone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection