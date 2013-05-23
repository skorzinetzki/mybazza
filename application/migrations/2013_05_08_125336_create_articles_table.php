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
            $table->integer('condition_id')->unsigned()->nullable();
            $table->foreign('condition_id')->references('id')->on('conditions')->on_delete('restrict'); 
            $table->integer('maturity_id')->unsigned()->nullable();
            $table->foreign('maturity_id')->references('id')->on('maturities')->on_delete('restrict'); 
            $table->float('price');
            $table->float('creditpoints');
            $table->integer('vendor_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->on_delete('restrict');            
        });
        
        DB::table('articles')->insert(array(
            'name' => 'Jacke "BlueShell"', 
            'description' => 'hellblaue Regen-Jacke mit einer dunkelblauen Muschel auf der Rückseite. Für Jungen.',
            'condition_id' => DB::table('conditions')->where('status', '=', 'well')->first()->id,
            'maturity_id' => DB::table('maturities')->where('age', '=', 'from 1 to 2 years')->first()->id,
            'price' => 22.50,
            'creditpoints' => 10,
            'category_id' => DB::table('categories')->where('name', '=', 'Jacken')->first()->id
        ));
        
        DB::table('articles')->insert(array(
            'name' => 'Jacke Lion', 
            'description' => 'Jungenjacke mit Löwenkopfabbild auf der Rückseite, gemustert.',
            'condition_id' => DB::table('conditions')->where('status', '=', 'unused')->first()->id,
            'maturity_id' => DB::table('maturities')->where('age', '=', 'less then 3 months')->first()->id,
            'price' => 32.75,
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