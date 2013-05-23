<?php

class Create_Maturities_Table {

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up() {
        Schema::create('maturities', function($table) {
                    $table->engine = 'InnoDB';
                    $table->increments('id');
                    $table->string('age');
                    $table->integer('factor')->unsigned();
                });

        DB::table('maturities')->insert(array(
            'age' => 'less then 3 months',
            'factor' => 5
        ));

        DB::table('maturities')->insert(array(
            'age' => 'from 3 to 6 months',
            'factor' => 4
        ));

        DB::table('maturities')->insert(array(
            'age' => 'from 6 months to 1 year',
            'factor' => 3
        ));

        DB::table('maturities')->insert(array(
            'age' => 'from 1 to 2 years',
            'factor' => 1
        ));

        DB::table('maturities')->insert(array(
            'age' => 'older than 2 years',
            'factor' => 0
        ));
    }

    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down() {
        Schema::drop('maturities');
    }

}