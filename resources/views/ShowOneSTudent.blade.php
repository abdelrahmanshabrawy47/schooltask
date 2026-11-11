<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this page for display one student</title>
</head>
<body>
    <div class="container">
        <h1 class="mb-4 text-primary fw-bold">Student Details</h1>
        <table border="1" class="table table-bordered table-hover text-center shadow rounded overflow-hidden">
            <thead class="table-dark">
                <tr>
                    <th class="py-3">Id</th>
                    <th class="py-3">Name</th>
                    <th class="py-3">Email</th>
                    <th class="py-3">Phone</th>
                </tr>
            </thead>

            <tbody>
                <tr class="align-middle">
                    <td class="py-3">{{$student->id}}</td>
                    <td class="py-3 fw-semibold">{{$student->name}}</td>
                    <td class="py-3">{{$student->email}}</td>
                    <td class="py-3">{{$student->phone}}</td>
                </tr>
            </tbody>

        </table>
    </div>
</body>
</html>
