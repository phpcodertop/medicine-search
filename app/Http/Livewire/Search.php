<?php

namespace App\Http\Livewire;

use App\Models\Medicine;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        return view('livewire.search', [
            'medicines' => isset($this->search) ?
                Medicine::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('ingredients', 'like', '%' . $this->search . '%')
                ->orWhere('effect', 'like', '%' . $this->search . '%')
                ->orWhere('other', 'like', '%' . $this->search . '%')
                ->simplePaginate(5)
                :
                Medicine::simplePaginate(5)

        ]);
    }
}
