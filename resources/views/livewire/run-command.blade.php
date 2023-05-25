<div>
    <h1 class="pb-0">Command Center</h1>
    <div class="pb-4 text-sm">Outputs are not saved at the moment, only available until you refresh or navigate.</div>
    <form class="flex items-end justify-center gap-2" wire:submit.prevent='runCommand'>
        <x-forms.input placeholder="ls -l" autofocus noDirty id="command" label="Command" required />
        <x-forms.select label="Server" id="server" required>
            @foreach ($servers as $server)
                @if ($loop->first)
                    <option selected value="{{ $server->uuid }}">{{ $server->name }}</option>
                @else
                    <option value="{{ $server->uuid }}">{{ $server->name }}</option>
                @endif
            @endforeach
        </x-forms.select>
        <x-forms.button class="btn-xl" type="submit">Run</x-forms.button>
    </form>
    <div class="container w-full pt-10 mx-auto">
        <livewire:activity-monitor />
    </div>
</div>
