<?php

class Create_Categories_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->unique();
            $table->timestamps();
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->on_delete('restrict');            
        });
        
        $id = DB::table('categories')->insert_get_id(array('name' => 'Kleidung'));
        DB::table('categories')->insert(array('name' => 'Jacken', 'category_id' => $id));
        DB::table('categories')->insert(array('name' => 'Hosen', 'category_id' => $id));
        DB::table('categories')->insert(array('name' => 'Pullover', 'category_id' => $id));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categories');
	}

}