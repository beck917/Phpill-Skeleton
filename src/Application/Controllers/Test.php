<?php
/**
 * @author Beck Xu <beck917@gmail.com>
 * @date 2016-09-01
 * @copyright 足球魔方
 */
namespace Application\Controllers;
/**
 * Description of Test
 *
 * @author Beck Xu <beck917@gmail.com>
 */
class Test extends \Phpill\Libraries\Controller {
	public function test1()
	{
		//\Phpill\Helpers\Html::anchor("test");
		echo "test";  
		//$match_model = new \Application\Models\Match(); 
		//$match_model->getMatchId(6534);
		
		//echo \Modules\Core\Helpers\Common::getUUID();
		
		//$cache = \Phpill\Libraries\Cache::instance();
		//$cache->set("testabc_ph", "test2");
		
		//echo $cache->get("testabc_ph");

		//$log = new \Monolog\Logger('name');
		//$data = new \Monolog\Handler\StreamHandler(APPPATH.'Logs/app.log', \Monolog\Logger::WARNING);
		//$log->pushHandler($data); 
		//$log->addWarning('Foo');
		
		\Phpill\Modules\Core\Helpers\Common::crc32hex("test");
	}
	
	public function index()
	{
		echo "index";
	}
}
