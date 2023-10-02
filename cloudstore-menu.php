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
    if (!is_null($primaryNavbar->getChild('Services'))) {
        $primaryNavbar->removeChild('Services');
    }
    if (!is_null($primaryNavbar->getChild('Domains'))) {
        $primaryNavbar->removeChild('Domains');
    }
    if (!is_null($primaryNavbar->getChild('Billing'))) {
        $primaryNavbar->removeChild('Billing');
    }
    if (!is_null($primaryNavbar->getChild('Support'))) {
        $primaryNavbar->removeChild('Support');
    }
    if (!is_null($primaryNavbar->getChild('Open Ticket'))) {
        $primaryNavbar->removeChild('Open Ticket');
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

add_hook('ClientAreaSecondarySidebar', 1, function(MenuItem $secondarySidebar)
{
     if (!is_null($secondarySidebar->getChild('Categories'))) {
        $secondarySidebar->removeChild('Categories');
    }
    $secondarySidebar->getChild('Actions')
        ->addChild('Commandez un serveur virtuel')
        ->setUri('/index.php?rp=/store/vps-100-africain')
        ->setOrder(50);
        ->addChild('Commandez un hébergement web')
        ->setUri('/index.php?rp=/store/shared-hosting-cpanle')
        ->setOrder(51);
        ->addChild('Accédez à un ticket')
        ->setUri('/supporttickets.php')
        ->setOrder(52);
        ->addChild('Accédez à mon espace client')
        ->setUri('/clientarea.php')
        ->setOrder(53);
        ->addChild('Payer une facture')
        ->setUri('/clientarea.php?action=invoices')
        ->setOrder(54);
        ->addChild("Voir l'état du réseau")
        ->setUri('/serverstatus.php')
        ->setOrder(55);
        ->addChild('Demander du support')
        ->setUri('/submitticket.php')
        ->setOrder(56);
        ->addChild('Nous contacter')
        ->setUri('/contact.php')
        ->setOrder(57);
});

?>