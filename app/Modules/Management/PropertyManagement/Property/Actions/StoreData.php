<?php

namespace App\Modules\Management\PropertyManagement\Property\Actions;

class StoreData
{
    static $model = \App\Modules\Management\PropertyManagement\Property\Models\Model::class;

    public static function execute($request)
    {
        try {
            $requestData = $request->validated();
            $requestData['facts_and_features'] = $requestData['facts_and_features'] ?? [];
            $requestData['amenities'] = $requestData['amenities'] ?? [];
            $requestData['floor_plan'] = $requestData['floor_plan'] ?? [];
            $requestData['floor_plan_details'] = $requestData['floor_plan_details'] ?? [];

            unset($requestData['gallery']);
            unset($requestData['banner_image']);
            // dd($requestData);

            // if ($request->hasFile('primary_image')) {
            //     $primary_image = $request->file('primary_image');
            //     $currentDate = now()->format('Y/m');
            //     $requestData['primary_image'] = uploader($primary_image, 'uploads/about/' . $currentDate);
            // }
            // if ($request->hasFile('secondery_image')) {
            //     $secondery_image = $request->file('secondery_image');
            //     $currentDate = now()->format('Y/m');
            //     $requestData['secondery_image'] = uploader($secondery_image, 'uploads/about/' . $currentDate);
            // }
            if ($data = self::$model::query()->create($requestData)) {
                return messageResponse('Item added successfully', $data, 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}