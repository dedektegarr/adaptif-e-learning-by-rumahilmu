<div>
    <button wire:target="preprocess" type="button" class="btn btn-primary btn-sm" wire:click="preprocess"
        wire:loading.attr="disabled">
        <span wire:loading.remove>{{ $label }}</span>
        <span wire:target="preprocess" wire:loading>Memproses, harap tunggu...</span>
    </button>
</div>
