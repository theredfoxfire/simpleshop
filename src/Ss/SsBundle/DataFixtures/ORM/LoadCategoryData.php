<?php
namespace Ss\SsBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ss\SsBundle\Entity\Category;
 
class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $sepatu = new Category();
        $sepatu->setName('Sepatu');
        $sepatu->setGender('1');
 
        $sandal = new Category();
        $sandal->setName('Sandal');
        $sandal->setGender('1');
 
        $kaos = new Category();
        $kaos->setName('Kaos');
        $kaos->setGender('2');
 
        $celana = new Category();
        $celana->setName('Celana');
        $celana->setGender('2');
 
        $em->persist($sepatu);
        $em->persist($sandal);
        $em->persist($kaos);
        $em->persist($celana);
        $em->flush();
 
        $this->addReference('sepatu', $sepatu);
        $this->addReference('sandal', $sandal);
        $this->addReference('kaos', $kaos);
        $this->addReference('celana', $celana);
    }
 
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}
