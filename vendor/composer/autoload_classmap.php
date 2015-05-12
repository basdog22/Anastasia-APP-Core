<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname(dirname($vendorDir));

return array(
    'AddonsController' => $baseDir . '/lp-includes/app/controllers/AddonsController.php',
    'AnastasiaStr' => $baseDir . '/lp-includes/app/helpers/Overrides.php',
    'Archive' => $baseDir . '/lp-includes/app/models/Archive.php',
    'ArchiveReader' => $baseDir . '/lp-includes/app/helpers/ArchiveReader.php',
    'Asset' => $baseDir . '/lp-includes/app/models/Asset.php',
    'AssetsController' => $baseDir . '/lp-includes/app/controllers/AssetsController.php',
    'Audio' => $baseDir . '/lp-includes/app/models/Audio.php',
    'AutoEmbed' => $baseDir . '/lp-includes/app/helpers/AutoEmbed.php',
    'BackendController' => $baseDir . '/lp-includes/app/controllers/BackendController.php',
    'BackendbaseController' => $baseDir . '/lp-includes/app/controllers/BackendbaseController.php',
    'BackupManager' => $baseDir . '/lp-includes/app/helpers/BackupManager.php',
    'BlockManagerController' => $baseDir . '/lp-includes/app/controllers/BlockManagerController.php',
    'Cartalyst\\Sentry\\Groups\\GroupExistsException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
    'Cartalyst\\Sentry\\Groups\\GroupNotFoundException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
    'Cartalyst\\Sentry\\Groups\\NameRequiredException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
    'Cartalyst\\Sentry\\Throttling\\UserBannedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/Exceptions.php',
    'Cartalyst\\Sentry\\Throttling\\UserSuspendedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\LoginRequiredException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\PasswordRequiredException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserAlreadyActivatedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserExistsException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserNotActivatedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserNotFoundException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\WrongPasswordException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Comments' => $baseDir . '/lp-includes/app/models/Comment.php',
    'CommentsController' => $baseDir . '/lp-includes/app/controllers/CommentsController.php',
    'CreateImagesTable' => $vendorDir . '/mmanos/laravel-image/src/migrations/2014_09_04_000000_create_images_table.php',
    'CreateRevisionsTable' => $vendorDir . '/venturecraft/revisionable/src/migrations/2013_04_09_062329_create_revisions_table.php',
    'CreateTaggedTable' => $vendorDir . '/rtconner/laravel-tagging/src/migrations/2014_01_07_073615_create_tagged_table.php',
    'CreateTagsTable' => $vendorDir . '/rtconner/laravel-tagging/src/migrations/2014_01_07_073615_create_tags_table.php',
    'CreateTranslationsTable' => $vendorDir . '/barryvdh/laravel-translation-manager/src/migrations/2014_04_02_193005_create_translations_table.php',
    'DatabaseSeeder' => $baseDir . '/lp-includes/app/database/seeds/DatabaseSeeder.php',
    'Feedable' => $baseDir . '/lp-includes/app/helpers/Feedable.php',
    'Feedreader' => $baseDir . '/lp-includes/app/helpers/Feedreader.php',
    'FrontController' => $baseDir . '/lp-includes/app/controllers/FrontController.php',
    'FrontendbaseController' => $baseDir . '/lp-includes/app/controllers/FrontendbaseController.php',
    'GreekSlugGenerator' => $baseDir . '/lp-includes/app/helpers/GreekSlugGenerator.php',
    'GridManager' => $baseDir . '/lp-includes/app/models/GridManager.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'ImageAsset' => $baseDir . '/lp-includes/app/models/ImageAsset.php',
    'Lanz\\Commentable\\MigrationCommand' => $vendorDir . '/lanz/laravel-commentable/src/commands/MigrationCommand.php',
    'Menu' => $baseDir . '/lp-includes/app/models/Menus.php',
    'Menuitems' => $baseDir . '/lp-includes/app/models/Menuitems.php',
    'MenusController' => $baseDir . '/lp-includes/app/controllers/MenusController.php',
    'MessagesHelper' => $baseDir . '/lp-includes/app/helpers/Messages.php',
    'Meta' => $baseDir . '/lp-includes/app/models/Meta.php',
    'MigrationCartalystSentryInstallGroups' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225929_migration_cartalyst_sentry_install_groups.php',
    'MigrationCartalystSentryInstallThrottle' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225988_migration_cartalyst_sentry_install_throttle.php',
    'MigrationCartalystSentryInstallUsers' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225921_migration_cartalyst_sentry_install_users.php',
    'MigrationCartalystSentryInstallUsersGroupsPivot' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot.php',
    'Miscfile' => $baseDir . '/lp-includes/app/models/Miscfile.php',
    'Mmanos\\Image\\Image' => $vendorDir . '/mmanos/laravel-image/src/models/Image.php',
    'Mmanos\\Image\\ImagesController' => $vendorDir . '/mmanos/laravel-image/src/controllers/ImagesController.php',
    'Mmanos\\Metable\\MetableCommand' => $vendorDir . '/mmanos/laravel-metable/src/commands/MetableCommand.php',
    'Mmanos\\Metable\\MetasCommand' => $vendorDir . '/mmanos/laravel-metable/src/commands/MetasCommand.php',
    'Orangehill\\Iseed\\TableNotFoundException' => $vendorDir . '/orangehill/iseed/src/Orangehill/Iseed/Exceptions.php',
    'Page' => $baseDir . '/lp-includes/app/models/Page.php',
    'PagesController' => $baseDir . '/lp-includes/app/controllers/PagesController.php',
    'Plugin' => $baseDir . '/lp-includes/app/models/Plugin.php',
    'Revision' => $baseDir . '/lp-includes/app/models/Revision.php',
    'RevisionsController' => $baseDir . '/lp-includes/app/controllers/RevisionsController.php',
    'S3SoapClient' => $vendorDir . '/barryvdh/elfinder-builds/php/elFinderVolumeS3.class.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'Sessions' => $baseDir . '/lp-includes/app/models/Sessions.php',
    'Settings' => $baseDir . '/lp-includes/app/models/Settings.php',
    'Tag' => $baseDir . '/lp-includes/app/models/Tag.php',
    'Task' => $baseDir . '/lp-includes/app/models/Task.php',
    'TasksController' => $baseDir . '/lp-includes/app/controllers/TasksController.php',
    'TaxonomiesController' => $baseDir . '/lp-includes/app/controllers/TaxonomiesController.php',
    'Taxonomy' => $baseDir . '/lp-includes/app/models/Taxonomy.php',
    'Theme' => $baseDir . '/lp-includes/app/models/Theme.php',
    'ThemesController' => $baseDir . '/lp-includes/app/controllers/ThemesController.php',
    'Translatable' => $baseDir . '/lp-includes/app/helpers/Translatable.php',
    'TranslationsController' => $baseDir . '/lp-includes/app/controllers/TranslationsController.php',
    'UploadHandler' => $baseDir . '/lp-includes/app/helpers/UploadsHandler.php',
    'UploadsController' => $baseDir . '/lp-includes/app/controllers/UploadsController.php',
    'User' => $baseDir . '/lp-includes/app/models/User.php',
    'UsersController' => $baseDir . '/lp-includes/app/controllers/UsersController.php',
    'Video' => $baseDir . '/lp-includes/app/models/Video.php',
    'Whoops\\Module' => $vendorDir . '/filp/whoops/src/deprecated/Zend/Module.php',
    'Whoops\\Provider\\Zend\\ExceptionStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/ExceptionStrategy.php',
    'Whoops\\Provider\\Zend\\RouteNotFoundStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/RouteNotFoundStrategy.php',
    'Widget' => $baseDir . '/lp-includes/app/helpers/Widget.php',
    'WordReader' => $baseDir . '/lp-includes/app/helpers/WordReader.php',
    'elFinder' => $vendorDir . '/barryvdh/elfinder-builds/php/elFinder.class.php',
    'elFinderConnector' => $vendorDir . '/barryvdh/elfinder-builds/php/elFinderConnector.class.php',
    'elFinderPluginAutoResize' => $vendorDir . '/barryvdh/elfinder-builds/php/plugins/AutoResize/plugin.php',
    'elFinderPluginNormalizer' => $vendorDir . '/barryvdh/elfinder-builds/php/plugins/Normalizer/plugin.php',
    'elFinderPluginSanitizer' => $vendorDir . '/barryvdh/elfinder-builds/php/plugins/Sanitizer/plugin.php',
    'elFinderPluginWatermark' => $vendorDir . '/barryvdh/elfinder-builds/php/plugins/Watermark/plugin.php',
    'elFinderVolumeDriver' => $vendorDir . '/barryvdh/elfinder-builds/php/elFinderVolumeDriver.class.php',
    'elFinderVolumeDropbox' => $vendorDir . '/barryvdh/elfinder-builds/php/elFinderVolumeDropbox.class.php',
    'elFinderVolumeFTP' => $vendorDir . '/barryvdh/elfinder-builds/php/elFinderVolumeFTP.class.php',
    'elFinderVolumeFTPIIS' => $vendorDir . '/barryvdh/elfinder-builds/php/elFinderVolumeFTPIIS.class.php',
    'elFinderVolumeFlysystem' => $vendorDir . '/barryvdh/elfinder-flysystem-driver/src/elFinderVolumeFlysystem.php',
    'elFinderVolumeLocalFileSystem' => $vendorDir . '/barryvdh/elfinder-builds/php/elFinderVolumeLocalFileSystem.class.php',
    'elFinderVolumeMySQL' => $vendorDir . '/barryvdh/elfinder-builds/php/elFinderVolumeMySQL.class.php',
    'elFinderVolumePpa' => $baseDir . '/lp-includes/app/helpers/elFinderVolumePpa.class.php',
    'elFinderVolumeS3' => $vendorDir . '/barryvdh/elfinder-builds/php/elFinderVolumeS3.class.php',
    'getID3' => $vendorDir . '/james-heinrich/getid3/getid3/getid3.php',
    'getid3_exception' => $vendorDir . '/james-heinrich/getid3/getid3/getid3.php',
    'getid3_handler' => $vendorDir . '/james-heinrich/getid3/getid3/getid3.php',
);
