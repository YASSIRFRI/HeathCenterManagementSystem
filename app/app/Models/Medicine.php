<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Medicines';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Name',
        'Manufacturer',
        'TherapeuticClass',
        'StockQuantity',
        'UnitPrice',
        'ExpiryDate',
        'Description',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'StockQuantity' => 'integer',
        'UnitPrice' => 'decimal:2',
        'ExpiryDate' => 'date',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['ExpiryDate'];

    /**
     * Get the URL to the medicine's image.
     *
     * @return string
     */
    public function getImageUrlAttribute()
    {
        // Assuming you are storing your images in the 'public/medicines' directory
        // and you have run 'php artisan storage:link'
        // Replace 'default.png' with your actual default image name if necessary
        $imageName = $this->Name . '.png';
        $imagePath = public_path('medicines/' . $imageName);

        return file_exists($imagePath) ? asset('medicines/' . $imageName) : asset('medicines/default.png');
    }
}
