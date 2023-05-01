<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class SpecialSection extends Model implements HasMedia
{
    use SoftDeletes;
    use MultiTenantModelTrait;
    use InteractsWithMedia;
    use HasFactory;

    public const STATUS_RADIO = [
        '0' => 'On',
        '1' => 'off',
    ];

    public const SECTION_PLACE_SELECT = [
        'choose' => 'why choose us?',
        'Services' => 'Our Services',
        'Step' => 'Step By Step?',
        'touch' => 'get in touch',
        'works' => 'Our latest work',
        'Portfolio' => 'Portfolio',
        'about' => 'About Our Company',
        'Contact' => 'Contact Form',
        'work' => 'Our  works',
        'principles'=>'principles',

    ];

    public $table = 'special_sections';

    protected $appends = [
        'image',
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
        'created_at',
        'place_id',
        'section_place',
        'status',
        'order',
        'short_description_en',
        'short_description_ar',
        'updated_at',
        'deleted_at',
        'team_id',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
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

    public function place()
    {
        return $this->belongsTo(Layaoutplace::class, 'place_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
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
}
