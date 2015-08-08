<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Entity\Categoria;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $em=$this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        $repo=$em->getRepository("Application\Entity\Categoria");
        $categ= new Categoria();
        $categ->setNome("Livros");
        $em->persist($categ);

        $em->flush();

        $categoria=$repo->findAll();
        return new ViewModel(array('categoria'=>$categoria));
    }
}
