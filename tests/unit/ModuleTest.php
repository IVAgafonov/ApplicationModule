<?php
namespace Tests\unit;


use function GuzzleHttp\Psr7\try_fopen;

class ModuleTest extends \Codeception\Test\Unit
{
    /**
     * @var \Tests\
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testInitWithoutPath()
    {

        require_once __DIR__.'/../../vendor/autoload.php';

        $_SERVER = [];
        $config = [];
        \IVAgafonov\System\Application::$config = [];
        $config = array_merge_recursive($config, include __DIR__.'/../../config/ApplicationConfig.php');
        $config = array_merge_recursive($config, include __DIR__.'/../../config/ModuleConfig.php');

        $this->expectOutputString('{"status":"ok","module":"ApplicationModule"}');
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('{"error":{"code":10,"text":"Router: Empty path info"}}');

        try {
            \IVAgafonov\System\Application::init($config);
            \IVAgafonov\System\Application::run('ApplicationModule');
        } catch (\Exception $ex) {
            session_destroy();
            throw $ex;
        }
    }

    public function testInitWithPath()
    {

        require_once __DIR__.'/../../vendor/autoload.php';

        $_SERVER['PATH_INFO'] = 'api/v1/application-module/index';
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $config = [];
        \IVAgafonov\System\Application::$config = [];
        $config = array_merge_recursive($config, include __DIR__.'/../../config/ApplicationConfig.php');
        $config = array_merge_recursive($config, include __DIR__.'/../../config/ModuleConfig.php');

        $this->expectOutputString('{"status":"ok","module":"ApplicationModule"}{"status":"ok","module":"ApplicationModuleV1"}');

        \IVAgafonov\System\Application::init($config);
        \IVAgafonov\System\Application::run('ApplicationModule');
        session_destroy();
    }
}