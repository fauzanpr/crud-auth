<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('job.create') }}">Tambah Data</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Company</th>
            <th>Salary</th>
            <th>Position</th>
            <th>Aksi</th>
        </tr>
        @foreach ($jobs as $job)
            <tr>
                <td>{{ $job->id }}</td>
                <td>{{ $job->company }}</td>
                <td>{{ $job->salary }}</td>
                <td>{{ $job->position }}</td>
                <td>
                    <a href="">Show</a>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
