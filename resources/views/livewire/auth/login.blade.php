<div>
    <h1 class="text-2x1 font-bold mb-4">Login</h1>
    <form wire:submit="handle">
        <x-ui.input label="Enter your email" name="email" wire:model="email" type="email" />
        <x-ui.input label="Enter your password" name="password" type="password" wire:model="password"/>
        <x-ui.button type="submit" class="mt-4">Login</x-ui.button>
    </form>
</div>