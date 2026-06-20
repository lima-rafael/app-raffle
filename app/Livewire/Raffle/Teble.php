<?php

namespace App\Livewire\Raffle;

use App\Models\Raffle;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

#[On('raffle::refresh')]
class Teble extends Component
{
    use WithPagination;

    #[Computed()]
    public function records(): LengthAwarePaginator
    {
        return Raffle::query()->paginate();
    }

    public function render(): View
    {
        return view('livewire.raffle.teble');
    }
}
