<?php


namespace App\DataFixtures;


class UserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('admin@mediaforce.com');
        $user->setPassword($this->encoder->encodePassword($user,'password'));
        $manager->persist($user);

        $manager->flush();
    }
}