<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'This is desciption 1'
            ],
            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'This is desciption 2'
            ],
        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
