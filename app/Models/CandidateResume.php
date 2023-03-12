<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateResume extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['file_size'];
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'city'];

    public function getFileSizeAttribute()
    {
        return get_file_size($this->file);
    }
}
