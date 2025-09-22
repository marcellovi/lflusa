<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    //
    public function downloadImageFiles($filename){

        // Define allowed file types and maximum size
        $allowed_types = ['jpeg', 'jpg', 'png'];
        $max_file_size  = 200; //* 1024; // 200 KB in bytes
        dd($filename);
        // Get file extension and size
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        $filePath = 'files/images/' . $filename;

        // Basic checks (if file exists delete the old one before saving)
        if (Storage::disk('local')->exists($filePath)) {
            abort(404, 'File not found.');
        }

        // File type validation
        if (!in_array($extension, $allowed_types)) {
            abort(403, 'File type not allowed for download.');
        }

        // 3. File size validation
        $fileSizeKB = Storage::disk('local')->size($filePath);
        //$maxSizeKB = $maxSizeMB * 1024; // Convert MB to KB
        dd($fileSizeKB);
        if ($fileSizeKB > $max_file_size) {
            abort(403, 'File size exceeds the allowed limit of ' . $max_file_size . 'kB.');
        }

        // 4. Download the file
        return Storage::disk('local')->download($filePath, $filename);

        //return response()->download(storage_path("app/public/".$filename));
    }

    //
    public function downloadTextFiles($filename){

        // Define allowed file types and maximum size
        $allowed_types = ['pdf', 'docx', 'txt']; // Example: PDF, Word, Text files
        $max_file_size  = 200 * 1024; // 200 KB in bytes

        return response()->download(storage_path("app/public/".$filename));
    }
}
