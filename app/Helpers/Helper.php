<?php

use Illuminate\Support\Facades\Route;
use Smalot\PdfParser\Parser;

function set_active($uri, $output = 'active')
{
    if (is_array($uri)) {
        foreach ($uri as $u) {
            if (Route::is($u)) {
                return $output;
            }
        }
    } else {
        if (Route::is($uri)) {
            return $output;
        }
    }
}

function checkStoragePath($path)
{
    $splitPath = explode("/", $path);

    if (in_array("storage", $splitPath)) {
        return $path;
    }

    return "storage/" . implode("/", $splitPath);;
}

function parseMetadata($path)
{
    $parser = new Parser();

    if (file_exists($path) && mime_content_type($path) == 'application/pdf') {
        $pdf = $parser->parseFile($path);
        $metadata = $pdf->getDetails();

        return [
            'title' => $metadata['Title'] ?? null,
            'subject' => $metadata['Subject'] ?? null,
            'author' => $metadata['Author'] ?? null,
            'creator' => $metadata['Creator'] ?? null,
            'producer' => $metadata['Producer'] ?? null,
            'pages' => $metadata['Pages'] ?? null,
            'creation_date' => $metadata['CreationDate'] ?? null,
            'mod_date' => $metadata['ModDate'] ?? null,
        ];
    }

    return false;
}
