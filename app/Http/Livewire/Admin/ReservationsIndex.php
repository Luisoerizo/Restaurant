<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Reservation;
use Livewire\WithPagination;


class ReservationsIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $search ;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

        $reservations = Reservation::where('client_name','LIKE','%'.$this->search.'%')
                        ->latest('id')
                        ->paginate(10);

        return view('livewire.admin.reservations-index',compact('reservations'));


    }
}
