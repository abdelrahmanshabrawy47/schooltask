<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This page for Show All Student</title>
</head>

<body>

    <div class="container py-5 d-flex flex-column justify-content-center align-items-center" 
    style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
        <h1 class="mb-4 text-primary fw-bold">All Students</h1>
        <table class="table table-bordered table-hover text-center shadow rounded overflow-hidden">
            <thead class="table-dark">
                <tr>
                    <th class="py-3">Id</th>
                    <th class="py-3">Name</th>
                    <th class="py-3">Email</th>
                    <th class="py-3">Phone</th>
                    <th class="py-3">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($students as $std)
                <tr class="align-middle">
                    <td class="py-3">{{$std->id}}</td>
                    <td class="py-3 fw-semibold">{{$std->name}}</td>
                    <td class="py-3">{{$std->email}}</td>
                    <td class="py-3">{{$std->phone}}</td>
                    <td class="py-3">
                        <a href="/students/{{$std->id}}" class="btn btn-outline-primary">Show</a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>

    <style>
        .container {
            min-height: 80vh;
        }

        h1 {
            letter-spacing: 1px;
        }

        table {
            max-width: 900px;
            background-color: white;
            border-radius: 10px;
        }

        thead th {
            background-color: #212529;
            color: white;
        }

        tbody tr:hover {
            background-color: #eaf2ff;
            transition: 0.3s;
        }

        td,
        th {
            padding: 15px !important;
        }
    </style>

</body>

</html>