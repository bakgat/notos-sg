<?php
// cli-config.php
use Doctrine\ORM\Tools\Setup;

\Doctrine\Common\Annotations\AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation',
    __DIR__ . '/vendor/jms/serializer/src'
);
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/vendor/bakgat/notos/src/Domain/Model"), $isDevMode, null, null, false);

$conn = [
    'driver' => 'mysqli',
    'host' => '127.0.0.1',
    'dbname' =>'notosplus',
    'user' => 'root',
    'password' => 'root',
    'prefix' => ''
];
// obtaining the entity manager
$entityManager = \Doctrine\ORM\EntityManager::create($conn, $config);

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($entityManager),
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($entityManager->getConnection())
));

return $helperSet;
