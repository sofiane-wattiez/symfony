<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;
use App\Entity\Comments;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $encodeur;
    public function __construct(UserPasswordHasherInterface $encodeur)
    {
        $this->encodeur = $encodeur;
    }


    public function load(ObjectManager $manager)
    {


        for ($i = 0; $i < 20; $i++) {

            $article = new Article();
            $article->setTitre('TITRE ' . $i);
            $article->setContenu('Contenu ' . $i);
            $article->setImageArticle('/styles/037.png');
            $article->setDate(new \DateTime('now'));
            $manager->persist($article);
        }

        for ($i = 0; $i < 20; $i++) {
            $comments = new Comments();
            $comments->setContenu('contenu' . $i);
            $comments->setDate(new \DateTime('now'));
            // $comments->setUserId('user_id');
            // $comments->setArticleId('article_id');
            $manager->persist($comments);
        }

        for ($i = 0; $i < 20; $i++) {
            $user = new User();
            $user->setEmail('email' . $i . '@gmail.com');
            $user->setRoles(['ROLE_USER']);
            $password = $this->encodeur->hashPassword($user, 'password');
            $user->setPassword($password);
            $user->setIsVerified('is_verified');
            $manager->persist($user);
        }


        $manager->flush();
    }
}
