<?php

require_once __DIR__ . '/../src/Model/WizbiiCorrection.php';
require_once __DIR__ . '/../src/Model/WizbiiMedia.php';
require_once __DIR__ . '/../src/Model/WizbiiPossibleValues.php';
require_once __DIR__ . '/../src/Model/WizbiiQuestion.php';
require_once __DIR__ . '/../src/Model/WizbiiQuestionDetails.php';
require_once __DIR__ . '/../src/Model/WizbiiResponse.php';
require_once __DIR__ . '/../src/Model/WizbiiSerie.php';
require_once __DIR__ . '/../src/Model/WizbiiGlobalObject.php';

$globalObject = new WizbiiGlobalObject();


// Example of question with 4 answers and a simple image
$questionDetails = new WizbiiQuestionDetails('Avant de quitter mon véhicule, je vérifie que :', [
    WizbiiMedia::createMp3('https://www.activpermis.com/ftp/2017/Audios/code2017p436q.mp3'),
    WizbiiMedia::createOgg('https://www.activpermis.com/ftp/2017/Audios/code2017p436q.ogg'),
    WizbiiMedia::createJPEG('https://www.activpermis.com/ftp/2017/Images/code2017p436.jpg')
]);
$responses = [
    new WizbiiResponse('le frein à main est serré', [
        new WizbiiPossibleValues(WizbiiPossibleValues::CONTENT_YES, WizbiiPossibleValues::STATUS_VALID)
    ]),
    new WizbiiResponse('les portes sont verrouillées', [
        new WizbiiPossibleValues(WizbiiPossibleValues::CONTENT_YES, WizbiiPossibleValues::STATUS_INVALID)
    ]),
    new WizbiiResponse('le levier de vitesse est au point mort', [
        new WizbiiPossibleValues(WizbiiPossibleValues::CONTENT_YES, WizbiiPossibleValues::STATUS_VALID)
    ]),
    new WizbiiResponse('les vitres sont relevées', [
        new WizbiiPossibleValues(WizbiiPossibleValues::CONTENT_YES, WizbiiPossibleValues::STATUS_VALID)
    ]),
];
$correction = new WizbiiCorrection('Une fois stationné, le conducteur doit effectuer quelques vérifications avant de quitter son véhicule...', [
    WizbiiMedia::createMp3('https://www.activpermis.com/ftp/2017/Audios/code2017p436r.mp3'),
    WizbiiMedia::createOgg('https://www.activpermis.com/ftp/2017/Audios/code2017p436r.ogg'),
]);
$globalObject->addQuestion(new WizbiiQuestion('14', 'accident', $questionDetails, $responses, $correction));

// Example of question with 2 answers (yes/no for each) and a video
$questionDetails = new WizbiiQuestionDetails('Cette situation est adaptée pour utiliser :', [
    WizbiiMedia::createMp3('https://www.activpermis.com/ftp/2017/Audios/code2017p436q.mp3'),
    WizbiiMedia::createOgg('https://www.activpermis.com/ftp/2017/Audios/code2017p436q.ogg'),
    WizbiiMedia::createMP4('https://www.activpermis.com/ftp/2017/Videos/r1392.mp4')
]);
$responses = [
    new WizbiiResponse('le régulateur de vitesse', [
        new WizbiiPossibleValues(WizbiiPossibleValues::CONTENT_YES, WizbiiPossibleValues::STATUS_INVALID),
        new WizbiiPossibleValues(WizbiiPossibleValues::CONTENT_NO, WizbiiPossibleValues::STATUS_VALID)
    ]),
    new WizbiiResponse('le limiteur de vitesse', [
        new WizbiiPossibleValues(WizbiiPossibleValues::CONTENT_YES, WizbiiPossibleValues::STATUS_VALID),
        new WizbiiPossibleValues(WizbiiPossibleValues::CONTENT_NO, WizbiiPossibleValues::STATUS_INVALID)
    ]),
];
$correction = new WizbiiCorrection('En agglomération, il n\'est pas toujours facile de rouler à une vitesse identique...', [
    WizbiiMedia::createMp3('https://www.activpermis.com/ftp/2017/Audios/code2017p436r.mp3'),
    WizbiiMedia::createOgg('https://www.activpermis.com/ftp/2017/Audios/code2017p436r.ogg'),
]);
$globalObject->addQuestion(new WizbiiQuestion('17', 'conducteur', $questionDetails, $responses, $correction));

// example of an exam serie
$globalObject->addSerie(new WizbiiSerie('64', 'global', ['17', '62', '68']));
// example of an themed serie
$globalObject->addSerie(new WizbiiSerie('128', 'accident', ['14', '37', '197']));


// Dump all data into a file in your filesystem
file_put_contents(__DIR__ . '/../dump.json', json_encode($globalObject));

