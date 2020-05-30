<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['original_name', 'extension'];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['url'];

    /**
     * Get the name attribute for the file.
     *
     * @return string
     */
    public function getNameAttribute()
    {
        return $this->attributes['id'].'.'.$this->attributes['extension'];
    }

    /**
     * Get the url attribute for the file.
     *
     * @return string
     */
    public function getUrlAttribute()
    {
        return url('images/'.$this->attributes['id']);
    }
}
