<?php

namespace App\Modules\Management\TodaySellsManagement\TodaySells\Actions;

class StoreData
{
    static $model = \App\Modules\Management\TodaySellsManagement\TodaySells\Models\Model::class;

    public static function execute($request)
    {
        try {
            $requestData = $request->validated();

            $requestData['features'] = $requestData['features'] ?? [];
            $requestData['key_features'] = $requestData['key_features'] ?? [];
            // // dd($requestData['image_gallery_left']);
            // foreach ($requestData['image_gallery_left'] as $key => $single_data) {
            //     // dd($single_data);
            //     $currentDate = now()->format('Y/m');
            //     $requestData['image_gallery_left'][] = uploader($single_data, 'uploads/team/' . $currentDate);
            // }
            if ($request->hasFile('image_gallery_left')) {
                $image_gallery_left = $request->file('image_gallery_left');
                $currentDate = now()->format('Y/m');
                $storedImages = [];

                foreach ($image_gallery_left as $image) {
                    $storedImages[] = uploader($image, 'uploads/image_gallery_left/' . $currentDate);
                }
                $requestData['image_gallery_left'] = json_encode($storedImages);
                // $requestData['image_gallery_left'] = uploader($image_gallery_left, 'uploads/team/' . $currentDate);
            }

            
            if ($data = self::$model::query()->create($requestData)) {
                return messageResponse('Item added successfully', $data, 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}