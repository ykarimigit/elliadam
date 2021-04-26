<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'sku','name','seo','description','keywords','price','buy_price','sell_price','supplier_id','category_id','categories',
        'brand_id','model_id','detail','image','vat','stock','stock_per_sale','stock_unit','barcode','width','height',
        'depth','weight','deci','is_discount','discount_type','discount_value','remittance_discount','is_new','is_vat_included',
        'is_sub_product','homepage','warranty_information','referral_information','currency','status','order','parasut_id',
    ];
    public $timestamps=false;
}
