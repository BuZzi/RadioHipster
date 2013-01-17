<?php



/**
 * This class defines the structure of the 'sort' table.
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
class SortTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'RadioHipster.map.SortTableMap';

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
        $this->setName('sort');
        $this->setPhpName('Sort');
        $this->setClassname('Sort');
        $this->setPackage('RadioHipster');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('sort_id', 'SortId', 'INTEGER', true, null, null);
        $this->addColumn('sort_name', 'SortName', 'VARCHAR', true, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Song', 'Song', RelationMap::ONE_TO_MANY, array('sort_id' => 'sort_id', ), 'CASCADE', null, 'Songs');
    } // buildRelations()

} // SortTableMap
