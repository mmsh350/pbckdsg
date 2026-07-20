<?php
namespace App\Livewire\Admin\Sliders;
use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component {
    use WithFileUploads;

    public ?Slider $slider = null;
    public $images = [];
    public $sort_order = 0;
    public $is_active = true;

    public function mount(Slider $slider = null) {
        if ($slider && $slider->exists) {
            $this->slider = $slider;
            $this->sort_order = $slider->sort_order;
            $this->is_active = $slider->is_active;
        }
    }

    public function save() {
        $this->validate([
            'images' => $this->slider ? 'nullable|array' : 'required|array',
            'images.*' => 'image|max:2048',
            'sort_order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        if ($this->slider && $this->slider->exists) {
            $data = [
                'sort_order' => $this->sort_order,
                'is_active' => $this->is_active,
            ];
            
            if (!empty($this->images)) {
                $data['image'] = reset($this->images)->store('sliders', 'public');
            }
            $this->slider->update($data);
        } else {
            foreach ($this->images as $img) {
                Slider::create([
                    'image' => $img->store('sliders', 'public'),
                    'sort_order' => $this->sort_order,
                    'is_active' => $this->is_active,
                ]);
            }
        }

        session()->flash("message", "Saved successfully.");
        return $this->redirectRoute("admin.sliders.index", navigate: true);
    }

    public function render() { 
        return view("livewire.admin.sliders.form")->layout("layouts.app"); 
    }
}