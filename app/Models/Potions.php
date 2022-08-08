<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;

    class Potions extends Model
    {
        use HasFactory;

        protected $fillable = [
            'name',
            'crafting_cost'
        ];

        protected $casts = [
            'created_at' => 'datetime:Y-m-d H:i:s',
            'updated_at' => 'datetime:Y-m-d H:i:s',
        ];

        /**
         * @return HasMany
         */
        public function recipes(): HasMany
        {
            return $this->hasMany(Recipes::class, 'potion_id', 'id');
        }
    }
