<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    public const PLANS = [
        "comboPlan6" => [
            "inr_price_id" => "price_1IjeJ3SAE3nPGOnvHbLVRnDy",
            "usd_price_id" => "price_1Ij5fASAE3nPGOnvz88Jc9Kq",
            "validity" => 1,
            "verifications" => 1000,
            "usd_price" => 6,
            "inr_price" => 450
        ],
        "comboPlan19" => [
            "inr_price_id" => "price_1IjeIOSAE3nPGOnv7yvSrdsU",
            "usd_price_id" => "price_1Ij5foSAE3nPGOnvlV8Rohic",
            "validity" => 3,
            "verifications" => 5000,
            "usd_price" => 19,
            "inr_price" => 1450
        ],
        "verificationTopup1000" => [
            "inr_price_id" => "price_1IjeMYSAE3nPGOnvYdD77IVd",
            "usd_price_id" => "price_1Ij5YpSAE3nPGOnvKvBpFpWV",
            "validity" => 0,
            "verifications" => 1000,
            "usd_price" => 4,
            "inr_price" => 300
        ],
        "verificationTopup5000" => [
            "inr_price_id" => "price_1IjeM2SAE3nPGOnvFcPv76w8",
            "usd_price_id" => "price_1Ij5ZmSAE3nPGOnv6S2iuMzq",
            "validity" => 0,
            "verifications" => 5000,
            "usd_price" => 14,
            "inr_price" => 1050
        ],
        "verificationTopup10000" => [
            "inr_price_id" => "price_1IjeLZSAE3nPGOnvQoBcrWds",
            "usd_price_id" => "price_1Ij5aqSAE3nPGOnvydOq5255",
            "validity" => 0,
            "verifications" => 10000,
            "usd_price" => 24,
            "inr_price" => 1800
        ],
        "validityTopup1Month" => [
            "inr_price_id" => "price_1IjeL3SAE3nPGOnvnVJlqFXu",
            "usd_price_id" => "price_1Ij5bmSAE3nPGOnvsR6xWGxP",
            "validity" => 1,
            "verifications" => 0,
            "usd_price" => 4,
            "inr_price" => 300
        ],
        "validityTopup3Months" => [
            "inr_price_id" => "price_1IjeKOSAE3nPGOnvuR3uZqnv",
            "usd_price_id" => "price_1Ij5dISAE3nPGOnv56dm2B4Q",
            "validity" => 3,
            "verifications" => 0,
            "usd_price" => 9,
            "inr_price" => 700
        ],
        "validityTopup6Months" => [
            "inr_price_id" => "price_1IjeJwSAE3nPGOnv9rarDazO",
            "usd_price_id" => "price_1Ij5djSAE3nPGOnvsa187tu4",
            "validity" => 6,
            "verifications" => 0,
            "usd_price" => 14,
            "inr_price" => 1050
        ],
    ];
}
