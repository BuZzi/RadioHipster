<?php



/**
 * This class defines the structure of the 'playlist' table.
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
class PlaylistTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'RadioHipster.map.PlaylistTableMap';

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
        $this->setName('playlist');
        $this->setPhpName('Playlist');
        $this->setClassname('Playlist');
        $this->setPackage('RadioHipster');
        $this->setUseIdGenerator(true);
        $this->setIsCrossRef(true);
        // columns
        $this->addPrimaryKey('playlist_id', 'PlaylistId', 'INTEGER', true, null, null);
        $this->addColumn('playlist_order', 'PlaylistOrder', 'INTEGER', true, null, null);
        $this->addForeignKey('song_id', 'SongId', 'INTEGER', 'song', 'song_id', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Song', 'Song', RelationMap::MANY_TO_ONE, array('song_id' => 'song_id', ), 'CASCADE', null);
    } // buildRelations()

} // PlaylistTableMap
