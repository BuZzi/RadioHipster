<?php



/**
 * This class defines the structure of the 'artiste' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.RadioHipster.map
 */
class ArtisteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'RadioHipster.map.ArtisteTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('artiste');
        $this->setPhpName('Artiste');
        $this->setClassname('Artiste');
        $this->setPackage('RadioHipster');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('artiste_id', 'ArtisteId', 'INTEGER', true, null, null);
        $this->addColumn('artiste_name', 'ArtisteName', 'VARCHAR', true, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Song', 'Song', RelationMap::ONE_TO_MANY, array('artiste_id' => 'artiste_id', ), 'CASCADE', null, 'Songs');
    } // buildRelations()

} // ArtisteTableMap
