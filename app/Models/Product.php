<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tb_products';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
    	'productName',
    	'price',
    	'stock',
        'longDescription',
        'expiry_date',
        'created_by',
        'created_at',
        'updated_at',
    ];

    use HasFactory;


    protected static function getAllProducts()
    {
         $data = Product::all();
         return $data;
    }

    protected static function saveProduct($data)
    {
        // create
        $product = Product::create([
            'productName' => $data['productName'],
            'price' => $data['price'],
            'stock' => $data['stock'],
            'longDescription' => $data['longDescription'],
            'expiry_date' => $data['expiry_date']
        ]);
        // return id of created Product
        return $product->id;
    }

    protected static function getProductByID($id)
    {
        return  Product::find( $id );
    }

    protected static function getProductForUpdate($id)
    {
        return Product::select('id', 'productName', 'price', 'stock', 'longDescription', 'expiry_date')
                ->where('id', '=', $id)->first();
    }

    protected static function updateProduct($data, $id)
    {
        // get product by id
        $product = Product::getProductByID($id);

        // update
        $product->productName = $data['productName'];
        $product->price = $data['price'];
        $product->stock = $data['stock'];
        $product->longDescription = $data['longDescription'];
        $product->expiry_date = $data['expiry_date'];

        $product->save();

        return $product->id;
    }

    protected static function deleteProduct($id)
    {
        // get product by id
        $product = Product::getProductByID($id);
    
        $product->delete();
    }

}
