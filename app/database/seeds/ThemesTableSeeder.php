<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ThemesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Theme::insert([
				['name' => 'default', 'alias' => 'Default'],
				['name' => '3024-day', 'alias' => '3024 day'],
				['name' => '3024-night', 'alias' => '3024 night'],
				['name' => 'ambiance', 'alias' => 'Ambiance'],
				['name' => 'base16-dark', 'alias' => 'Base16 dark'],
				['name' => 'base16-light', 'alias' => 'Base16 light'],
				['name' => 'blackboard', 'alias' => 'Blackboard'],
				['name' => 'cobalt', 'alias' => 'Cobalt'],
				['name' => 'eclipse', 'alias' => 'Eclipse'],
				['name' => 'elegant', 'alias' => 'Elegant'],
				['name' => 'erlang-dark', 'alias' => 'Erlang dark'],
				['name' => 'lesser-dark', 'alias' => 'Lesser dark'],
				['name' => 'mbo', 'alias' => 'Mbo'],
				['name' => 'mdn-like', 'alias' => 'Mdn like'],
				['name' => 'midnight', 'alias' => 'Midnight'],
				['name' => 'monokai', 'alias' => 'Monokai'],
				['name' => 'neat', 'alias' => 'Neat'],
				['name' => 'neo', 'alias' => 'Neo'],
				['name' => 'night', 'alias' => 'Night'],
				['name' => 'paraiso-dark', 'alias' => 'Paraiso dark'],
				['name' => 'paraiso-light', 'alias' => 'Paraiso light'],
				['name' => 'pastel-on-dark', 'alias' => 'Pastel on dark'],
				['name' => 'rubyblue', 'alias' => 'Rubyblue'],
				['name' => 'solarized dark', 'alias' => 'Solarized Dark'],
				['name' => 'solarized light', 'alias' => 'Solarized Light'],
				['name' => 'the-matrix', 'alias' => 'The matrix'],
				['name' => 'tomorrow-night-eighties', 'alias' => 'Tomorrow night eighties'],
				['name' => 'twilight', 'alias' => 'Twilight'],
				['name' => 'vibrant-ink', 'alias' => 'Vibrant ink'],
				['name' => 'xq-dark', 'alias' => 'Xq dark'],
				['name' => 'xq-light', 'alias' => 'Xq light'],
			]);
		}
	}

}