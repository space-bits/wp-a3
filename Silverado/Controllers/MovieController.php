<?php
namespace Silverado\Controllers;


use Silverado\Models\MovieModel;
use Silverado\Utils\HttpRequest;

class MovieController extends AbstractController
{

	protected $movies;

	public function __construct(HttpRequest $httpRequest, array $args)
	{


	}

	public function movie(HttpRequest $httpRequest, array $args)
	{

		$this->movies = MovieModel::getAll();
		$this->renderView('movie');

	}

}
