
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
	if (!is_null($primaryNavbar->getChild('Website Security'))) {
        $primaryNavbar->removeChild('Website Security');
    }

    $menu0 = $primaryNavbar->addChild('ACCUEIL')
        ->setUri('/')
        ->setOrder(1);
    $menu1 = $primaryNavbar->addChild('SERVICES')
        ->setOrder(10);
    $menu2 = $primaryNavbar->addChild('DOCUMENTATION')
        ->setOrder(20);

    $menu3 = $primaryNavbar->addChild('A PROPOS')
        ->setOrder(30);

    $menu1->addChild('NOMDEDOMAINE', array(
            'label'=> 'Nom de Domaine',
            'uri'=> '/domainchecker.php',
            'order' => '1'
        ));
    $menu1->addChild('SERVEURS', array(
            'label'=> 'Serveurs virtuels',
            'uri'=> '/virtualserver.php',
            'order' => '10'
        ));
    $menu1->addChild('HERBERGEMENTWEB', array(
            'label'=> 'Hébergement Web',
            'uri'=> '/hosting.php',
            'order' => '20'
        ));
    /*$menu1->addChild('EMAIL', array(
            'label'=> 'Adresses Email',
            'uri'=> '/store/email-100-africain/cloudstore-email',
            'order' => '30'
        ));*/
	$menu1->addChild('Website Security', array(
            'label'=> 'Certificats SSL',
            'uri'=> '/store/ssl-certificates',
            'order' => '30'
        ));



    $menu2->addChild('DOCUMENTATION', array(
            'label'=> 'Documentation FAQ',
            'uri'=> '/knowledgebase.php',
            'order' => '1'
        ));
     $menu2->addChild('DEMANDESUPPORT', array(
            'label'=> 'Politique de Confidentialité',
            'uri'=> '/rgdp.php',
            'order' => '10'
        ));
    /*$menu2->addChild('ETATRESEAU', array(
            'label'=> 'Etat du réseau',
            'uri'=> '/networkstatus.php',
            'order' => '30'
        ));*/
    $menu3->addChild('CLOUDAFRICA', array(
            'label'=> 'Le Cloud 100% Africain',
            'uri'=> '/cloudafricain.php',
            'order' => '1'
        ));
    $menu3->addChild('QUISOMMESNOUS', array(
            'label'=> 'Qui Sommes nous',
            'uri'=> '/apropos.php',
            'order' => '20'
        ));

    /* $menu3->addChild('LEBLOG', array(
            'label'=> 'Le Blog',
            'uri'=> '#',
            'order' => '30'
        )); */
    $menu3->addChild('CONTACTUS', array(
            'label'=> 'Nous contacter',
            'uri'=> '/contact.php',
            'order' => '40'
        ));
    $menu3->addChild('CADRELEGAL', array(
            'label'=> 'Cadre légal',
            'uri'=> '/rgdp.php',
            'order' => '50'
        ));


});

add_hook('ClientAreaSecondaryNavbar', 1, function (MenuItem $secondaryNavbar)
{
   if (!is_null($secondaryNavbar->getChild('Account'))) {
        $secondaryNavbar->getChild('Account')
            ->addChild('ESPACECLIENT', array(
                'label'=> 'Mon espace client',
                'uri'=> '/clientarea.php',
                'order' => '1'
            ));
   }
});

add_hook('ClientAreaSecondarySidebar', 1, function(MenuItem $secondarySidebar)
{

    if (!is_null($secondarySidebar->getChild('My Domains Actions'))) {

        $secondarySidebar->getChild('My Domains Actions')
            ->addChild('Gerez vos DNS')
            ->setUri('/index.php?m=DNSManager3&mg-page=Zones&mg-action=index')
            ->setIcon('fa fa-gear')
            ->setOrder(1);
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
    if (!is_null($secondarySidebar->getChild('Categories'))) {
        $secondarySidebar->removeChild('Categories');

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

        $helpSidebar->addChild('Tout les produits', array(
            'label'=> 'Tous les produits',
            'uri'=> '/products.php',
            'order' => '6',
            'icon' => 'fa-solid fa-hand-holding-heart'
        ));
    }
});

add_hook('ClientAreaPrimarySidebar', 1, function(MenuItem $primarySidebar) {
    if (!is_null($primarySidebar)) {
        if (!is_null($primarySidebar->getChild('Service Details Overview'))) {
            $primarySidebar->removeChild('Service Details Overview');
        }
        if (!is_null($primarySidebar->getChild('Service Details Actions'))) {
            $primarySidebar->removeChild('Service Details Actions');
        }
        if (!is_null($primarySidebar->getChild('Client Contacts'))) {
            $primarySidebar->removeChild('Client Contacts');
        }
        if (!is_null($primarySidebar->getChild('Client Shortcuts'))) {
            $primarySidebar->removeChild('Client Shortcuts');
        }
        if (!is_null($primarySidebar->getChild('My Domains Status Filter'))) {
            $primarySidebar->removeChild('My Domains Status Filter');
        }
        if (!is_null($primarySidebar->getChild('My Services Status Filter'))) {
            $primarySidebar->removeChild('My Services Status Filter');
        }
        if (!is_null($primarySidebar->getChild('My Services Actions'))) {
            $primarySidebar->removeChild('My Services Actions');
        }

    }
});
add_hook('ClientAreaSecondarySidebar', 1, function(MenuItem $primarySidebar) {
    if (!is_null($primarySidebar)) {
        if (!is_null($primarySidebar->getChild('Service Details Overview'))) {
            $primarySidebar->removeChild('Service Details Overview');
        }
        if (!is_null($primarySidebar->getChild('Service Details Actions'))) {
            $primarySidebar->removeChild('Service Details Actions');
        }
        if (!is_null($primarySidebar->getChild('Client Contacts'))) {
            $primarySidebar->removeChild('Client Contacts');
        }
        if (!is_null($primarySidebar->getChild('Client Shortcuts'))) {
            $primarySidebar->removeChild('Client Shortcuts');
        }
        if (!is_null($primarySidebar->getChild('My Domains Status Filter'))) {
            $primarySidebar->removeChild('My Domains Status Filter');
        }
        if (!is_null($primarySidebar->getChild('My Services Status Filter'))) {
            $primarySidebar->removeChild('My Services Status Filter');
        }
        if (!is_null($primarySidebar->getChild('My Services Actions'))) {
            $primarySidebar->removeChild('My Services Actions');
        }

    }
});


?>
