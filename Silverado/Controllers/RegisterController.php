<?php
namespace Silverado\Controllers;


use Silverado\Models\MovieModel;
use Silverado\Models\UserModel;
use Silverado\Utils\HttpRequest;


class RegisterController extends AbstractController
{


	public function __construct(HttpRequest $httpRequest, array $args)
	{


	}


	public function displayForm(HttpRequest $httpRequest, array $args)
	{

		$this->renderView('register');

	}


	public function validateRegistration(HttpRequest $httpRequest, array $args)
	{
					if((isset($httpRequest['regPass']) && isset($httpRequest['confPass'])) && (($httpRequest['confPass'] === $httpRequest['regPass']))) {
						if(isset($httpRequest['email'])) {
							$_SESSION['user']->email = $vars['email'];
						}
						if(isset($httpRequest['phone'])) {
							$_SESSION['user']->phone = $vars['phone'];
						}
						if(isset($httpRequest['firstname'])) {
							$_SESSION['user']->firstname = $vars['firstname'];
						}
						if(isset($http_request['lastname'])) {
							$_SESSION['user']->lastname = $vars['lastname'];
						} else {
							echo '<p> Failed to register. Passwords do not match.</p>';
							echo '<form method="POST" action="<?= getBaseUri(); ?>login" class="login-form">';
							echo '<input class="login" type="submit" value="Return">';
							echo '</form>';
						}
					}
	}



}
