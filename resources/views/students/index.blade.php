<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>
    <h1>Student Management</h1>
    <a href="/students/create">+ Add New Student</a>
    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th>
            <th>Roll No</th>
            <th>Semester</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->roll_no }}</td>
            <td>{{ $student->semester }}</td>
            <td>{{ $student->email }}</td>
            <td>
                <a href="/students/{{ $student->id }}/edit">Edit</a>
                <form action="/students/{{ $student->id }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>