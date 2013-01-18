<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;


$app = require __DIR__.'/bootstrap.php';


// CONTROLLER PAGE UPLOAD
$app->match('/upload', function (Request $request) use ($app) {

    $form = $app['form.factory']->CreateBuilder('form')
        ->add('musicName', 'text', array(
        'label' => 'Titre de la musique',
        'required' => true,
        'constraints' => array(
            new Assert\NotBlank(array('message' => 'Ne pas laisser vide !')),
            new Assert\Length(array('max' => 50))
        ),
        'attr' => array(
            'placeholder' => 'Nom de la musique'
        )
    ))
        ->add('artiste', 'text', array(
        'label' => 'Artiste de la musique',
        //'required' => true,
        'constraints' => array(
            new Assert\NotBlank(array('message' => 'Ne pas laisser vide !')),
            new Assert\length(array('max' => 50))
        ),
        'attr' => array(
            'placeholder' => 'Artiste'
        )
    ))
        ->add('album', 'text', array(
        'label' => 'Album de la musique',
        //'required' => true,
        'constraints' => array(
            new Assert\NotBlank(array('message' => 'Ne pas laisser vide !')),
            new Assert\Length(array('max' => 50))
        ),
        'attr' => array(
            'placeholder' => 'Album'
        )
    ))
        ->add('userName', 'text', array(
        'label' => 'Votre nom',
        'required' => true,
        'constraints' => array(
            new Assert\NotBlank(array('message' => 'Ne pas laisser vide !')),
            new Assert\Length(array('max' => 50))
        ),
        'attr' => array(
            'placeholder' => 'Prénom Nom'
        )
    ))
        ->add('email', 'email', array(
        'label' => 'Votre adresse email',
        'required' => true,
        'constraints' => array(
            new Assert\NotBlank(array('message' => 'Ne pas laisser vide !')),
            new Assert\Email(array('message' => 'Invalid email address'))
        ),
        'attr' => array(
            'placeholder' => 'email@example.com'
        )
    ))
        ->add('song', 'file', array(
        'label' => 'Balance ton son',
        'required' => true,
        'constraints' => array(
            new Assert\NotBlank(array('message' => 'Ne pas laisser vide !')),
            new Assert\File(array('mimeTypes' => array(
                'audio/mpeg',
            ),
                'mimeTypesMessage' => 'Seulement du MP3 Ludo',
                'maxSize' => "100M" ,
                'maxSizeMessage' => '100MB au maximum'))
        ),
    ))
        ->getForm();

    if ('POST' == $request->getMethod()) {
        $form->bind($request);

        //if ($form->isValid()) {
            $data = $form->getData();

            $user = new User();
            $user->setUserEmail($data['email'])
                 ->setUserName($data['userName'])
                 ->save();

            $song = new Song();
            $song->setSongName($data['musicName'])
                 ->save();

            $file = $data['song'];
            // do something with the data

            $dir = __DIR__.'/../songs';

            // A FAIRE, RECUPERER l'id de la chanson qu'on vient d'ajouter
            // renommer la musique avec cet id de la base
            // use the original file name
            $file->move($dir, $file->getClientOriginalName());

            // faire une jolie vue comme quoi le formulaire a bien été rempli
            // redirect somewhere
            return $app->redirect('www.google.com');
        //}
    }

    // display the form
    return $app['twig']->render('template/upload.twig', array('uploadForm' => $form->createView()));
})
->method('GET|POST');


//Controller Home
$app->match('/home', function (Request $request) use ($app) {

    $aPlaylist = PlaylistQuery::create()
        ->find();


});


return $app;



