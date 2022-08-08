<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasOne;

    class Recipes extends Model
    {
        use HasFactory;

        public $timestamps = false;

        protected $fillable = [
            'potion_id',
            'ingredient_id',
            'quantity',
        ];

        /**
         * @return HasOne
         */
        public function potion(): HasOne
        {
            return $this->hasOne(Potions::class, 'potion_id');
        }

        /**
         * @return HasOne
         */
        public function ingredient(): HasOne
        {
            return $this->hasOne(Ingredients::class, 'ingredient_id');
        }
    }
