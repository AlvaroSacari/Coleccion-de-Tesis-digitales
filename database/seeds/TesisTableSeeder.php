<?php

use Illuminate\Database\Seeder;

//
// Tesis recuperadas de:
// http://materias.fi.uba.ar/7500/
//

class TesisTableSeeder extends Seeder {

	public function run()
	{
		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Aprendizaje Automatico Basado en Intercambio de Operadores en Sistemas Inteligentes Autonomos',
			'dir'		=>'http://www.fi.uba.ar/laboratorios/lsi/maceri-tesisingenieriainformatica.pdf',
			'line'		=>'Inteligencia Artificial',
			'author'	=>'Ing. Pablo Maceri',
			'email'		=>'pablo.maceri@test.com',
			'year'		=>'2001',
			'estado'	=>'verificado'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Algoritmos TDIDT aplicados a la Mineria de Datos Inteligente',
			'dir'		=>'http://www.fi.uba.ar/laboratorios/lsi/servente-tesisingenieriainformatica.pdf',
			'line'		=>'Minería de datos',
			'author'	=>'Ing. Magdalena Servente',
			'email'		=>'magdalena.servente@test.com',
			'year'		=>'2002',
			'estado'	=>'verificado'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>' 	Generación Automática de Redes Neuronales con Ajuste de Parámetros Basado en Algoritmos Genéticos',
			'dir'		=>'http://www.fi.uba.ar/laboratorios/lsi/fiszelew-tesisingenieriainformatica.pdf',
			'line'		=>'Inteligencia Artificial',
			'author'	=>'Ing. Abel Fiszelew',
			'email'		=>'abel.fiszelew@test.com',
			'year'		=>'2002',
			'estado'	=>'verificado'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Algoritmos Genéticos Aplicados a la Categorización Automática de Documentos',
			'dir'		=>'http://www.fi.uba.ar/laboratorios/lsi/yolis-tesisingenieriainformatica.pdf',
			'line'		=>'Inteligencia Artificial',
			'author'	=>'Ing. Eugenio Yolis',
			'email'		=>'eugenio.yolis@test.com',
			'year'		=>'2003',
			'estado'	=>'verificado'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Detección de Fraude en Telefonía Celular usando Redes Neuronales',
			'dir'		=>'http://www.fi.uba.ar/laboratorios/lsi/grosser-tesisingenieriainformatica.pdf',
			'line'		=>'Inteligencia Artificial',
			'author'	=>'Ing. Hernán Grosser',
			'email'		=>'hernan.grosser@test.com',
			'year'		=>'2004',
			'estado'	=>'verificado'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Diseño de Una Metodología Agil de Desarrollo de Software ',
			'dir'		=>'http://materias.fi.uba.ar/7500/schenone-tesisdegradoingenieriainformatica.pdf',
			'line'		=>'Ingeniería de Software',
			'author'	=>'Ing. Marcelo H. Schenone ',
			'email'		=>'marcelo.schenone@test.com',
			'year'		=>'2004',
			'estado'	=>'verificado'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Metodología para el Aseguramiento de Entornos Informatizados ',
			'dir'		=>'http://materias.fi.uba.ar/7500/bisogno-tesisdegradoingenieriainformatica.pdf',
			'line'		=>'Seguridad Informática',
			'author'	=>'Ing. María Victoria Bisogno ',
			'email'		=>'maria.victoria.bisogno@test.com',
			'year'		=>'2005',
			'estado'	=>'verificado'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Data Mining Utilizando Redes Neuronales ',
			'dir'		=>'http://materias.fi.uba.ar/7500/bot-tesisdegradoingenieriainformatica.pdf',
			'line'		=>'Minería de datos',
			'author'	=>'Ing. Romina Laura Bot ',
			'email'		=>'romina.laura.bot@test.com',
			'year'		=>'2005',
			'estado'	=>'verificado'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Un Método de Ponderación de Planes en Sistemas Inteligentes Autónomos ',
			'dir'		=>'http://materias.fi.uba.ar/7500/lopez-tesisingenieriainformatica.pdf',
			'line'		=>'Sistemas de Información',
			'author'	=>'Ing. David López ',
			'email'		=>'david.lopez@test.com',
			'year'		=>'2005',
			'estado'	=>'verificado'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Entrenamiento de Redes Neuronales basado en Algortimos Evolutivos',
			'dir'		=>'http://materias.fi.uba.ar/7500/bertona-tesisingenieriainformatica.pdf',
			'line'		=>'Inteligencia Artificial',
			'author'	=>'Ing. Federico Bertona ',
			'email'		=>'federico.bertona@test.com',
			'year'		=>'2005',
			'estado'	=>'verificado'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Sistemas Inteligentes para el Modelado del Tutor ',
			'dir'		=>'http://materias.fi.uba.ar/7500/Salgueiro-tesisingenieriainformatica.pdf',
			'line'		=>'Inteligencia Artificial',
			'author'	=>'Ing. Fernando Salgueiro ',
			'email'		=>'fernando.salguueiro@test.com',
			'year'		=>'2005',
			'estado'	=>'verificado'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>' Patrones de Diseño de Arquitecturas de Software Enterprise ',
			'dir'		=>'http://materias.fi.uba.ar/7500/montaldo-tesisdegradoingenieriainformatica.pdf',
			'line'		=>'Reconocimiento de patrones',
			'author'	=>'Ing. Diego Montaldo ',
			'email'		=>'diego.montaldo@test.com',
			'year'		=>'2005',
			'estado'	=>'verificado'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Diseño y Prototipo de Middleware Basado en CORBA para el bus CAN ',
			'dir'		=>'http://materias.fi.uba.ar/7500/rouaux-tesisingenieriainformatica.pdf',
			'line'		=>'Ingenieria Web',
			'author'	=>'Ing. Martín Rouaux ',
			'email'		=>'martin.rouaux@test.com',
			'year'		=>'2006',
			'estado'	=>'verificado'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Hacia una Mejor Experiencia de Debugging en Desarrollos AOP',
			'dir'		=>'http://materias.fi.uba.ar/7500/eidelman-tesisdegradoingenieriainformatica.pdf',
			'line'		=>'Ingenieria Web',
			'author'	=>'Ing. Adrián Eidelman ',
			'email'		=>'adrian.edelman@test.com',
			'year'		=>'2006',
			'estado'	=>'en_espera'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Un Framework para la Visualización de Patrones de Diseño Distribuidos y Concurrentes Implementados con Programación Orientada a Aspectos:ACVF (Aspectual Component Visualization Framework) ',
			'dir'		=>'http://materias.fi.uba.ar/7500/erdody-tesisdegradoingenieriainformatica.pdf',
			'line'		=>'Ingenieria Web',
			'author'	=>'Ing. Diego Erdödy',
			'email'		=>'diego.erdody@test.com',
			'year'		=>'2006',
			'estado'	=>'en_espera'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Sistemas de eVote. Verificabilidad del Voto Electrónico',
			'dir'		=>'http://materias.fi.uba.ar/7500/obremski-tesisdegradoingenieriainformatica.pdf',
			'line'		=>'Ingenieria Web',
			'author'	=>'Ing. Damián Obremski ',
			'email'		=>'damian.obremski@test.com',
			'year'		=>'2006',
			'estado'	=>'en_espera'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Integración de Algoritmos de Inducción y Agrupamiento. Estudio del Comportamiento',
			'dir'		=>'http://materias.fi.uba.ar/7500/kogan-tesisingenieriainformatica.pdf',
			'line'		=>'Simulación',
			'author'	=>'Ing. Ariel Kogan Zahavi ',
			'email'		=>'ariel.kogan.zahavi@test.com',
			'year'		=>'2007',
			'estado'	=>'en_espera'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Tomografía de Internet',
			'dir'		=>'http://materias.fi.uba.ar/7500/zylberberg-tesisdegradoingenieriainformatica.pdf',
			'line'		=>'Ingenieria Web',
			'author'	=>'Ing. Alejandro Zylberberg',
			'email'		=>'alejandro.zylberberg@test.com',
			'year'		=>'2007',
			'estado'	=>'en_espera'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Mecanismos de Valoración de Reputación en Sistemas Multiagentes. Una arquitectura Flexible',
			'dir'		=>'http://materias.fi.uba.ar/7500/podberezski-tesisingenieriainformatica.pdf',
			'line'		=>'Ingeniería de Software',
			'author'	=>'Ing. Victor Podberezski',
			'email'		=>'victor.podberezski@test.com',
			'year'		=>'2007',
			'estado'	=>'en_espera'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Utilización de Programación Orientada a Aspectos en Aplicaciones Enterprise',
			'dir'		=>'http://materias.fi.uba.ar/7500/paez-tesisdegradoingenieriainformatica.pdf',
			'line'		=>'Ingeniería de Software',
			'author'	=>'Ing. Nicolas Paez',
			'email'		=>'nicolas.paez@test.com',
			'year'		=>'2007',
			'estado'	=>'en_espera'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Visualización de Escenas 3D Fotorealistas mediante Hardware Gráfico Programable',
			'dir'		=>'http://materias.fi.uba.ar/7500/marino-tesisingenieriainformatica.pdf',
			'line'		=>'Geometría computacional',
			'author'	=>'Ing. Federico Marino',
			'email'		=>'federico.marino@test.com',
			'year'		=>'2007',
			'estado'	=>'en_espera'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Un modelo integrado de dependencias. Documentación de arquitectura más allá de las vistas.',
			'dir'		=>'http://materias.fi.uba.ar/7500/fontdevilla-tesisingenieriainformatica.pdf',
			'line'		=>'Ingeniería de Software',
			'author'	=>'Ing. Diego Fontdevilla',
			'email'		=>'diego.fontdevilla@test.com',
			'year'		=>'2007',
			'estado'	=>'en_espera'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Un Ambiente Integrado de Clasificación, Selección y Ponderación de Reglas Basado en Sistemas Inteligentes',
			'dir'		=>'http://materias.fi.uba.ar/7500/schulz-tesisingenieriainformatica.pdf',
			'line'		=>'Inteligencia Artificial',
			'author'	=>'Ing. Gastón Schulz',
			'email'		=>'gaston.schulz@test.com',
			'year'		=>'2008',
			'estado'	=>'en_espera'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Identificación de Hábitos de Uso de Sitios Web Utilizando Redes Neuronales',
			'dir'		=>'http://materias.fi.uba.ar/7500/martinelli-tesisingenieriainformatica.pdf',
			'line'		=>'Ingenieria Web',
			'author'	=>'Ing. Damian Martinelli ',
			'email'		=>'damian.martinelli@test.com',
			'year'		=>'2008',
			'estado'	=>'en_espera'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Plataformas de Desarrollo de Aplicaciones Web orientadas a Componentes Reutilizables',
			'dir'		=>'http://materias.fi.uba.ar/7500/blanco-tesisingenieriainformatica.pdf',
			'line'		=>'Ingenieria Web',
			'author'	=>'Ing. Ignacio Blanco',
			'email'		=>'ignacio.blanco@test.com',
			'year'		=>'2008',
			'estado'	=>'en_espera'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Aplicación de la Teoría de Agentes al Modelo de Grafos para la Detección de Patrones en Textos ',
			'dir'		=>'http://materias.fi.uba.ar/7500/federico-tesisdegradoingenieriainformatica.pdf',
			'line'		=>'Reconocimiento de patrones',
			'author'	=>'Ing. Fernando Federico',
			'email'		=>'fernando.federico@test.com',
			'year'		=>'2008',
			'estado'	=>'en_espera'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Un Modelo de Reglas de Asociación Espacio-Temporales',
			'dir'		=>'http://materias.fi.uba.ar/7500/kohan-tesisingenieriainformatica.pdf',
			'line'		=>'Teoría de control',
			'author'	=>'Ing. Mariano Kohan',
			'email'		=>'mariano.kohan@test.com',
			'year'		=>'2008',
			'estado'	=>'en_espera'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Visualización de Redes Complejas',
			'dir'		=>'http://materias.fi.uba.ar/7500/beiro-tesisingenieriainformatica.pdf',
			'line'		=>'Reconocimiento de patrones',
			'author'	=>'Ing. Mariano Beiró',
			'email'		=>'mariano.beiro@test.com',
			'year'		=>'2008',
			'estado'	=>'en_espera'
		));

		\DB::Table('tesis')->insert(array(
			
			'title'		=>'Abstracción en el Desarrollo de Software Independiente de la Plataforma',
			'dir'		=>'http://materias.fi.uba.ar/7500/zavolinsky-tesisdegradoingenieriainformatica.pdf',
			'line'		=>'Ingeniería de Software',
			'author'	=>'Ing. Patricio Zavolinsky',
			'email'		=>'patricio.zavolinsky@test.com',
			'year'		=>'2008',
			'estado'	=>'en_espera'
		));
	}
}

//
// Tesis recuperadas de:
// http://materias.fi.uba.ar/7500/
//


