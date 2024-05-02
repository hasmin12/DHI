<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <!-- Include Filament assets -->
    <link rel="stylesheet" href="{{ asset('vendor/filament/filament.css') }}">
    <script src="{{ asset('vendor/filament/filament.js') }}" defer></script>

    <!-- Include Livewire assets -->
    @livewireStyles
</head>
<body>
    <!-- Include Filament content -->
    {{ $slot }}

    <!-- Modal dialog for file upload -->
    <div id="fileUploadModal" class="modal" style="display: none;">
        <div class="modal-content">
            <h2>Upload File</h2>
            <form id="fileUploadForm" wire:submit.prevent="updatedAttachment">
                <input type="file" wire:model="attachment">
                @error('attachment') <span>{{ $message }}</span> @enderror
                <button type="submit">Upload</button>
            </form>
        </div>
    </div>

    <!-- Script to handle modal dialog -->
    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('openModal', modalId => {
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.style.display = 'block';
                }
            });
        });
    </script>

    <!-- Include Livewire assets -->
    @livewireScripts
</body>
</html>
