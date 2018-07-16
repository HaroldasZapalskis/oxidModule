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
 * Class hzHaroldasZapalskisHaroldasArticle.
 * HaroldasArticle model.
 */
//TODO: Extend oxI18n - if multilingual fields are used
class hzHaroldasZapalskisHaroldasArticle extends oxBase
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct();
	$this->addFieldName('productclass', '0');
        // TODO: Adjust the table name if needed! Create the table in docs/install.sql.
        $this->init('hzharoldaszapalskis_haroldasarticle');
    }

    // NOTE: If You overload parent methods like save, load, delete, etc.,
    //       call parent methods through protected functions like "hzHaroldasZapalskisHaroldasArticle_[someMethod]_parent(..."

    // For empty OXID use $this->getId();
    // And You can use methods like $this-getClassName / getCoreTableName / getViewName / isLoaded ... and so on.

    // !!!EXAMPLES!!!
    // TODO: Implement real getters, setter, loaders, etc. and delete the examples.

    /**
     * Set [somefield].
     *
     * @param mixed [someField]
     */
    /*public function set[SomeField]([someValue])
    {
        $this->hzharoldaszapalskis_haroldasarticle__[somefield] = new oxField([someValue]);
    }*/

    /**
     * Get [somefield].
     *
     * @return double
     */
    /*public function get[SomeField]()
    {
        return $this->hzharoldaszapalskis_haroldasarticle__[somefield]->value;
    }*/

    /**
     * Load by... [sample function]
     *
     * @param mixed [mSomeField]
     *
     * @return mixed
     */
    // TODO: Replace [mSomeField] and [SOME_FIELD] with real values You need!
    /* public function loadBy...([mSomeField])
    {
        // NOTE: For MySQL queries user proper case, backticks (`) and keep it clear and readable.
        // NOTE: Database tables are name lowercase, as example "hzharoldaszapalskis_haroldasarticle"
        //       Each new table MUST have a primary key named "OXID" of type char(32)
        //       Custom fields are named UPPERCASE with Your vendor prefix each, for example "HZMYFIELD"
        $sQuery = sprintf(
            "SELECT * FROM `%s` WHERE `[SOME_FIELD]` = %s LIMIT 1",
            getViewName('hzharoldaszapalskis_haroldasarticle'),
            oxDb::getDb()->quote(trim([mSomeField]))
        );

        return $this->assignRecord($sQuery);
    } */
}
