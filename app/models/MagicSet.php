<?php

class MagicSet extends Eloquent {
    protected $table = 'magic_sets';

    public function cards() {
        // Return the relationship. Tell which model it relates to and what the identifying column is in that table.
        return $this->hasMany('MagicCards', 'set_id');
    }
}
