<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsTable extends Component
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
        return view('livewire.products-table', [
            'products' => Product::where('name', 'LIKE', "%$this->search%")
            ->paginate($this->perPage)
        ]);
    }
}
