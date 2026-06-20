<?php

namespace App\Livewire\Raffle;

use App\Models\Raffle;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class Destroy extends Component
{
    public ?Raffle $raffle = null;
    public bool $modal = false;

    #[On('raffle::destroy')]
    public function open(int $id): void
    {
        $this->modal = true;
        $this->raffle = Raffle::findOrFail($id);
    }

    public function handle(): void
    {
        $this->raffle->delete();
        $this->dispatch('raffle::refresh');
        $this->reset();
    }

    public function render(): View
    {
        return view('livewire.raffle.destroy');
    }
}
