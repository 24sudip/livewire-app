<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class PhotoUpload extends Component
{
    use WithFileUploads;

    public $photo;

    public function render()
    {
        return view('livewire.photo-upload', [
            'images' => Image::all()
        ]);
    }

    public function submitPhoto() {
        $this->validate([
            'photo'=>'required|image'
        ]);
        $filepath = $this->photo->store('photos');
        $image = Image::create([
            'title'=>'Test',
            'filepath'=>$filepath
        ]);
        session()->flash('success', 'Photo Successfully Uploaded.');
        // session()->flash('error', 'Something Went Wrong.');
        // info($image);
        return redirect()->to('/success');
    }

    public function download($path) {
        return Storage::download($path);
    }
}
