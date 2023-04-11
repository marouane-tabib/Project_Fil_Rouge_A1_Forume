<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class FileUploadService
{
  public function uploadFile($file, $baseDerictory, $childDerictory){
    // Generate file name
    $filename = date('YmdHi').$file->getClientOriginalName();
    // Create the storage derictory link
    $storagePath = $baseDerictory.$childDerictory.date('m-Y').'/';
    // Generate the storage derictory child link to this file
    $storagePathChild = date('m-Y').'/'.$filename;
    // Move to store the file
    Storage::putFileAs($storagePath, $file, $filename);
    // return the finale database storing name
    return $storagePathChild;
  }

  public function deleteFile($filePath, $baseDerictory, $childDerictory)
  {
    // Create the path of the delete file
    $deleteFilePath = $baseDerictory.$childDerictory.$filePath;
    if (Storage::exists($deleteFilePath)) {
        // Delete the file using the Storage facade
        return Storage::delete($deleteFilePath);
    }
    return false;
  }

  public function updateFile($oldFilePath, $file, $baseDerictory, $childDerictory){
    $deleteFile = $this->deleteFile($oldFilePath, $baseDerictory, $childDerictory);
    $uploadFile = $this->uploadFile($file, $baseDerictory, $childDerictory);
    return $uploadFile;
  }
}
