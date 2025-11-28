<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipleUpload extends Model
{
    use HasFactory;

    protected $table = 'multipleuploads';

    protected $fillable = [
        'filename',
        'original_name',
        'ref_table',
        'ref_id'
    ];

    public function getFileUrlAttribute()
    {
        return asset('storage/uploads/' . $this->filename);
    }

    public function getIsImageAttribute()
    {
        $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];
        $extension = strtolower(pathinfo($this->filename, PATHINFO_EXTENSION));
        return in_array($extension, $imageExtensions);
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'ref_id', 'pelanggan_id')->where('ref_table', 'pelanggan');
    }
}
