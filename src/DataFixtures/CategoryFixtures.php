<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 26/11/18
 * Time: 16:07
 */

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    const Categories = ['Php', 'Java', 'Javascript', 'Ruby', 'DevOps'];

    public function load(ObjectManager $manager)
    {
        // TODO: Implement load() method.
        foreach (self::Categories as $key => $categoryName) {
            $category = new Category();
            $category->setName($categoryName);
            $manager->persist($category);
            $this->addReference('categorie_' . $key, $category);
        }
        $manager->flush();
    }
}