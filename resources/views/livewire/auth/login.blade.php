<div>
    <h1 class="text-2x1 font-bold mb-4">Login</h1>
    <form wire:submit="handle">

        <x-ui.input label="Enter your email" name="email" wire:model="email" type="email" />

        @error('email')
            <div class="text-red-500 text-sm mt-2">
                {{ $message }}
            </div>
        @enderror

        <x-ui.input label="Enter your password" name="password" type="password" wire:model="password"/>

        @error('password')
            <div class="text-red-500 text-sm mt-2">
                {{ $message }}
            </div>
        @enderror

        <x-ui.button type="submit" class="mt-4">Login</x-ui.button>
</div>