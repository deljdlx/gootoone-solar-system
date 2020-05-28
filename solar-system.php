<?php


//!C'est parti, créons le système solaire !
$systemeSolaire = new StellarSystem('Système solaire');
$systemeSolaire->age = 4.568;
$systemeSolaire->url = 'https://fr.wikipedia.org/wiki/Syst%C3%A8me_solaire';
$systemeSolaire->image = 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Solar_sys.jpg/800px-Solar_sys.jpg';


//!création de notre cher astre solaire
$soleil = new Star('Soleil');
$soleil->url = 'https://fr.wikipedia.org/wiki/Soleil';
$soleil->image = 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Solar_prominence_from_STEREO_spacecraft_September_29%2C_2008.jpg/280px-Solar_prominence_from_STEREO_spacecraft_September_29%2C_2008.jpg';

//!nous disons que l'étoile du "système solaire" et l'objet $sun
$systemeSolaire->setStar($soleil);


//!maintenant il faut ajouter les planètes

//?======Mercure=========
$mercure = new Planet('Mercure');
$mercure->type = 'Tellurique';
$mercure->url = 'https://fr.wikipedia.org/wiki/Mercure_(plan%C3%A8te)';
$mercure->image = 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Mercury_in_color_-_Prockter07_centered.jpg/280px-Mercury_in_color_-_Prockter07_centered.jpg';
$mercure->symbol = 'https://upload.wikimedia.org/wikipedia/commons/2/2e/Mercury_symbol.svg';
$systemeSolaire->addPlanet($mercure);


//?======Vénus=========
$venus = new Planet('Vénus');
$venus->type = 'Tellurique';
$venus->url = 'https://fr.wikipedia.org/wiki/V%C3%A9nus_(plan%C3%A8te)';
$venus->image = 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Venus-real_color.jpg/280px-Venus-real_color.jpg';
$venus->symbol = 'https://upload.wikimedia.org/wikipedia/commons/6/66/Venus_symbol.svg';
$systemeSolaire->addPlanet($venus);


//?======La Terre=========
$terre = new Planet('Terre');
$terre->type = 'Tellurique';
$terre->satellites = 1;
$terre->url = 'https://fr.wikipedia.org/wiki/Terre';
$terre->image = 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Earth_by_the_EPIC_Team_on_21_April_2018.png/280px-Earth_by_the_EPIC_Team_on_21_April_2018.png';
$terre->symbol = 'https://upload.wikimedia.org/wikipedia/commons/e/e7/Earth_symbol.svg';
$systemeSolaire->addPlanet($terre);



//?======Mars=========
$mars = new Planet('Mars');
$mars->type = 'Tellurique';
$mars->satellites = 2;
$mars->url = 'https://fr.wikipedia.org/wiki/Mars_(plan%C3%A8te)';
$mars->image = 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Mars_Valles_Marineris_EDIT.jpg/280px-Mars_Valles_Marineris_EDIT.jpg';
$mars->symbol = 'https://upload.wikimedia.org/wikipedia/commons/b/b7/Mars_symbol.svg';
$systemeSolaire->addPlanet($mars);

//?======Jupiter=========
$jupiter = new Planet('Jupiter');
$jupiter->type = 'Géante gazeuse';
$jupiter->satellites = 79;
$jupiter->url = 'https://fr.wikipedia.org/wiki/Jupiter_(plan%C3%A8te)';
$jupiter->image = 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Jupiter.jpg/280px-Jupiter.jpg';
$jupiter->symbol = 'https://upload.wikimedia.org/wikipedia/commons/2/26/Jupiter_symbol.svg?download';
$systemeSolaire->addPlanet($jupiter);


//?======Saturne=========
$saturne = new Planet('Saturne');
$saturne->type = 'Géante gazeuse';
$saturne->satellites = 200;
$saturne->url = 'https://fr.wikipedia.org/wiki/Saturne_(plan%C3%A8te)';
//$saturne->image = 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Saturn_during_Equinox.jpg/280px-Saturn_during_Equinox.jpg';
$saturne->image = 'https://trustmyscience.com/wp-content/uploads/2018/12/planete-saturne-anneaux-750x400.jpeg';
$saturne->symbol = 'https://upload.wikimedia.org/wikipedia/commons/7/74/Saturn_symbol.svg';
$systemeSolaire->addPlanet($saturne);

//?======Uranus=========
$uranus = new Planet('Uranus');
$uranus->type = 'Géante glace';
$uranus->satellites = 27;
$uranus->url = 'https://fr.wikipedia.org/wiki/Uranus_(plan%C3%A8te)';
$uranus->image = 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Uranus.jpg/280px-Uranus.jpg';
$uranus->symbol = 'https://upload.wikimedia.org/wikipedia/commons/f/f1/Uranus_symbol.svg';
$systemeSolaire->addPlanet($uranus);

//?======Neptune=========
$neptune  = new Planet('Neptune');
$neptune->type = 'Géante glace';
$neptune->satellites = 14;
$neptune->url = 'https://fr.wikipedia.org/wiki/Neptune_(plan%C3%A8te)';
$neptune->image = 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Neptune.jpg/280px-Neptune.jpg';
$neptune->symbol = 'https://upload.wikimedia.org/wikipedia/commons/4/47/Neptune_symbol.svg?download';
$systemeSolaire->addPlanet($neptune);