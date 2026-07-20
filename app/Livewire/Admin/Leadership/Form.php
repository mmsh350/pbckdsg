<?php
namespace App\Livewire\Admin\Leadership;
use App\Models\Leadership;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component {
    use WithFileUploads;

    public ?Leadership $leadership = null;
    public $name, $position, $biography, $photo;

    public function mount(Leadership $leadership = null) {
        if ($leadership && $leadership->exists) {
            $this->leadership = $leadership;
            $this->name = $leadership->name;
            $this->position = $leadership->position;
            $this->biography = $leadership->biography;
            $this->photo = $leadership->photo;
        }
    }

    public function save() {
        $this->validate([
            'name' => 'required',
            'position' => 'required',
            'biography' => 'nullable',
            'photo' => 'nullable|image|max:2048'
        ]);

        $photoPath = $this->leadership ? $this->leadership->photo : null;

        if (is_object($this->photo)) {
            $photoPath = $this->photo->store('leadership', 'public');
        }

        $data = [
            'name' => $this->name,
            'position' => $this->position,
            'biography' => $this->biography,
            'photo' => $photoPath
        ];

        if ($this->leadership && $this->leadership->exists) {
            $this->leadership->update($data);
        } else {
            Leadership::create($data);
        }

        session()->flash("message", "Saved successfully.");
        return $this->redirectRoute("admin.leadership.index", navigate: true);
    }

    public function render() { 
        return view("livewire.admin.leadership.form")->layout("layouts.app"); 
    }
}