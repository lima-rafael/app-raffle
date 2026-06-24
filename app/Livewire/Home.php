<?php

namespace App\Livewire;

use App\Models\Raffle;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Home extends Component
{
    #[Computed]
    public function raffles(): Collection
    {
        return Raffle::query()
            ->withCount('applicants')
            ->whereNotNull('published_at')
            ->get();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
