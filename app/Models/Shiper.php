<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shiper extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'shipers';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'brand_name', 'description', 'created_at', 'updated_at'];
}
