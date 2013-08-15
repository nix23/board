Ntech Board Bundle
========================

1) Installing
----------------------------------

1. Download;

2. Run "composer update" from app directory;  If Runtime Exception "An error occurred when generating the bootstrap file."
occurs, run "php vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/bin/build_bootstrap.php" command;

3. Copy app/config/parameters.yml.dist file and rename it to app/config/parameters.yml;

4. Edit app/config/parameters.yml configuration file;

5. Create database with "doctrine:schema:create" command;

6. Database schema can be generated with "php app/console doctrine:schema:update --force" command;

7. Test data for DB can be generated with "php app/console doctrine:fixtures:load" command;
(To regenerate test data "php app/console doctrine:fixtures:load --purge-with-truncate" command should be used)
