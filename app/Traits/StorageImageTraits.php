<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

trait StorageImageTraits
{
    public function uploadTrait($request, $fieldName, $folderName)
    {

        if ($request->hasFile($fieldName)) {
            $file = $request->file($fieldName);
            $fileOriginalName = $file->getClientOriginalName();
            $fileHashName = Str::random(32) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs($folderName . '/' . Auth::user()->id, $fileHashName);

            $data = [
                'file_name' => $fileOriginalName,
                'file_path' =>  '/public/uploads/' . $filePath
            ];

            return $data;
        }

        return null;
    }

    public function uploadMultipleTrait($file, $folderName)
    {

        $fileOriginalName = $file->getClientOriginalName();
        $fileHashName = Str::random(32) . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs($folderName . '/' . Auth::user()->id, $fileHashName);

        $data = [
            'file_name' => $fileOriginalName,
            'file_path' =>  '/public/uploads/' . $filePath
        ];

        return $data;
    }

    public function unlinkImages($filePath)
    {
        try {
            $filePath = Str::substr($filePath, 1);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
