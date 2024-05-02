<div>
    <form wire:submit.prevent="updatedAttachment">
        <input type="file" wire:model="attachment">

        @error('attachment') <span>{{ $message }}</span> @enderror

        <button type="submit">Upload</button>
    </form>
</div>
