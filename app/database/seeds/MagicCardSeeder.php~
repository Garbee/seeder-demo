<?php

class MagicCardSeeder extends Seeder {
    public function run() {
        $data = json_decode(file_get_contents('http://mtgjson.com/json/AllSets.json'));
        foreach ($data as $set) {
            $this->command->info('Seeding: ' . $set->name);
            $magicSet = new MagicSet;
            $magicSet->name = $set->name;
            $magicSet->code = $set->code;
            $magicSet->release_date = $set->releaseDate;
            $magicSet->border = $set->border;
            $magicSet->type = $set->type;
            $magicSet->block = (isset($set->block) ?: null);
            $magicSet->save();
            foreach($set->cards as $card) {
                $magicCard = new MagicCard;
                //Check for if the item is avaialable in the json content. if so, return it (encoded where needed in case it is an array) or else set the value to null.
                $magicCard->layout = (isset($card->layout) ? $card->layout : null);
                $magicCard->name = (isset($card->name) ? $card->name : null);
                $magicCard->names = (isset($card->names) ? json_encode($card->names) : null);
                $magicCard->mana_cost = (isset($card->manaCost) ?$card->manaCost : null);
                $magicCard->converted_mana_cost = (isset($card->cmc) ? $card->cmc : null);
                $magicCard->colors = (isset($card->colors) ? json_encode($card->colors) : null);
                $magicCard->type = (isset($card->type) ? $card->type : null);
                $magicCard->supertypes = (isset($card->supertypes) ? json_encode($card->supertypes) : null);
                $magicCard->types = (isset($card->types) ? json_encode($card->types) : null);
                $magicCard->subtypes = (isset($card->subtypes) ? json_encode($card->subtypes) : null);
                $magicCard->rarity = (isset($card->rarity) ? $card->rarity : null);
                $magicCard->rules_text = (isset($card->text) ? $card->text : null);
                $magicCard->flavor_text = (isset($card->flavor) ? $card->flavor : null);
                $magicCard->artist = (isset($card->artist) ? $card->artist : null);
                $magicCard->number = (isset($card->number) ? $card->number : null);
                $magicCard->power = (isset($card->power) ? $card->power : null);
                $magicCard->toughness = (isset($card->toughness) ? $card->toughness : null);
                $magicCard->loyalty = (isset($card->loyalty) ? $card->loyalty : null);
                $magicCard->multiverseid = (isset($card->multiverseid) ? $card->multiverseid : null);
                $magicCard->variations = (isset($card->variations) ? json_encode($card->variations) : null);
                $magicCard->image_name = (isset($card->imageName) ? $card->imageName : null);
                $magicCard->watermark = (isset($card->watermark) ? $card->watermark : null);
                $magicCard->border = (isset($card->border) ? $card->border : null);
                $magicCard->hand = (isset($card->hand) ? $card->hand : null);
                $magicCard->life = (isset($card->life) ? $card->life : null);
                $magicCard->set()->associate($magicSet);
                $magicCard->save();
            }
        }
    }
}
