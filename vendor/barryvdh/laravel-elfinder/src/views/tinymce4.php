<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>elFinder 2.0</title>

    <!-- jQuery and jQuery UI (REQUIRED) -->
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>


    <?= HTML::script(Config::get("settings.cms.rel_includes").'/app/views/layouts/backend/lp-funcs.js') ?>
    <!-- elFinder CSS (REQUIRED) -->
    <link rel="stylesheet" type="text/css" href="<?= asset($dir.'/css/elfinder.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset($dir.'/css/theme.css') ?>">

    <!-- elFinder JS (REQUIRED) -->
    <script src="<?= asset($dir.'/js/elfinder.min.js') ?>"></script>

    <?php if($locale){ ?>
        <!-- elFinder translation (OPTIONAL) -->
        <script src="<?= asset($dir."/js/i18n/elfinder.$locale.js") ?>"></script>
    <?php } ?>
    
    <!-- elFinder initialization (REQUIRED) -->
    <script type="text/javascript">
        var FileBrowserDialogue = {
            init: function() {
                // Here goes your code for setting your custom things onLoad.
            },
            mySubmit: function (URL) {
                // pass selected file path to TinyMCE
                parent.tinymce.activeEditor.windowManager.getParams().setUrl(URL);

                // close popup window
                parent.tinymce.activeEditor.windowManager.close();
            }
        }

        $().ready(function() {
            var elf = $('#elfinder').elfinder({
                // set your elFinder options here
                <?php if($locale){ ?>
                    lang: '<?= $locale ?>', // locale
                <?php } ?>
                <?php if($csrf){ ?>
                customData: { _token:  '<?php echo csrf_token(); ?>' },
                <?php } ?>
                handlers : {
                    upload : function(event, instance) {
                        notifyFileUpload('<?= URL::to('backend/assets/savemedia'); ?>',event,instance);
                    },
                    remove : function(event, instance) {
                        notifyFileRemoval('<?= URL::to('backend/assets/removemedia'); ?>',event,instance);
                    },
                    paste : function(event,instance){
                        console.info(event);
                        console.info('TODO:WHAT HAPPENS HERE?');
                    },
                    rename : function(event,instance){
                        notifyFileUpload('<?= URL::to('backend/assets/savemedia'); ?>',event,instance);
                        event.data.added = null;
                        notifyFileRemoval('<?= URL::to('backend/assets/removemedia'); ?>',event,instance);
                    },

                    archive : function(event,instance){
                        notifyFileUpload('<?= URL::to('backend/assets/savemedia'); ?>',event,instance);

                    },
                    extract : function(event,instance){
                        notifyFileUpload('<?= URL::to('backend/assets/savemedia'); ?>',event,instance);
                        console.info('TODO:WHAT HAPPENS HERE?');
                    }
                },
                url: '<?= URL::action('Barryvdh\Elfinder\ElfinderController@showConnector') ?>',  // connector URL
                getFileCallback: function(file) { // editor callback
                    FileBrowserDialogue.mySubmit(file.url); // pass selected file path to TinyMCE
                }
            }).elfinder('instance');
        });
    </script>
</head>
<body>
    <!-- Element where elFinder will be created (REQUIRED) -->
    <div id="elfinder"></div>
</body>
</html>
