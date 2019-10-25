<?php


namespace App\domain\model;


use Illuminate\Database\Eloquent\Model;

class ContactUsMessage extends Model
{
    protected $table = 'contact_us_message';
    //position = user position
    protected $fillable = ['contact_us_messageid', 'name', 'surname', 'phone', 'email', 'message', 'position'];

    public function setPosition($position){
        $this->position = $position;
    }

}
