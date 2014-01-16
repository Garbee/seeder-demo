<?php

class MagicCardSeeder extends Seeder {
    public function run() {
        $data = json_decode(file_get_contents('http://mtgjson.com/json/AllSets.json'));
        foreach ($data as $set) {
            $this->command->info('Seeding: ' . $set->name);
            $setData = $this->normalizeSetData($set);
            unset($setData['cards']);
            $magicSet = MagicSet::create($setData);
            foreach($set->cards as $card) {
                $cardData = $this->normalizeCardData($card, $magicSet);
               // Log::info('Card info', $cardData);
                $magicCard = new MagicCard($cardData);
                $magicCard->save();
            }
        }
    }

    protected function normalizeSetData($set) {
        $arr = [];
        foreach ($set as $key => $value) {
            $arr[snake_case($key)] = $value;
        }
        return $arr;
    }

    protected function normalizeCardData($card, $magicSet) {
        $arr = [];
        foreach($card as $key => $value) {
            $arr[snake_case($key)] = $value;
        }
        $arr['set_id'] = $magicSet->id;
        return $arr;
    }
}
