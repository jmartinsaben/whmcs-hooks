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
    $secondarySidebar->addChild('Aide', array(
        'label' => 'Aide',
        'uri' => '#',
        'icon' => 'fa fa-hands-helping')
    );
    $helpSidebar = $secondarySidebar->getChild('Aide');
    $helpSidebar->addChild('Support', array(
        'label'=> 'Support',
        'uri'=> '/supporttickets.php',
        'order' => '1',
        'icon' => 'fa-solid fa-user-headset'
    ));
    $helpSidebar->addChild('Contact', array(
        'label'=> 'Nous Contacter',
        'uri'=> '/contact.php',
        'order' => '2',
        'icon' => 'fa-solid fa-phone'
    ));
    $helpSidebar->addChild('FAQ', array(
        'label'=> 'FAQ',
        'uri'=> '/knowledgebase.php',
        'order' => '3',
        'icon' => 'fa-solid fa-question'
    ));
    $helpSidebar->addChild('espace client', array(
        'label'=> 'Mon espace client',
        'uri'=> '/clientarea.php',
        'order' => '4',
        'icon' => 'fa fa-user'
    ));
    $helpSidebar->addChild('ticket', array(
        'label'=> 'Accedez à un ticket',
        'uri'=> '/viewticket.php',
        'order' => '5',
        'icon' => 'fa fa-user'
    ));

    $helpSidebar->addChild('Tout les produits', array(
        'label'=> 'Tous les produits',
        'uri'=> '/',
        'order' => '5',
        'icon' => 'fa fa-user'
    ));

    if (!is_null($secondarySidebar->getChild('Categories'))) {
        $secondarySidebar->removeChild('Categories');
    }
    if (!is_null($secondarySidebar->getChild('Actions'))) {

        $secondarySidebar->getChild('Actions')
            ->addChild('Commandez un serveur virtuel')
            ->setUri('/index.php?rp=/store/vps-100-africain')
            ->setOrder(50);
        $secondarySidebar->getChild('Actions')
            ->addChild('Commandez un hébergement web')
            ->setUri('/index.php?rp=/store/shared-hosting-cpanle')
            ->setOrder(51);

        $secondarySidebar->getChild('Actions')
            ->addChild('Payer une facture')
            ->setUri('/clientarea.php?action=invoices')
            ->setOrder(54);
        $secondarySidebar->getChild('Actions')
            ->addChild("Voir l'état du réseau")
            ->setUri('/serverstatus.php')
            ->setOrder(55);

    }
});

?>