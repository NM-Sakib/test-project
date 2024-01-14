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

        <h2 class = "text-center">Create New Task</h2>
        <form class="mt-3 w-70 shadow p-5" method="POST" action="{{ route('createNewTaskPage') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="form-group my-3">
                <label class = "mb-2">Title</label>
                <input type="text" class="form-control" name="taskTitle" placeholder="Title">
                {{-- <div class="text-danger">
                    @error('taskTitle')
                        {{ $message }}
                    @enderror
                </div> --}}
            </div>

            <div class="form-group my-2">
                <label class = "mb-2">Description</label>
                <textarea class="form-control" name="taskDescription" placeholder="Description" style="resize: none; height:150px"></textarea>
                {{-- <div class="text-danger">
                    @error('taskDescription')
                        {{ $message }}
                    @enderror
                </div> --}}
            </div>

            <div class="form-group my-2">
                <label class = "mb-2">Start Time and Date</label>
                <input type="datetime-local" class="form-control" name="taskStartDate">
                {{-- <div class="text-danger">
                    @error('taskStartDate')
                        {{ $message }}
                    @enderror
                </div> --}}
            </div>

            <div class="form-group my-2">
                <label class = "mb-2">End Time and Date</label>
                <input type="datetime-local" class="form-control" name="taskDeadline">
                {{-- <div class="text-danger">
                    @error('taskDeadline')
                        {{ $message }}
                    @enderror
                </div> --}}
            </div>

            <label class = "mb-2 mt-2">Select Mapping</label>
            <select name="selectMaping" class="form-select">
                <option value="">select</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            {{-- <div class="text-danger">
                @error('selectMaping')
                    {{ $message }}
                @enderror
            </div> --}}

            <label class = "mb-2 mt-2">Select Priority</label>
            <select name="selectPriority" class="form-select">
                <option value="">select</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            {{-- <div class="text-danger">
                @error('selectPriority')
                    {{ $message }}
                @enderror
            </div> --}}

            <label class = "mb-2 mt-2">Assign User</label>
            <select name="selectUser" class="form-select">
                <option value="">select</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            {{-- <div class="text-danger">
                @error('selectUser')
                    {{ $message }}
                @enderror
            </div> --}}

            <div class="form-group my-3">
                <label class = "mb-2">Remarks</label>
                <input type="text" class="form-control" name="taskRemarks" placeholder="Remarks">
                {{-- <div class="text-danger">
                    @error('taskRemarks')
                        {{ $message }}
                    @enderror
                </div> --}}
            </div>

            <div class="form-group my-3">
                <label class = "mb-2">Links</label>
                <input type="text" class="form-control" name="taskLinks" placeholder="Links">
                {{-- <div class="text-danger">
                    @error('taskLinks')
                        {{ $message }}
                    @enderror
                </div> --}}
            </div>

            {{-- <label class = "">File</label>
            <div class="form-group my-3">
                <input type="file" class="form-control" name="taskFile">
                {{-- <div class="text-danger">
                    @error('taskFile')
                        {{ $message }}
                    @enderror
                </div>
            </div> --}}

            <input type="submit" class="btn btn-primary mt-4" value="Create Task">
        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
