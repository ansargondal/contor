<?php

namespace contactin\Model\Contact;

use contactin\Model\User;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = [
        'name', 'email', 'image_path', 'phone', 'user_id'
    ];

    protected $hidden = [
        'user_id'
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

}
