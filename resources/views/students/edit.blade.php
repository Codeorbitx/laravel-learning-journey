<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>

    <form action="/students/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ $student->name }}" required><br><br>

        <label>Roll No:</label><br>
        <input type="text" name="roll_no" value="{{ $student->roll_no }}" required><br><br>

        <label>Semester:</label><br>
        <input type="number" name="semester" value="{{ $student->semester }}" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $student->email }}"><br><br>

        <button type="submit">Update Student</button>
    </form>

    <br>
    <a href="/students">Back to List</a>
</body>
</html>