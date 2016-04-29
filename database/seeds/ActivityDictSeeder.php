<?php

use Illuminate\Database\Seeder;

class ActivityDictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

      DB::table('activity_dict')->insert([
                'activity'                    => 'Boxing',
                'activity_short_description'  => 'Boxing',
                'activity_long_description'   => 'Boxing',
                'status'                      => 1,
                'is_current'                  => 1,
      ]);

      DB::table('activity_dict')->insert([
                'activity'                    => 'Softball',
                'activity_short_description'  => 'Softball',
                'activity_long_description'   => 'Softball',
                'status'                      => 1,
                'is_current'                  => 1,
      ]);

      DB::table('activity_dict')->insert([
                'activity'                    => 'Athletics',
                'activity_short_description'  => 'Athletics',
                'activity_long_description'   => 'Athletics',
                'status'                      => 1,
                'is_current'                  => 1,
      ]);

      DB::table('activity_dict')->insert([
                'activity'                    => 'Walking',
                'activity_short_description'  => 'Walking',
                'activity_long_description'   => 'Walking',
                'status'                      => 1,
                'is_current'                  => 1,
      ]);

      DB::table('activity_dict')->insert([
                'activity'                    => 'Yoga',
                'activity_short_description'  => 'Yoga',
                'activity_long_description'   => 'Yoga',
                'status'                      => 1,
                'is_current'                  => 1,
      ]);

      DB::table('activity_dict')->insert([
                'activity'                    => 'Pilates',
                'activity_short_description'  => 'Pilates',
                'activity_long_description'   => 'Pilates',
                'status'                      => 1,
                'is_current'                  => 1,
      ]);

      DB::table('activity_dict')->insert([
                'activity'                    => 'Tennis',
                'activity_short_description'  => 'Tennis',
                'activity_long_description'   => 'Tennis',
                'status'                      => 1,
                'is_current'                  => 1,
      ]);

      DB::table('activity_dict')->insert([
                'activity'                    => 'Rounders',
                'activity_short_description'  => 'Rounders',
                'activity_long_description'   => 'Rounders',
                'status'                      => 1,
                'is_current'                  => 1,
      ]);

      DB::table('activity_dict')->insert([
                'activity'                    => 'American touch football',
                'activity_short_description'  => 'American touch football',
                'activity_long_description'   => 'American touch football',
                'status'                      => 1,
                'is_current'                  => 1,
      ]);

      DB::table('activity_dict')->insert([
                'activity'                    => 'Kabaddi',
                'activity_short_description'  => 'Kabaddi',
                'activity_long_description'   => 'Kabaddi',
                'status'                      => 1,
                'is_current'                  => 1,
      ]);

      DB::table('activity_dict')->insert([
                'activity'                    => 'Zumba',
                'activity_short_description'  => 'Zumba',
                'activity_long_description'   => 'Zumba',
                'status'                      => 1,
                'is_current'                  => 1,
      ]);

      DB::table('activity_dict')->insert([
                'activity'                    => 'Skipping',
                'activity_short_description'  => 'Skipping',
                'activity_long_description'   => 'Skipping',
                'status'                      => 1,
                'is_current'                  => 1,
      ]);

      DB::table('activity_dict')->insert([
                'activity'                    => 'Skipping',
                'activity_short_description'  => 'Skipping',
                'activity_long_description'   => 'Skipping',
                'status'                      => 1,
                'is_current'                  => 1,
      ]);

      DB::table('activity_dict')->insert([
                'activity'                    => 'Kickball',
                'activity_short_description'  => 'Kickball',
                'activity_long_description'   => 'Kickball',
                'status'                      => 1,
                'is_current'                  => 1,
      ]);

      DB::table('activity_dict')->insert([
                'activity'                    => 'Hula hooping',
                'activity_short_description'  => 'Hula hooping',
                'activity_long_description'   => 'Hula hooping',
                'status'                      => 1,
                'is_current'                  => 1,
      ]);

      DB::table('activity_dict')->insert([
                'activity'                    => 'Ultimate frisbee',
                'activity_short_description'  => 'Ultimate frisbee',
                'activity_long_description'   => 'Ultimate frisbee',
                'status'                      => 1,
                'is_current'                  => 1,
      ]);

      DB::table('activity_dict')->insert([
                'activity'                    => 'Dodgeball',
                'activity_short_description'  => 'Dodgeball',
                'activity_long_description'   => 'Dodgeball',
                'status'                      => 1,
                'is_current'                  => 1,
      ]);

      DB::table('activity_dict')->insert([
                'activity'                    => 'Juggling',
                'activity_short_description'  => 'Juggling',
                'activity_long_description'   => 'Juggling',
                'status'                      => 1,
                'is_current'                  => 1,
      ]);

      DB::table('activity_dict')->insert([
                'activity'                    => 'Tug of War',
                'activity_short_description'  => 'Tug of War',
                'activity_long_description'   => 'Tug of War',
                'status'                      => 1,
                'is_current'                  => 1,
      ]);

    }

}
