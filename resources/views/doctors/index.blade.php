<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>
    <a href="{{ route('dashboard') }}">Dashboard</a>
    <a href="{{ route('doctors.index') }}">Doctors</a>
    <a href="{{ route('patients.index') }}">Patients</a>
    <a href="{{ route('appointments.index') }}">Appointments</a>

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
</body>
</html>