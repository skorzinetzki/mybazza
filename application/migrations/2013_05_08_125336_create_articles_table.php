<?php

class Create_Articles_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            $table->text('description');
            $table->float('creditpoints');
            $table->integer('vendor_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->on_delete('restrict');            
        });
        
        DB::table('articles')->insert(array(
            'name' => 'Jacke "BlueShell"', 
            'description' => 'hellblaue Regen-Jacke mit einer dunkelblauen Muschel auf der Rückseite. Für Jungen.',
            'creditpoints' => 10,
            'category_id' => DB::table('categories')->where('name', '=', 'Jacken')->first()->id
        ));
        
        DB::table('articles')->insert(array(
            'name' => 'Jacke Lion', 
            'description' => 'Jungenjacke mit Löwenkopfabbild auf der Rückseite, gemustert.',
            'creditpoints' => 22,
            'category_id' => DB::table('categories')->where('name', '=', 'Jacken')->first()->id
        ));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}

}