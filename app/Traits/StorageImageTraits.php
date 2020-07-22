<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait StorageImageTraits
{
    public function uploadTrait($request, $fieldName, $folderName) {

        if($request->hasFile($fieldName)) {
            $file = $request->file($fieldName);
            $fileOriginalName = $file->getClientOriginalName();
            $fileHashName = md5(time()) . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs($folderName . '/' . Auth::user()->id, $fileHashName);
    
            $data = [
                'file_name' => $fileOriginalName,
                'file_path' =>  '/public/uploads/' . $filePath
            ];
    
            return $data;
        }

        return null;
    }

    public function uploadMultipleTrait($item, $folderName) {

        $file = $item;
        $fileOriginalName = $file->getClientOriginalName();
        $fileHashName = md5(time()) . '.' . $file->getClientOriginalExtension();
        $filePath = $file->storeAs($folderName . '/' . Auth::user()->id, $fileHashName);

        $data = [
            'file_name' => $fileOriginalName,
            'file_path' =>  '/public/uploads/' . $filePath
        ];

        return $data;
    }

}
