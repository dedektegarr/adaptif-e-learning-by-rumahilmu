<div>
    <button wire:target="checkSimilarity" type="button" class="btn btn-info btn-sm" wire:click="checkSimilarity"
        wire:loading.attr="disabled">
        <span wire:loading.remove>{{ $label }}</span>
        <span wire:target="checkSimilarity" wire:loading>Memproses, harap tunggu...</span>
    </button>
</div>
