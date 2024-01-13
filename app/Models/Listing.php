<?php

namespace App\Models;

/**
 * Listings model
 */
class Listing
{
    /**
     * return all listings
     *
     * @return array
     */
    public static function all()
    {
        return [
            [
                'id' => 1
            ],
            [
                'id' => 2
            ],
            [
                'id' => 3
            ]
        ];
    }

    /**
     * find a specific listing
     *
     * @param integer $id
     * @return array
     */
    public static function find(int $id)
    {
        $listings = self::all();
        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}