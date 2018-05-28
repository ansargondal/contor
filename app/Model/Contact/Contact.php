<?php

namespace contactin\Model\Contact;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = [
        'name', 'email', 'phone', 'user_id'
    ];

    protected $hidden = [
        'user_id'
    ];

}
