<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Tutorial\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Tutorial\Models;

class BlogController extends AbstractActionController
{
    public function postAction()
    {
        //$pdm = new Models\PostDataMapper();
        $pdm = $this->getServiceLocator()->get('PostDataMapper');
        $pim = $this->getServiceLocator()->get('PostIdentityMap');
        echo nl2br(print_r($pim))."<br>";

        $postId = $this->getEvent()->getRouteMatch()->getParam('postId');
        echo "get postId = ".$postId."<br>";

        return new ViewModel();
    }
}
