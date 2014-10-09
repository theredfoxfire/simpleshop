<?php
namespace Ss\Ssbundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ss\SsBundle\Entity\Product;

class LoadProductData extends AbstractFixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $em)
	{
		for($i=0;$i<14;$i++){
		$sepatu = new Product();
		$sepatu->setCategories($em->merge($this->getReference('sepatu')));
		$sepatu->setNama('Sepatu Kulit Badak'.$i);
		$sepatu->setDescription('Sepatu keren dari kulit badak asli');
		$sepatu->setFoto('sepatubadak.jpg.');
		$sepatu->setHarga('1400000');
		$sepatu->setStock('3');
		$sepatu->setOngkir('20000');
		$sepatu->setIsPublish(true);
		
		$sandal = new Product();
		$sandal->setCategories($em->merge($this->getReference('sandal')));
		$sandal->setNama('Sandal Kulit Badak'.$i);
		$sandal->setDescription('Sandal keren dari kulit badak asli');
		$sandal->setFoto('sandalbadak.jpg.');
		$sandal->setHarga('1400000');
		$sandal->setStock('3');
		$sandal->setOngkir('20000');
		$sandal->setIsPublish(true);
		
		$kaos = new Product();
		$kaos->setCategories($em->merge($this->getReference('kaos')));
		$kaos->setNama('Kaos Kulit Badak'.$i);
		$kaos->setDescription('Kaos keren dari kulit badak asli');
		$kaos->setFoto('kaosbadak.jpg.');
		$kaos->setHarga('1400000');
		$kaos->setStock('3');
		$kaos->setOngkir('20000');
		$kaos->setToken('kaosbadak'.$i);
		$kaos->setIsPublish(true);
		
		$celana = new Product();
		$celana->setCategories($em->merge($this->getReference('celana')));
		$celana->setNama('Celana Kulit Badak'.$i);
		$celana->setDescription('Celana keren dari kulit badak asli');
		$celana->setFoto('celanabadak.jpg.');
		$celana->setHarga('1400000');
		$celana->setStock('3');
		$celana->setOngkir('20000');
		$celana->setIsPublish(true);
		
		$em->persist($sepatu);
		$em->persist($sandal);
		$em->persist($kaos);
		$em->persist($celana);
		}
		$em->flush();
	}
	
	public function getOrder()
	{
		return 2;
	}
}
