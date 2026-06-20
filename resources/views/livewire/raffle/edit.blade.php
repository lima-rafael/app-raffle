<div>
    @if ($modal)
        <x-ui.modal title="Editing raffle #{{ $id }}">
            <div>
                <form wire:submit="handle" class="space-y-4">
                    <x-ui.input wire:model.defer="name" label="Name" name="name" type="text" />
                    <x-ui.button type="submit" class="w-full" wire:loading.attr="disabled" wire:target="handle">Save</x-ui.button>
                </form>
            </div>
        </x-ui.modal>
    @endif
</div>