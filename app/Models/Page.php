<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Page extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;
    use HasFactory;

    public const LAYOUT_RADIO = [
        // '0' => 'realestate&tourism',
        // '1' => 'studentServices',
        // '2' => 'contactus',
    ];

    public $table = 'pages';

    protected $appends = [
        'image',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'keywords_en',
        'keywords_ar',
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'short_description_en',
        'short_description_ar',
        'page_title',
        'layout',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function stepItemItems()
    {
        return $this->hasMany(Item::class, 'step_item_id', 'id');
    }

    public function getImageAttribute()
    {
        $file = $this->getMedia('image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
    
    public function getTitleAttribute(){
        if(\App::getLocale() == 'en'){
            return $this->title_en;
        }else{
            return $this->title_ar;

        }
    }
    public function getDescriptionAttribute(){
        if(\App::getLocale() == 'en'){
            return $this->description_en;
        }else{
            return $this->description_ar;
        }
    }

    public function getshortDescriptionAttribute(){
        if(\App::getLocale() == 'en'){
            return $this->short_description_en;
        }else{
            return $this->short_description_ar;
        }
    }

    public function getKeywordsAttribute(){
        if(\App::getLocale() == 'en'){
            return $this->keywords_en;
        }else{
            return $this->keywords_ar;
        }
        
    }
}
