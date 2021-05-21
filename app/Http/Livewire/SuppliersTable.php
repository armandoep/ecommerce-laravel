<?php

namespace App\Http\Livewire;

use App\Models\Supplier;
use Livewire\Component;
use Livewire\WithPagination;

class SuppliersTable extends Component
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
        return view('livewire.suppliers-table', [
            'suppliers' => Supplier::where('name', 'LIKE', "%$this->search%")
            ->orWhere('email', 'LIKE', "%$this->search%")
            ->paginate($this->perPage)
        ]);
    }

    public function clear()
    {
        $this->search = '';
        $this->page = 1;
        $this->perPage = '5';
    }
}
