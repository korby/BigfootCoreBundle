<?php

namespace Bigfoot\Bundle\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\ContainerAware;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Implements the main actions for the BackOffice.
 */
class CoreController extends ContainerAware
{
    /**
     * @Route("/", name="admin_home", options={"label"="Page d'accueil"})
     * @Template("::base.html.twig")
     */
    function homeAction()
    {
        return array();
    }
}
