
    <form method="POST" action="{{ url('/logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <h2>Create New Task</h2>
<form method="POST" action="{{ route('tasks.store') }}">
    @csrf

    <div>
        <label for="title">Task Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required>
    </div>

    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ old('description') }}</textarea>
    </div>

    <div>
        <label for="due_date">Due Date:</label>
        <input type="date" id="due_date" name="due_date" value="{{ old('due_date') }}">
    </div>

    <div>
        <label for="is_completed">
            <input type="checkbox" id="is_completed" name="is_completed" value="1" {{ old('is_completed') ? 'checked' : '' }}>
            Completed
        </label>
    </div>

    <button type="submit">Add Task</button>
</form>

    <a href="{{ url('/tasks') }}">Back to Task List</a>



