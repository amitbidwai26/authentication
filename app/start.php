
<?php 

//echo '<br> in start php';

use Slim\Slim;
use Noodlehaus\config;



//echo '<br>after slim';

session_cache_limiter(false);
session_start();

ini_set('display_errors','On');
//echo '<br> after dislay error';
define('INC_ROOT', dirname(__DIR__));
//echo '<br>after INC root';

require INC_ROOT . "/vendor/autoload.php" ;

//echo "<br> after autoload.php";

$app = new Slim([
	'mode' => file_get_contents(INC_ROOT . '/mode.php')
	]);

$app->configureMode($app->config('mode'), function() 
			use($app){
					$app->config = config::load(INC_ROOT . "/app/config/{$app->mode}.php");
			}
	);


require 'database.php';

/*echo $app->config->get('db.driver')*/


//var_dump($app->config);
	
//echo $app-> config('mode');

/*
echo "<br> after new slim";
$app -> get('/test/:name' , function( $name ){
echo "<br> Hello {$name}!";
});
*/

?>



