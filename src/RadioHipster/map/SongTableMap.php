<?php



/**
 * This class defines the structure of the 'song' table.
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
class SongTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'RadioHipster.map.SongTableMap';

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
        $this->setName('song');
        $this->setPhpName('Song');
        $this->setClassname('Song');
        $this->setPackage('RadioHipster');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('song_id', 'SongId', 'INTEGER', true, null, null);
        $this->addColumn('song_name', 'SongName', 'VARCHAR', true, 255, null);
        $this->addColumn('song_year', 'SongYear', 'INTEGER', true, 4, null);
        $this->addColumn('song_duration', 'SongDuration', 'VARCHAR', true, 255, null);
        $this->addForeignKey('user_id', 'UserId', 'INTEGER', 'user', 'user_id', true, 255, null);
        $this->addForeignKey('artiste_id', 'ArtisteId', 'INTEGER', 'artiste', 'artiste_id', true, 255, null);
        $this->addForeignKey('album_id', 'AlbumId', 'INTEGER', 'album', 'album_id', true, 255, null);
        $this->addForeignKey('sort_id', 'SortId', 'INTEGER', 'sort', 'sort_id', true, 255, null);
        $this->addForeignKey('playlist_id', 'PlaylistId', 'INTEGER', 'playlist', 'playlist_id', true, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'user_id', ), 'CASCADE', null);
        $this->addRelation('Artiste', 'Artiste', RelationMap::MANY_TO_ONE, array('artiste_id' => 'artiste_id', ), 'CASCADE', null);
        $this->addRelation('Album', 'Album', RelationMap::MANY_TO_ONE, array('album_id' => 'album_id', ), 'CASCADE', null);
        $this->addRelation('Sort', 'Sort', RelationMap::MANY_TO_ONE, array('sort_id' => 'sort_id', ), 'CASCADE', null);
        $this->addRelation('Playlist', 'Playlist', RelationMap::MANY_TO_ONE, array('playlist_id' => 'playlist_id', ), 'CASCADE', null);
    } // buildRelations()

} // SongTableMap
