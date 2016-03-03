<?php namespace tesis;

use Illuminate\Database\Eloquent\Model;

class Tesis extends Model {

	protected $table = 'tesis';

	protected $fillable = ['title', 'dir', 'line', 'author', 'email', 'year', 'estado'];

	public function scopeTitulo($query, $titulo)
	{
		
		if (trim($titulo) != "") {
			$query->where('title', "LIKE", "%$titulo%");
		}
		
	}

	public function scopeLinea($query, $linea)
	{
		$lineas = config('options.lines');

		if ($linea != "" && isset($lineas[$linea])) {
			$query->where('line', '=', $linea);
		}
	}

}
