<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('mytitle')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('homePage') }}">FormApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('homePage') }}">All Tasks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('createPage') }}">Add Task</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="d-flex justify-content-between mt-3">
            <h2>All tasks</h2>
            <a href="{{ route('createPage') }}" class="btn btn-outline-primary">Add New</a>
        </div>
        <table class="mt-3 table table-bordered">
            <thead>
                <tr>
                    <th class="col-1">#</th>
                    <th class="col">Title</th>
                    <th class="col">Description</th>
                    <th class="col">StartDate</th>
                    <th class="col">Deadline</th>
                    <th class="col">Maping</th>
                    <th class="col">Priority</th>
                    <th class="col">User</th>
                    <th class="col">Remarks</th>
                    <th class="col">Links</th>
                    <th class="col">File</th>
                    <th class="col-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->task_title }}</td>
                        <td>{{ $task->task_description }}</td>
                        <td>{{ $task->task_startDate }}</td>
                        <td>{{ $task->task_deadline }}</td>
                        <td>{{ $task->select_maping }}</td>
                        <td>{{ $task->select_priority }}</td>
                        <td>{{ $task->select_user }}</td>
                        <td>{{ $task->task_remarks }}</td>
                        <td>{{ $task->task_links }}</td>
                        <td><img src="{{ asset('files/' . $task->task_file) }}" alt="{{ $task->task_file }}"
                                style="height:40px; width:40px; border-radius:50%;"></td>
                        <td>
                            <div class="d-flex justify-content-between">
                                <!-- <a href="{{ route('detailsPage', $task->id) }}" type="submit" class="btn btn-primary btn-small">Details</a> -->
                                <a href="{{ route('editPage', $task->id) }}" type="submit"
                                    class="btn btn-success btn-small">Edit</a>
                                <a href="{{ route('deletePage', $task->id) }}" type="submit"
                                    class="btn btn-danger btn-small">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
