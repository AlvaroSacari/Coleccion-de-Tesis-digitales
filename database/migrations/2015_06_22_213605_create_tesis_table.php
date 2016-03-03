<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTesisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	
	public function up()
	{
		Schema::create('tesis', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('dir');
			$table->enum('line', [		'Sistemas Dinámicos',
										'Simulación',
										'Ingeniería de Software',
										'Inteligencia Artificial',
										'Ingeniería Web',
										'Telemática',
										'Sistemas de Información',
										'Ontologías',
										'Rizomas',
										'Seguridad Informática',
										'Gráficos por Computador',
										'Bio Informática',
										'Computación Cuántica',
										'Robótica',
										'Procesamiento digital de imágenes',
										'Geometría computacional',
										'Minería de datos',
										'Reconocimiento de patrones',
										'Criptografía',
										'Teoría de control',
										'Auditoría de Sistemas']);
			$table->string('author');
			$table->string('email')->unique();
			$table->string('year');
			$table->enum('estado', [	'verificado',
										'en_espera']);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tesis');
	}

}
