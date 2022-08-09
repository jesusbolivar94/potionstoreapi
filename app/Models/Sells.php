<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;

    class Sells extends Model
    {
        use HasFactory;

        public $timestamps = false;

        protected $fillable = [
            'client_id',
            'sell_at',
            'created_at'
        ];

        protected $casts = [
            'created_at' => 'datetime:Y-m-d H:i:s'
        ];

        /**
         * @return HasMany
         */
        public function items(): HasMany
        {
            return $this->hasMany(SellsItems::class, 'sell_id', 'id');
        }

        /**
         * @return HasOne
         */
        public function client(): HasOne
        {
            return $this->hasOne(Clients::class, 'client_id');
        }
    }
