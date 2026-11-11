<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <form action="/students/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $student->name }}" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $student->email }}" required>
        <br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" value="{{ $student->phone }}" required>
        <br>
        <button type="submit">Update Student</button>
    </form>
</body>
</html>
