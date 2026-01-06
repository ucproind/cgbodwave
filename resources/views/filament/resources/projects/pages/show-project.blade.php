{{-- resources/views/filament/resources/projects/pages/show-project.blade.php --}}
<x-filament::page>
    <x-filament::section>
        <div class="space-y-4">
            <h2 class="text-xl font-bold">{{ $record->name }}</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <h3 class="font-semibold text-gray-700">Basic Information</h3>
                    <p><strong>Created By:</strong> {{ $record->user->name ?? 'N/A' }}</p>
                    <p><strong>Created At:</strong> {{ $record->created_at->format('Y-m-d H:i:s') }}</p>
                </div>
            </div>
        </div>
    </x-filament::section>

    {{-- <x-filament::actions>
        <x-filament::link
            :href="route('filament.admin.resources.projects.edit', $record)"
            icon="heroicon-o-pencil"
            color="primary"
        >
            Edit
        </x-filament::link>

        <x-filament::link
            :href="route('filament.admin.resources.projects.index')"
            icon="heroicon-o-arrow-left"
            color="gray"
        >
            Back to List
        </x-filament::link>
    </x-filament::actions> --}}
</x-filament::page>
