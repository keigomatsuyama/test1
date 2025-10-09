<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    protected $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'building',
        'content',
        'gender',
    ];
    public static $rules = array(
        'category_id' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required',
        'building' => 'nullable',
        'content' => 'required',
        'gender' => 'required',
    );
    public function getTitle()
    {
        return 'ID'.$this->id . ':' . $this->title;
    }
}
