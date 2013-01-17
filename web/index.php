<?php

use Silex\Provider\FormServiceProvider;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

// Appel du service pour la construction de formulaire
$app->register(new Silex\Provider\TranslationServiceProvider());
$app->register(new FormServiceProvider());
$app->register(new Silex\Provider\ValidatorServiceProvider());

// Closure lorsque l'url /upload est appellé
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
            'required' => true,
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
            'required' => true,
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
        ->getForm();

    if ('POST' == $request->getMethod()) {
        $form->bind($request);


        if ($form->isValid()) {
            $data = $form->getData();

            // do something with the data

            // redirect somewhere
            return $app->redirect('www.google.com');
        }
    }

    // display the form
    return $app['twig']->render('template/upload.twig', array('uploadForm' => $form->createView()));
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
});


$app->run();
