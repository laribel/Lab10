<h1>Tarea ID: {{ $task->id }}</h1>
<hr>
<h2>{{ $task->name }}</h2>
<p>{{ $task->description }}</p>

<a href="/tasks/{{ $task->id }}/edit">Editar</a>
<a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $task->id }}').submit();">Eliminar</a>

<form id="delete-form-{{ $task->id }}" action="{{ url('/tasks/' . $task->id . '/delete') }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
  
    
</form>




