<?php

namespace App\DataFixtures;

use App\Entity\Country;
use App\Entity\Language;
use App\Entity\PreferedBeverage;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;


class GameFixtures extends Fixture
{


    public function load(ObjectManager $manager)
    {
        $beverage = new PreferedBeverage();
        $beverage->setName("vin");
        $beverage->setCode("V-45");

        $manager->persist($beverage);

        $beverage2 = new PreferedBeverage();
        $beverage2->setName("Bière");
        $beverage2->setCode("B-05");

        $manager->persist($beverage2);

        $beverage3 = new PreferedBeverage();
        $beverage3->setName("Vodka");
        $beverage3->setCode("V-99");

        $manager->persist($beverage3);

        $language = new Language();
        $language->setName("Français");
        $language->setShortName("fr");

        $manager->persist($language);

        $language2 = new Language();
        $language2->setName("German");
        $language2->setShortName("ge");

        $manager->persist($language2);

        $language3 = new Language();
        $language3->setName("English");
        $language3->setShortName("en");

        $manager->persist($language3);

        $language3 = new Language();
        $language3->setName("Ukrenian");
        $language3->setShortName("uk");

        $manager->persist($language3);

        $language4 = new Language();
        $language4->setName("du");
        $language4->setShortName("du");

        $manager->persist($language4);


        $country = new Country();
        $country->setName("France");
        $country->setCapital("Paris");
        $country->setPreferedBeverage($beverage);
        $country->setHasEuro(True);
        $country->setNumberOfInhabitants(65000000);
        $country->addLanguage($language);

        $manager->persist($country);


        $country2 = new Country();
        $country2->setName("Allemagne");
        $country2->setCapital("Berlin");
        $country2->setPreferedBeverage($beverage2);
        $country2->setHasEuro(true);
        $country2->setNumberOfInhabitants(90000000);
        $country2->addLanguage($language2);

        $manager->persist($country2);


        $country3 = new Country();
        $country3->setName("Angleterre");
        $country3->setCapital("Londres");
        $country3->setPreferedBeverage($beverage2);
        $country3->setHasEuro(false);
        $country3->setNumberOfInhabitants(65000000);
        $country3->addLanguage($language3);

        $manager->persist($country3);

        $country4 = new Country();
        $country4->setName("Ukraine");
        $country4->setCapital("Kiev");
        $country4->setPreferedBeverage($beverage3);
        $country4->setHasEuro(false);
        $country4->setNumberOfInhabitants(42000000);
        $country4->addLanguage($language4);

        $manager->persist($country4);

        $country5 = new Country();
        $country5->setName("Belgique");
        $country5->setCapital("Bruxelles");
        $country5->setHasEuro(true);
        $country5->setNumberOfInhabitants(11000000);
        $country5->addLanguage($language4);
        $country5->addLanguage($language);

        $manager->persist($country5);
        

        $manager->flush();
    }
}
