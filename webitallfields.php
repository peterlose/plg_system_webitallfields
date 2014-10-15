<?php
// no direct access
defined ( '_JEXEC' ) or die ( 'Restricted access' );
 
class plgSystemWebitallfields extends JPlugin {
  
    protected $autoloadLanguage = true;

    function onContentPrepareForm($form, $data) {
        $app = JFactory::getApplication();
        $option = $app->input->get('option');
        
        switch($option) {

            case 'com_banners':
                
                if( $this->params->get('banners')==1 ) {
                    if ($app->isAdmin()) {
                        JForm::addFormPath(__DIR__ . '/forms');
                        $form->loadFile('banners', false);
                    }
                }
                break;
            
            case 'com_contact':
                
                if( $this->params->get('contact')==1 ) {
                    
                    if ($app->isAdmin()) {
                        JForm::addFormPath(__DIR__ . '/forms');
                        $form->loadFile('contact', false);
                    }
                }
                break;
            
            case 'com_content':
                
                if( $this->params->get('content')==1 ) {
                    if ($app->isAdmin()) {
                            JForm::addFormPath(__DIR__ . '/forms');
                            $form->loadFile('content', false);
                    }
                }
                break;
            
            case 'com_weblinks':
                
                if( $this->params->get('weblinks')==1 ) {
                    if ($app->isAdmin()) {
                            JForm::addFormPath(__DIR__ . '/forms');
                            $form->loadFile('weblinks', false);
                    }
                }
                break;
        }
        return true;
    }
 
}
?>