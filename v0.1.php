<?php

require 'vendor/autoload.php';

$library = new Library("My Media Library");

$library->addClient(new Client("Dimitri", "Rutz", "dimitri@drutz.ch"));
$library->addClient(new Client("Dimitri", "Rutz", "dimitri.rutz@eduvaud.ch"));
$library->addItem(new DigitalItem("La panthère rose"));