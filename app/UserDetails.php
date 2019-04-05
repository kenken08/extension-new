<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $table= 'users_details';

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function user_id()
    {
        $user = DB::table('users')->orderBy('id',"DESC")->take(1)->value('id');

        return $user;
    }

    public function role()
    {
        $user = 'regular';

        return $user;
    }

    public function avatar()
    {
        $avatar = file_get_contents(storage_path('app/public/noimage/blobnoimage.txt'));

        return $avatar;
    }
}
