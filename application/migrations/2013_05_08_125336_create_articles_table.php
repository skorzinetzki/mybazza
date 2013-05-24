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
            'creditpoints' => 17,
            'category_id' => DB::table('categories')->where('name', '=', 'Jacken')->first()->id
        ));
        
        DB::table('articles')->insert(array(
            'name' => 'Jacke grün mit Applikation', 
            'description' => 'Grüne Jacke mit einer Applikation auf dem Rücken -PGA Tour 2013-',
            'condition_id' => 3,
            'maturity_id' => 4,
            'price' => 32.75,
            'creditpoints' => 14,
            'category_id' => 2
        ));
        
        DB::table('articles')->insert(array(
            'name' => 'Jacke rot -Ferrari-', 
            'description' => 'Rote Jacke mit Ferrari-Sticker vorn links.',
            'condition_id' => 4,
            'maturity_id' => 5,
            'price' => 20,
            'creditpoints' => 11,
            'category_id' => 2
        ));
        
        DB::table('articles')->insert(array(
            'name' => 'Jeans tiefblau mit 4 Taschen', 
            'description' => 'Jeans in tiefblau mit 4 Taschen, in Größe 92.',
            'condition_id' => 1,
            'maturity_id' => 1,
            'price' => 70,
            'creditpoints' => 14,
            'category_id' => 3
        ));
        
        DB::table('articles')->insert(array(
            'name' => 'Cordhose in braun', 
            'description' => 'Cordhose (fein) in braun, mit Aufnäher -Roadrunner- Größe 92.',
            'condition_id' => 1,
            'maturity_id' => 1,
            'price' => 50,
            'creditpoints' => 17,
            'category_id' => 3
        ));
        
        DB::table('articles')->insert(array(
            'name' => 'schicker Pullover für den Winter in grün', 
            'description' => 'schicker Pullover in grüne mit Aufdruck -old Taxi- vorn.',
            'condition_id' => 1,
            'maturity_id' => 1,
            'price' => 40,
            'creditpoints' => 18,
            'category_id' => 3
        ));
        
        DB::table('articles')->insert(array(
            'name' => 'süße Mädchenjacke in licht-rot', 
            'description' => 'süße Mädchenjacke in licht-rot, in Größe 98, mit Kaputze.',
            'condition_id' => 4,
            'maturity_id' => 2,
            'price' => 35,
            'creditpoints' => 14,
            'category_id' => 2
        ));
        
        DB::table('articles')->insert(array(
            'name' => 'Öko Kinder Canvas Hose in blau', 
            'description' => 'besonders schöne Öko Kinder Hose Canvas in blau, mit praktischen Taschen.',
            'condition_id' => 2,
            'maturity_id' => 4,
            'price' => 99,
            'creditpoints' => 18,
            'category_id' => 3
        ));
        
        DB::table('articles')->insert(array(
            'name' => 'moderner Kinder-Hoodie mit Bulli Aufdruck', 
            'description' => 'moderner Kinder-Hoodie mit VW Bulli Aufdruck, sehr cool und stylisch.',
            'condition_id' => 3,
            'maturity_id' => 5,
            'price' => 47.11,
            'creditpoints' => 6,
            'category_id' => 4
        ));
        
        DB::table('articles')->insert(array(
            'name' => 'Jacke blau gemustert für den Winter', 
            'description' => 'blau gemusterte Jacke für den Winter, schöner Schnitt für Jungen.',
            'condition_id' => 2,
            'maturity_id' => 3,
            'price' => 30,
            'creditpoints' => 12,
            'category_id' => 2
        ));
        
        DB::table('articles')->insert(array(
            'name' => 'kurze Hose für den Sommer', 
            'description' => 'schicke kurze Hose für den Sommer, Schnitt geeignet für Mädchen und Jungen, sandfarben.',
            'condition_id' => 3,
            'maturity_id' => 2,
            'price' => 25,
            'creditpoints' => 14,
            'category_id' => 3
        ));
        
        DB::table('articles')->insert(array(
            'name' => 'Converse Kinder Longsleeve', 
            'description' => 'Converse Kinder Longsleeve, weiter Schnitt, gute Qualität',
            'condition_id' => 2,
            'maturity_id' => 2,
            'price' => 22.50,
            'creditpoints' => 12,
            'category_id' => 4
        ));
        
        DB::table('articles')->insert(array(
            'name' => 'Kinder Softshell Jacke in rot', 
            'description' => 'Bequeme Kinder Softshell Jacke in rot, für Mädchen und Jungen geeignet.',
            'condition_id' => 3,
            'maturity_id' => 4,
            'price' => 45,
            'creditpoints' => 14,
            'category_id' => 2
        ));
        
        DB::table('articles')->insert(array(
            'name' => 'schwarz/weiß gestreifte Hose für Mädchen', 
            'description' => 'süße schwarz/weiß gestreifte Hose für Mädchen',
            'condition_id' => 1,
            'maturity_id' => 1,
            'price' => 21,
            'creditpoints' => 15,
            'category_id' => 3
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