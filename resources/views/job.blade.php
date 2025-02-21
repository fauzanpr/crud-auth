<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif
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
                <td style="display: flex">
                    <a href="{{ route('job.show', $job->id) }}">Show</a>
                    <a href="{{ route('job.edit', $job->id) }}">Edit</a>
                    <form action="{{ route('job.destroy', $job->id) }}" method="POST"
                        onsubmit="confirm('Yakin deck?')">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
