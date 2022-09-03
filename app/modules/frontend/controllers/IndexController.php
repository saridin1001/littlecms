<?php
declare(strict_types=1);

namespace Littlecms\Modules\Frontend\Controllers;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        
        #phpinfo();
        #die;
        $this->view->setLayout('ltelayout');
    }

}

