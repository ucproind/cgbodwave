<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlansTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::connection('central')->statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::connection('central')->table('plans')->truncate();
        DB::connection('central')->statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::connection('central')->table('plans')->insert([
            [
                'name' => 'Basic',
                'description' => 'Access all basic features.',
                'features' => json_encode([
                    'basic_feature_1',
                    'basic_feature_2',
                    'basic_feature_3',
                ]),
                'default' => false,
                'monthly_price' => 5,
                'yearly_price' => 50,
                'monthly_price_id' => 'dummy_basic_monthly_id',
                'yearly_price_id' => 'dummy_basic_yearly_id',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Premium',
                'description' => 'Access premium features.',
                'features' => json_encode([
                    'premium_feature_1',
                    'premium_feature_2',
                    'premium_feature_3',
                ]),
                'default' => true,
                'monthly_price' => 8,
                'yearly_price' => 80,
                'monthly_price_id' => 'dummy_premium_monthly_id',
                'yearly_price_id' => 'dummy_premium_yearly_id',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pro',
                'description' => 'Access pro features.',
                'features' => json_encode([
                    'pro_feature_1',
                    'pro_feature_2',
                    'pro_feature_3',
                ]),
                'default' => false,
                'monthly_price' => 12,
                'yearly_price' => 120,
                'monthly_price_id' => 'dummy_pro_monthly_id',
                'yearly_price_id' => 'dummy_pro_yearly_id',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
