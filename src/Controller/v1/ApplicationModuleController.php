<?php

namespace ApplicationModule\Controller\v1;

use IVAgafonov\Controller\AbstractController;
use IVAgafonov\Controller\ControllerInterface;

class ApplicationModuleController extends AbstractController implements ControllerInterface
{
    public function index()
    {
        echo json_encode(['status' => 'ok', 'module' => 'ApplicationModuleV1']);
    }
}