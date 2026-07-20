<?php
namespace App\Livewire\Admin\Departments;
use App\Models\Department;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component {
    use WithFileUploads;

    public ?Department $department = null;
    public $name, $slug, $director, $email, $image;

    public function mount(Department $department = null) {
        if ($department && $department->exists) {
            $this->department = $department;
            $this->name = $department->name;
            $this->slug = $department->slug;
            $this->director = $department->director;
            $this->email = $department->email;
            $this->image = $department->image;
        }
    }

    public function save() {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'director' => 'nullable',
            'email' => 'nullable',
            'image' => 'nullable|image|max:2048'
        ]);

        $imagePath = $this->department ? $this->department->image : null;

        if (is_object($this->image)) {
            $imagePath = $this->image->store('departments', 'public');
        }

        $data = [
            'name' => $this->name,
            'slug' => \Illuminate\Support\Str::slug($this->name),
            'director' => $this->director,
            'email' => $this->email,
            'image' => $imagePath
        ];

        if ($this->department && $this->department->exists) {
            $this->department->update($data);
        } else {
            Department::create($data);
        }

        session()->flash("message", "Saved successfully.");
        return $this->redirectRoute("admin.departments.index", navigate: true);
    }

    public function render() { 
        return view("livewire.admin.departments.form")->layout("layouts.app"); 
    }
}