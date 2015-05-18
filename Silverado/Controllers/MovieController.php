<?php
namespace Silverado\Controllers;


use Silverado\Models\MovieModel;


class MovieController extends AbstractController
{

	protected $movies;


	public function __construct($args = [])
	{

	}

	public function movie($args = [])
	{

		$this->movies = MovieModel::getAll();
		$this->renderView('movie');

	}

}
