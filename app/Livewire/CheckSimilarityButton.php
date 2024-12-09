<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class CheckSimilarityButton extends Component
{
    public $label;
    public $daftarTugas;

    public function checkSimilarity()
    {
        $originalTugas = $this->daftarTugas->filter(fn($item) => $item->metadata !== null);

        foreach ($originalTugas as $index => $item) {
            $currentTugas = $item->metadata->word_tokens;
            $otherTugas = $originalTugas->filter(fn($tugas) => $tugas->id !== $item->id)->values();

            $mergeWordTokens = array_merge([$currentTugas], $otherTugas->pluck("metadata.word_tokens")->toArray());

            $response = Http::post("https://rumahilmu.org/api/cosim/calculate", [
                "word_tokens" => json_encode($mergeWordTokens)
            ]);

            if ($response->successful()) {
                $data = $response->json();
                $results = array_splice($data["similarities"], 1);

                $data = [];
                $timestamp = now();

                $item->similarityResults()->delete();

                foreach ($otherTugas as $index => $tugas) {
                    $data[] = [
                        'pengumpulan_tugas_id' => $item->id,
                        'compared_pengumpulan_tugas_id' => $tugas->id,
                        'similarity_score' => $results[$index],
                        'created_at' => $timestamp,
                        'updated_at' => $timestamp,
                    ];
                }

                $item->similarityResults()->insert($data);
            } else {
                dd("Error: " . $response->status());
            }
        }

        return $this->js("window.location.reload()");
    }

    public function render()
    {
        return view('livewire.check-similarity-button');
    }
}
