<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasOne;

    class SellsItems extends Model
    {
        use HasFactory;

        protected $fillable = [
            'sell_id',
            'potion_id',
            'quantity'
        ];

        protected $casts = [
            'created_at' => 'datetime:Y-m-d H:i:s',
            'updated_at' => 'datetime:Y-m-d H:i:s',
        ];

        /**
         * @return HasOne
         */
        public function sell(): HasOne
        {
            return $this->hasOne(Sells::class, 'sell_id');
        }

    }
