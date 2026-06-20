<?php

namespace App\Livewire\Raffle;

use App\Models\Raffle;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class Destroy extends Component
{
    public ?int $id = null;
    public bool $modal = false;

    #[On('raffle::destroy')]
    public function open(int $id): void
    {
        $this->modal = true;
        $raffle = Raffle::findOrFail($id);
        $this->id = $raffle->id;
    }

    public function handle(): void
    {
        Raffle::where('id', $this->id)->delete();
        // Raffle::destroy($this->id);
        $this->dispatch('raffle::refresh');
        $this->reset();
    }

    public function render(): View
    {
        return view('livewire.raffle.destroy');
    }
}
