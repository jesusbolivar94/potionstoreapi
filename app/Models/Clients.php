<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasMany;

    class Clients extends Model
    {
        use HasFactory;

        protected $fillable = [
            'client_name',
        ];

        protected $casts = [
            'last_purcharse_at' => 'datetime:Y-m-d H:i:s',
            'created_at' => 'datetime:Y-m-d H:i:s',
            'updated_at' => 'datetime:Y-m-d H:i:s',
        ];

        /**
         * @return HasMany
         */
        public function sells(): HasMany
        {
            return $this->hasMany(Sells::class, 'client_id', 'id');
        }
    }
