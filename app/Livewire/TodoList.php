<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\TodoItems;

class TodoList extends Component
{
    public $todos;
    public string $todoText;

    public function mount () {
        $this->selectTodos();
    }

    public function selectTodos () {
        $this->todos = TodoItems::latest()->get();
    }

    public function addTodo () {
        $todo = new TodoItems();
        $todo->todo = $this->todoText;
        $todo->completed = false;
        $todo->save();

        $this->todoText = '';
        $this->selectTodos();
    }

    public function toggleTodo ($id) {
        $todo = TodoItems::find($id);
        if (!$todo) {
            return;
        }
        $todo->completed =! $todo->completed;
        $todo->save();
        $this->selectTodos();
    }

    public function deleteTodo ($id) {
        $todo = TodoItems::find($id);
        if ($todo) {
            $todo->delete();
            $this->selectTodos();
        }

    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
