<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    // Video can also belongs to another model, that turns this into a polymorphic relationship

    /** @use HasFactory<\Database\Factories\VideoFactory> */
    use HasFactory;

    public function watchable()
    {
        return $this->morphTo();
    }
}
