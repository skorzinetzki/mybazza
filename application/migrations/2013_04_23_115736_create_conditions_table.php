<?php

class Create_Conditions_Table {

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up() {
        Schema::create('conditions', function($table) {
                    $table->engine = 'InnoDB';
                    $table->increments('id');
                    $table->string('status');
                    $table->integer('factor')->unsigned();
                });

        DB::table('conditions')->insert(array(
            'status' => 'unused',
            'factor' => 5
        ));

        DB::table('conditions')->insert(array(
            'status' => 'undamaged',
            'factor' => 4
        ));

        DB::table('conditions')->insert(array(
            'status' => 'well',
            'factor' => 3
        ));

        DB::table('conditions')->insert(array(
            'status' => 'damaged',
            'factor' => 1
        ));

        DB::table('conditions')->insert(array(
            'status' => 'poor',
            'factor' => 0
        ));
    }

    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down() {
        Schema::drop('conditions');
    }

}

?>
