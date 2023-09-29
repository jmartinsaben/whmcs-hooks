<?php

use WHMCS\View\Menu\Item as MenuItem;

add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar)
{
    if (!is_null($primaryNavbar->getChild('Home'))) {
        $primaryNavbar->removeChild('Home');
    }
    if (!is_null($primaryNavbar->getChild('Store'))) {
        $primaryNavbar->removeChild('Store');
    }
    if (!is_null($primaryNavbar->getChild('Announcements'))) {
        $primaryNavbar->removeChild('Announcements');
    }
    if (!is_null($primaryNavbar->getChild('Knowledgebase'))) {
        $primaryNavbar->removeChild('Knowledgebase');
    }
    if (!is_null($primaryNavbar->getChild('Network Status'))) {
        $primaryNavbar->removeChild('Network Status');
    }
    if (!is_null($primaryNavbar->getChild('Contact Us'))) {
        $primaryNavbar->removeChild('Contact Us');
    }
    $primaryNavbar->addChild('NOM DE DOMAINE')
        ->setUri('/domainchecker.php')
        ->setOrder(1);
    $primaryNavbar->addChild('SERVEURS VIRTUELS')
        ->setUri('/index.php?rp=/store/vps-100-africain')
        ->setOrder(2);

    $primaryNavbar->addChild('HEBERGEMENT WEB')
        ->setUri('/index.php?rp=/store/shared-hosting-cpanle')
        ->setOrder(3);

});

add_hook('ClientAreaPrimarySidebar', 1, function(MenuItem $primarySidebar)
{
     if (!is_null($primarySidebar->getChild('Categories'))) {
        $primarySidebar->removeChild('Categories');
    }
});
?>