<?php

namespace App\Services;

use App\User;
use Illuminate\Http\Request;
use App\Services\NotificationService as Notify;

class UserServices {

    static function assignMuseum(User $user)
    {
        $BAKAW = array('Gallery Down South', 'DatuBago Gallery', 'TheBauHaus', 'Davao Oriental Artist', 'Sining Mata', 'Kulit Kultura', 'Deanna Sipaco (DS) Foundation for the Differently-Abled, Inc.');
        $KULINTANG = array('Hini-GALA-ay', 'Studio One Art Iligan', 'Tinta Artist Iligan', 'Irinugyun Artist', 'Talaandig Soil Painters');
        $BALANGAY = array('Agusan Artist Association', 'Alampat Gallery', 'Lumbayao Artist Collective', 'The Gallery of the Peninsula & the Archipelago', 'Goodtimes Cafe');

        if(in_array($user->gallery, $BAKAW, True)){
            $user->tag('Bakaw');
        }else if(in_array($user->gallery, $KULINTANG, True)){
            $user->tag('Kulintang');
        }else if(in_array($user->gallery, $BALANGAY, True)){
            $user->tag('Balangay');
        }
    }

}
