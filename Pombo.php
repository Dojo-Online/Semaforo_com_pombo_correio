<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

	class Pombo
	{
		private $post_it;
		
		public function __construct($post_it)
		{
			$this->post_it = $post_it;
			while ($post_it < 20) {
				echo "usuarios colam mensagens na mochila...<br/>";
				$post_it++;
				if ($post_it == 20) {
					echo "vigesimo usuario nao pode deixar pombo dormir...<br/>";
				}
			}
		}
	
		
			
		
	}
	
	
	class Usuario
	{
		private $site_a;
		private $site_b;
		
		public function __construct($site_a,$site_b)
		{
			$this->site_a = $site_a;
			$this->site_b = $site_b;
			while ($site_a == 20) {
				echo "pombo leva mensagem para o site b<br/>";
				$site_a++;
				if ($site_b == 20) {
					echo "site b envia devolta para o site a";
				}
			}
		}
		
		
			
		
	}
	
$pombo = new Pombo(0);
$usuario = new Usuario(20, 20);
	
	