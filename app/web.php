<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

$app->mount('home', require_once __DIR__.'./home.php');

$app = require __DIR__.'/bootstrap.php';


// CONTROLLER PAGE UPLOAD
// Closure lorsque l'url /upload est appellée
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


        if ($form->isValid()) {
            $data = $form->getData();

            $file = $data['song'];
            // do something with the data


            // use the original file name
            $file->move($dir, $file->getClientOriginalName());

            // compute a random name and try to guess the extension (more secure)
            $extension = $file->guessExtension();
            if (!$extension) {
                // extension cannot be guessed
                $extension = 'bin';
            }
            $file->move($dir, $id.'.'.$extension);

            // redirect somewhere
            return $app->redirect('www.google.com');
        }
    }

    // display the form
    /*return $app['twig']->render('template/upload.twig', array('uploadForm' => $form->createView()));
})
    ->method('GET|POST');

$app->get('/{page}', function ($page) use ($app) {
    try
    {
        return $app['twig']->render('template/'.$page.'.twig', array());
    }
    catch(exception $e)
    {
        if(get_class($e) == "Twig_Error_Loader")
        {
            $app->abort('404', 'Twig pas trouvé');
        }
    }
});*/






return $app;



