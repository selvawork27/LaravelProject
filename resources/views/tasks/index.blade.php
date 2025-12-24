@include('layouts.header')
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Due Date</th>
            <th>Completed</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->title }}</td>
            <td>{{ $task->description }}</td>
            <td>{{ $task->due_date }}</td>
            <td>{{ $task->is_completed ? 'Yes' : 'No' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ url('/tasks/create') }}">Create New Task</a>
