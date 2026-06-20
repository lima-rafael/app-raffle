<div>
    @if ($modal)
        <x-ui.modal title="Editing raffle #{{ $raffle->id }}">
            <div>
                <form wire:submit="handle" class="space-y-4">
                    <x-ui.input wire:model.lazy="raffle.name" label="Name" name="raffle.name" type="text" />
                    <x-ui.button type="submit" class="w-full" wire:loading.attr="disabled" wire:target="handle">Save</x-ui.button>
                </form>
            </div>
        </x-ui.modal>
    @endif
</div>