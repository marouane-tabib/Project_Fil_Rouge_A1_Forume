<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class FileUploadService
{
  public function uploadFile($file, $storageDerictory){
    // Generate file name
    $filename = date('YmdHi').$file->getClientOriginalName();
    // Create the storage derictory link
    $storagePath = $storageDerictory.date('m-Y').'/';
    // Generate the storage derictory child link to this file
    $storagePathChild = date('m-Y').'/'.$filename;
    // Move to store the file
    Storage::putFileAs($storagePath, $file, $filename);
    // return the finale database storing name
    return $storagePathChild;
  }

  public function deleteFile($filePath)
  {
    // Create the path of the delete file
    if (Storage::exists($filePath)) {
        // Delete the file using the Storage facade
        return Storage::delete($filePath);
    }
    return false;
  }

  public function updateFile($oldFile, $file, $storageDerictory){
    $deleteFile = $this->deleteFile($storageDerictory.$oldFile);
    $uploadFile = $this->uploadFile($file, $storageDerictory);
    return $uploadFile;
  }
}
