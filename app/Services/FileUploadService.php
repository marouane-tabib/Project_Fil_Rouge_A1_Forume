<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class FileUploadService
{
  public function uploadFile($file, $baseDerictory, $childDerictory){
    // Generate file name
    $filename = date('YmdHi').$file->getClientOriginalName();
    // Create the storage derictory link
    $storagePath = public_path($baseDerictory.$childDerictory.date('m-Y'));
    // Generate the storage derictory child link to this file
    $storagePathChild = date('m-Y').'/'.$filename;
    // Move to store the file
    $file->move($storagePath, $filename);
    // return the finale database storing name
    return $storagePathChild;
  }

  public function deleteFile($path)
  {
    if (Storage::disk('public')->exists($path)) {
        // Delete the file using the Storage facade
        return Storage::disk('public')->delete($path);
    }
    return false;
  }

  public function updateFile($oldFilePath, $file, $baseDerictory, $childDerictory){
    $deleteFile = $this->deleteFile($oldFilePath);
    $uploadFile = $this->uploadFile($file, $baseDerictory, $childDerictory);
    return $uploadFile;
  }
}
