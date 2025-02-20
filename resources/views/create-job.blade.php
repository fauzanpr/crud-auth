<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('job.store') }}" method="POST">
        @csrf
        <div>
            <label for="company">Company</label>
            <input type="text" id="company" name="company">
        </div>
        <div>
            <label for="salary">Salary</label>
            <input type="number" id="salary" name="salary">
        </div>
        <div>
            <label for="position">Position</label>
            <input type="text" id="position" name="position">
        </div>
        <button>Submit</button>
    </form>
</body>

</html>
