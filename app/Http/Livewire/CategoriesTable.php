<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriesTable extends Component
{
    use WithPagination;

    protected $queryString = [
        'search' =>['except' => ''],
        'perPage' =>['except' => '5']
    ];

    public $search = '';
    public $perPage = '5';

    public function render()
    {
        return view('livewire.categories-table', [
            'categories' => Category::where('name', 'LIKE', "%$this->search%")
            ->paginate($this->perPage)
        ]);
    }
}
