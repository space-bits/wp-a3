<?php
namespace Silverado\Controllers;


use Silverado\Models\MovieModel;


class MovieController extends AbstractController
{

	protected $movies;


	public function __construct($httpRequest = [], $args = [])
	{


	}


	public function movie($httpRequest = [], $args = [])
	{

		$this->movies = MovieModel::getAll();
		$this->renderView('movie');

	}

}
