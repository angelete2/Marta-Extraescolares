<?php

namespace Hoplite\TeachersBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Hoplite\TeachersBundle\Entity\Teacher;



class teachers implements FixtureInterface, ContainerAwareInterface
{
  private $container;

  public function setContainer (ContainerInterface $container = null)
  {
    $this->container = $container;
  }


  public function load(ObjectManager $manager)
  {
    $teachers = array (
        array ('first_name' => 'Marta', 'last_name' => 'Benito', 'login' => 'mbenito', 'password' => '1234'),
        array ('first_name' => 'Jesus', 'last_name' => 'García', 'login' => 'jgarcia', 'password' => '1234'),
    );


    foreach ($teachers as $teacher)
    {
      $entity = new Teacher();
      $encoder = $this->container->get('security.encoder_factory')->getEncoder($entity);

      $password = $encoder->encodePassword($teacher['password'], $teacher['password']);

      $entity->setFirstName($teacher['first_name']);
      $entity->setLastName($teacher['last_name']);
      $entity->setLogin($teacher['login']);


      $entity->setPassword($password);
      $entity->setSalt($teacher['password']);


      $manager->persist($entity);

    }

    $now =  new \DateTime('now');
    echo $now->format('Y-m-d h:m:i'). "\n";
    $manager->flush();

    sleep(3);

    $users = $manager->getRepository('TeachersBundle:Teacher')->findAll();
    echo "users = $users ";
    foreach ($users as $user)
    {
      echo "user = " . $user->getId();
      $user->setLastName($user->getLastName() . $user->getLastName());
      $manager->persist($user);
    }
    $manager->flush();

  }



}
