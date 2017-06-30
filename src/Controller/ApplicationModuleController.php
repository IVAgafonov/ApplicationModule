<?php

namespace ApplicationModule\Controller;

use IVAgafonov\Controller\AbstractController;
use IVAgafonov\Controller\ControllerInterface;


class ApplicationModuleController extends AbstractController implements ControllerInterface
{
    public function index()
    {
        echo json_encode(['status' => 'ok', 'module' => 'ApplicationModule']);
    }
}