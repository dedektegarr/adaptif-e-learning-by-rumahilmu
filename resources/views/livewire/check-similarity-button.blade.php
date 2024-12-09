<div>
    <button wire:target="checkSimilarity" type="button" class="btn btn-success btn-sm" wire:click="checkSimilarity"
        wire:loading.attr="disabled">
        <i class="fa fa-tachometer mr-1"></i>
        <span wire:loading.remove>{{ $label }}</span>
        <span wire:target="checkSimilarity" wire:loading>Memproses, harap tunggu...</span>
    </button>
</div>
