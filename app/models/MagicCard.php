<?php

class MagicCard extends Eloquent {
    protected $table = 'magic_cards';
    protected $guarded = ['id','created_at','updated_at'];

    public function set() {
        return $this->belongsTo('MagicSet', 'set_id');
    }


    public function setNamesAttribute($value) {
    	$this->attributes['names'] = (! empty($value)) ? json_encode($value) : '';
    }

    public function setColorsAttribute($value) {
    	$this->attributes['colors'] = (! empty($value)) ? json_encode($value) : '';
    }

    public function setSupertypesAttribute($value) {
    	$this->attributes['supertypes'] = (! empty($value)) ? json_encode($value) : '';
    }

    public function setTypesAttribute($value) {
    	$this->attributes['types'] = (! empty($value)) ? json_encode($value) : '';
    }

    public function setSubtypesAttribute($value) {
    	$this->attributes['subtypes'] = (! empty($value)) ? json_encode($value) : '';
    }

    public function setVariationsAttribute($value) {
    	$this->attributes['variations'] = (! empty($value)) ? json_encode($value) : '';
    }


    public function getNamesAttribute($value) {
    	return json_decode($value);
    }
    public function getColorsAttribute($value) {
    	return json_decode($value);
    }
    public function getSupertypessAttribute($value) {
    	return json_decode($value);
    }
    public function getTypesAttribute($value) {
    	return json_decode($value);
    }
    public function getSubtypesAttribute($value) {
    	return json_decode($value);
    }
    public function getVariationsAttribute($value) {
    	return json_decode($value);
    }

}
