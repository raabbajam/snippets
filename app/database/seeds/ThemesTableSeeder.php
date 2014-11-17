<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ThemesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$time = date("Y-m-d H:i:s",time());

		foreach(range(1, 10) as $index)
		{
			Theme::insert([
				['name' => 'default', 'alias' => 'Default', 'created_at' => $time,' updated_at' => $time],
				['name' => '3024-day', 'alias' => '3024 day', 'created_at' => $time,' updated_at' => $time],
				['name' => '3024-night', 'alias' => '3024 night', 'created_at' => $time,' updated_at' => $time],
				['name' => 'ambiance', 'alias' => 'Ambiance', 'created_at' => $time,' updated_at' => $time],
				['name' => 'base16-dark', 'alias' => 'Base16 dark', 'created_at' => $time,' updated_at' => $time],
				['name' => 'base16-light', 'alias' => 'Base16 light', 'created_at' => $time,' updated_at' => $time],
				['name' => 'blackboard', 'alias' => 'Blackboard', 'created_at' => $time,' updated_at' => $time],
				['name' => 'cobalt', 'alias' => 'Cobalt', 'created_at' => $time,' updated_at' => $time],
				['name' => 'eclipse', 'alias' => 'Eclipse', 'created_at' => $time,' updated_at' => $time],
				['name' => 'elegant', 'alias' => 'Elegant', 'created_at' => $time,' updated_at' => $time],
				['name' => 'erlang-dark', 'alias' => 'Erlang dark', 'created_at' => $time,' updated_at' => $time],
				['name' => 'lesser-dark', 'alias' => 'Lesser dark', 'created_at' => $time,' updated_at' => $time],
				['name' => 'mbo', 'alias' => 'Mbo', 'created_at' => $time,' updated_at' => $time],
				['name' => 'mdn-like', 'alias' => 'Mdn like', 'created_at' => $time,' updated_at' => $time],
				['name' => 'midnight', 'alias' => 'Midnight', 'created_at' => $time,' updated_at' => $time],
				['name' => 'monokai', 'alias' => 'Monokai', 'created_at' => $time,' updated_at' => $time],
				['name' => 'neat', 'alias' => 'Neat', 'created_at' => $time,' updated_at' => $time],
				['name' => 'neo', 'alias' => 'Neo', 'created_at' => $time,' updated_at' => $time],
				['name' => 'night', 'alias' => 'Night', 'created_at' => $time,' updated_at' => $time],
				['name' => 'paraiso-dark', 'alias' => 'Paraiso dark', 'created_at' => $time,' updated_at' => $time],
				['name' => 'paraiso-light', 'alias' => 'Paraiso light', 'created_at' => $time,' updated_at' => $time],
				['name' => 'pastel-on-dark', 'alias' => 'Pastel on dark', 'created_at' => $time,' updated_at' => $time],
				['name' => 'rubyblue', 'alias' => 'Rubyblue', 'created_at' => $time,' updated_at' => $time],
				['name' => 'solarized dark', 'alias' => 'Solarized Dark', 'created_at' => $time,' updated_at' => $time],
				['name' => 'solarized light', 'alias' => 'Solarized Light', 'created_at' => $time,' updated_at' => $time],
				['name' => 'the-matrix', 'alias' => 'The matrix', 'created_at' => $time,' updated_at' => $time],
				['name' => 'tomorrow-night-eighties', 'alias' => 'Tomorrow night eighties', 'created_at' => $time,' updated_at' => $time],
				['name' => 'twilight', 'alias' => 'Twilight', 'created_at' => $time,' updated_at' => $time],
				['name' => 'vibrant-ink', 'alias' => 'Vibrant ink', 'created_at' => $time,' updated_at' => $time],
				['name' => 'xq-dark', 'alias' => 'Xq dark', 'created_at' => $time,' updated_at' => $time],
				['name' => 'xq-light', 'alias' => 'Xq light', 'created_at' => $time,' updated_at' => $time],
			]);
		}
	}

}