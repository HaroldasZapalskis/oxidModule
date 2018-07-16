<?php
/**
 *Haroldas Zapalskis First Test Module
 *
 * @category      module
 * @package       haroldaszapalskis
 * @author        Haroldas Zapalskis
 * @link          http://oxidshop.local
 * @copyright (C) Haroldas Zapalskis2018
 */

    
/**
 * Class hzHaroldasZapalskisHaroldasController.
 */
class hzHaroldasZapalskisHaroldasController extends oxUBase
{

    /**
     * Controller template name.
     *
     * @var string
     */
    protected $_sThisTemplate = 'hzharoldaszapalskisharoldascontroller.tpl';


    // This is an example of overridden init method that goes before any action and render.
    /* public function init()
    {
        // TODO: Implement Your custom logic here or delete this sample
        //$this->_hzHaroldasZapalskisHaroldasController_init_parent();
    } */

    /**
     * Overridden parent method.
     * TODO: Write a comment on what You will implement here.
     *
     * @return mixed
     */
    public function render()
    {
        $mReturn = $this->_hzHaroldasZapalskisHaroldasController_render_parent();

        // TODO: Implement Your custom logic here
        // $this->setViewData(array('[mMyParam]' => ...)); // To set ir modify view data

        // ... = $this->getConfig()->getRequestParameter('[request_parameter]'); // To get GET/POST parameters

        // $oModule = oxRegistry::get('hzHaroldasZapalskisModule'); // Get the module instance

        // /** @var myObject|myObjectParent $oObject */
        // $oObject = oxNew('myObject'); // To create new object

        // oxRegistry::getUtils()->redirect(...); // For redirect

        // $this->_oaComponents['oxcmp_..']->...; // To access components

        // $this->getUser(); // To get active shop user

        // oxRegistry::get("oxUtilsView")->addErrorToDisplay(...); // To set error

        return $mReturn;
    }

    // This is an example of an action (called with '...?...&fnc=[myAction]'. It is triggered before render.
    /* public function [myAction]()
    {
        // TODO: Implement Your custom logic here or delete this sample
    } */

    // An example of getter that could be used in template as $oView->[getMyData]()
    /* public function [getMyData]()
    {
        // TODO: Implement Your custom logic here or delete this sample
        //return ...;
    } */

    /**
     * Parent `render` call. Method required for mocking.
     *
     * @codeCoverageIgnore
     *
     * @return mixed
     */
    protected function _hzHaroldasZapalskisHaroldasController_render_parent()
    {
        return parent::render();
    }
}