<?php

namespace App\Livewire\Raffle;

use App\Models\Raffle;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public ?Raffle $raffle = null;
    public bool $modal = false;

    public function rules(): array
    {
        return [
            'raffle.name' => ['required', 'string', 'min:5', 'max:255', 'unique:raffles,name' . $this->raffle->id]
        ];
    }

    #[On('raffle::edit')]
    public function open(int $id): void
    {
        $this->modal = true;
        $this->raffle = Raffle::findOrFail($id);
    }

    public function handle(): void
    {
        $this->validate();
        $this->raffle->save();
        $this->dispatch('raffle::refresh');
        $this->reset();

        // $raffle = Raffle::findOrFail($this->id);
        // $raffle->name = $this->name;
        // $raffle->save();
        
    }
    
    public function render()
    {
        return view('livewire.raffle.edit');
    }
}
