<?php

class MagicCard extends Eloquent {
    protected $table = 'magic_cards';

    public function set() {
        return $this->belongsTo('MagicSet', 'set_id');
    }
}
