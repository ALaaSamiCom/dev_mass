<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Article extends Model implements HasMedia
{
    use SoftDeletes;
    use \Spatie\MediaLibrary\InteractsWithMedia;
    use HasFactory;

    public $table = 'articles';

    protected $appends = [
        'image', 'author_image',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'author_name_ar',
        'author_job_ar',
        'author_name_en',
        'author_job_en',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    protected function serializeDate(\DateTimeInterface $date)
    {
        return $date->format('D, d M Y H:i:s');
    }

    public function getImageAttribute()
    {
        $file = $this->getMedia('image')->last();
        if ($file) {
            $file->url = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview = $file->getUrl('preview');
        }

        return $file;
    }

    public function getTitleAttribute()
    {
        if (\App::getLocale() == 'en') {
            return $this->title_en;
        } else {
            return $this->title_ar;

        }
    }

    public function getDescriptionAttribute()
    {
        if (\App::getLocale() == 'en') {
            return $this->description_en;
        } else {
            return $this->description_ar;
        }
    }

    public function getAuthorNameAttribute()
    {
        if (\App::getLocale() == 'en') {
            return $this->author_name_en;
        } else {
            return $this->author_name_ar;
        }
    }
    public function getAuthorJobAttribute()
    {
        if (\App::getLocale() == 'en') {
            return $this->author_job_en;
        } else {
            return $this->author_job_ar;
        }
    }

}
