<?php 


namespace App\Test\Repository;



use PHPUnit\Framework\TestCase;
use App\Repository\MetiersRepository;
use App\DataFixtures\ActivityFixtures;
use Liip\TestFixturesBundle\Test\FixturesTrait;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UserRepositoryTest extends WebTestCase {

    // WebTestCase 
    // KernelTestCase
    //
    use FixturesTrait;

        public function testCount(){



            self::bootKernel();
            $this->loadFixtures([ActivityFixtures::class]);
            $metier = self::$container->get(MetiersRepository::class)->count([]);
            $this->assertEqual(10, $metier);
        }

}
