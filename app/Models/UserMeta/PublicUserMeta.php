<?php

namespace App\Models\UserMeta;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicUserMeta extends Model
{
    use HasFactory;
    Protected $fillable = [
        'user_id',
        'role_id',
        'reg_no',
        'first_name',
        'last_name',
        'avatar',
        'phone',
        'address',
        'city',
        'state',
        'zip',
    ];
    /**
     * @return [type]
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
