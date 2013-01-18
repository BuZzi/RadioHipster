<?php


/**
 * Base class that represents a row from the 'song' table.
 *
 *
 *
 * @package    propel.generator.RadioHipster.om
 */
abstract class BaseSong extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SongPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SongPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the song_id field.
     * @var        int
     */
    protected $song_id;

    /**
     * The value for the song_name field.
     * @var        string
     */
    protected $song_name;

    /**
     * The value for the song_year field.
     * @var        int
     */
    protected $song_year;

    /**
     * The value for the song_duration field.
     * @var        string
     */
    protected $song_duration;

    /**
     * The value for the user_id field.
     * @var        int
     */
    protected $user_id;

    /**
     * The value for the artiste_id field.
     * @var        int
     */
    protected $artiste_id;

    /**
     * The value for the album_id field.
     * @var        int
     */
    protected $album_id;

    /**
     * The value for the sort_id field.
     * @var        int
     */
    protected $sort_id;

    /**
     * The value for the playlist_id field.
     * @var        int
     */
    protected $playlist_id;

    /**
     * @var        User
     */
    protected $aUser;

    /**
     * @var        Artiste
     */
    protected $aArtiste;

    /**
     * @var        Album
     */
    protected $aAlbum;

    /**
     * @var        Sort
     */
    protected $aSort;

    /**
     * @var        Playlist
     */
    protected $aPlaylist;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Get the [song_id] column value.
     *
     * @return int
     */
    public function getSongId()
    {
        return $this->song_id;
    }

    /**
     * Get the [song_name] column value.
     *
     * @return string
     */
    public function getSongName()
    {
        return $this->song_name;
    }

    /**
     * Get the [song_year] column value.
     *
     * @return int
     */
    public function getSongYear()
    {
        return $this->song_year;
    }

    /**
     * Get the [song_duration] column value.
     *
     * @return string
     */
    public function getSongDuration()
    {
        return $this->song_duration;
    }

    /**
     * Get the [user_id] column value.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Get the [artiste_id] column value.
     *
     * @return int
     */
    public function getArtisteId()
    {
        return $this->artiste_id;
    }

    /**
     * Get the [album_id] column value.
     *
     * @return int
     */
    public function getAlbumId()
    {
        return $this->album_id;
    }

    /**
     * Get the [sort_id] column value.
     *
     * @return int
     */
    public function getSortId()
    {
        return $this->sort_id;
    }

    /**
     * Get the [playlist_id] column value.
     *
     * @return int
     */
    public function getPlaylistId()
    {
        return $this->playlist_id;
    }

    /**
     * Set the value of [song_id] column.
     *
     * @param int $v new value
     * @return Song The current object (for fluent API support)
     */
    public function setSongId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->song_id !== $v) {
            $this->song_id = $v;
            $this->modifiedColumns[] = SongPeer::SONG_ID;
        }


        return $this;
    } // setSongId()

    /**
     * Set the value of [song_name] column.
     *
     * @param string $v new value
     * @return Song The current object (for fluent API support)
     */
    public function setSongName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->song_name !== $v) {
            $this->song_name = $v;
            $this->modifiedColumns[] = SongPeer::SONG_NAME;
        }


        return $this;
    } // setSongName()

    /**
     * Set the value of [song_year] column.
     *
     * @param int $v new value
     * @return Song The current object (for fluent API support)
     */
    public function setSongYear($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->song_year !== $v) {
            $this->song_year = $v;
            $this->modifiedColumns[] = SongPeer::SONG_YEAR;
        }


        return $this;
    } // setSongYear()

    /**
     * Set the value of [song_duration] column.
     *
     * @param string $v new value
     * @return Song The current object (for fluent API support)
     */
    public function setSongDuration($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->song_duration !== $v) {
            $this->song_duration = $v;
            $this->modifiedColumns[] = SongPeer::SONG_DURATION;
        }


        return $this;
    } // setSongDuration()

    /**
     * Set the value of [user_id] column.
     *
     * @param int $v new value
     * @return Song The current object (for fluent API support)
     */
    public function setUserId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->user_id !== $v) {
            $this->user_id = $v;
            $this->modifiedColumns[] = SongPeer::USER_ID;
        }

        if ($this->aUser !== null && $this->aUser->getUserId() !== $v) {
            $this->aUser = null;
        }


        return $this;
    } // setUserId()

    /**
     * Set the value of [artiste_id] column.
     *
     * @param int $v new value
     * @return Song The current object (for fluent API support)
     */
    public function setArtisteId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->artiste_id !== $v) {
            $this->artiste_id = $v;
            $this->modifiedColumns[] = SongPeer::ARTISTE_ID;
        }

        if ($this->aArtiste !== null && $this->aArtiste->getArtisteId() !== $v) {
            $this->aArtiste = null;
        }


        return $this;
    } // setArtisteId()

    /**
     * Set the value of [album_id] column.
     *
     * @param int $v new value
     * @return Song The current object (for fluent API support)
     */
    public function setAlbumId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->album_id !== $v) {
            $this->album_id = $v;
            $this->modifiedColumns[] = SongPeer::ALBUM_ID;
        }

        if ($this->aAlbum !== null && $this->aAlbum->getAlbumId() !== $v) {
            $this->aAlbum = null;
        }


        return $this;
    } // setAlbumId()

    /**
     * Set the value of [sort_id] column.
     *
     * @param int $v new value
     * @return Song The current object (for fluent API support)
     */
    public function setSortId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sort_id !== $v) {
            $this->sort_id = $v;
            $this->modifiedColumns[] = SongPeer::SORT_ID;
        }

        if ($this->aSort !== null && $this->aSort->getSortId() !== $v) {
            $this->aSort = null;
        }


        return $this;
    } // setSortId()

    /**
     * Set the value of [playlist_id] column.
     *
     * @param int $v new value
     * @return Song The current object (for fluent API support)
     */
    public function setPlaylistId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->playlist_id !== $v) {
            $this->playlist_id = $v;
            $this->modifiedColumns[] = SongPeer::PLAYLIST_ID;
        }

        if ($this->aPlaylist !== null && $this->aPlaylist->getPlaylistId() !== $v) {
            $this->aPlaylist = null;
        }


        return $this;
    } // setPlaylistId()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->song_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->song_name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->song_year = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->song_duration = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->user_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->artiste_id = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->album_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->sort_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->playlist_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 9; // 9 = SongPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Song object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aUser !== null && $this->user_id !== $this->aUser->getUserId()) {
            $this->aUser = null;
        }
        if ($this->aArtiste !== null && $this->artiste_id !== $this->aArtiste->getArtisteId()) {
            $this->aArtiste = null;
        }
        if ($this->aAlbum !== null && $this->album_id !== $this->aAlbum->getAlbumId()) {
            $this->aAlbum = null;
        }
        if ($this->aSort !== null && $this->sort_id !== $this->aSort->getSortId()) {
            $this->aSort = null;
        }
        if ($this->aPlaylist !== null && $this->playlist_id !== $this->aPlaylist->getPlaylistId()) {
            $this->aPlaylist = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SongPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aUser = null;
            $this->aArtiste = null;
            $this->aAlbum = null;
            $this->aSort = null;
            $this->aPlaylist = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SongQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                SongPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aUser !== null) {
                if ($this->aUser->isModified() || $this->aUser->isNew()) {
                    $affectedRows += $this->aUser->save($con);
                }
                $this->setUser($this->aUser);
            }

            if ($this->aArtiste !== null) {
                if ($this->aArtiste->isModified() || $this->aArtiste->isNew()) {
                    $affectedRows += $this->aArtiste->save($con);
                }
                $this->setArtiste($this->aArtiste);
            }

            if ($this->aAlbum !== null) {
                if ($this->aAlbum->isModified() || $this->aAlbum->isNew()) {
                    $affectedRows += $this->aAlbum->save($con);
                }
                $this->setAlbum($this->aAlbum);
            }

            if ($this->aSort !== null) {
                if ($this->aSort->isModified() || $this->aSort->isNew()) {
                    $affectedRows += $this->aSort->save($con);
                }
                $this->setSort($this->aSort);
            }

            if ($this->aPlaylist !== null) {
                if ($this->aPlaylist->isModified() || $this->aPlaylist->isNew()) {
                    $affectedRows += $this->aPlaylist->save($con);
                }
                $this->setPlaylist($this->aPlaylist);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = SongPeer::SONG_ID;
        if (null !== $this->song_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SongPeer::SONG_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SongPeer::SONG_ID)) {
            $modifiedColumns[':p' . $index++]  = '`song_id`';
        }
        if ($this->isColumnModified(SongPeer::SONG_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`song_name`';
        }
        if ($this->isColumnModified(SongPeer::SONG_YEAR)) {
            $modifiedColumns[':p' . $index++]  = '`song_year`';
        }
        if ($this->isColumnModified(SongPeer::SONG_DURATION)) {
            $modifiedColumns[':p' . $index++]  = '`song_duration`';
        }
        if ($this->isColumnModified(SongPeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = '`user_id`';
        }
        if ($this->isColumnModified(SongPeer::ARTISTE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`artiste_id`';
        }
        if ($this->isColumnModified(SongPeer::ALBUM_ID)) {
            $modifiedColumns[':p' . $index++]  = '`album_id`';
        }
        if ($this->isColumnModified(SongPeer::SORT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`sort_id`';
        }
        if ($this->isColumnModified(SongPeer::PLAYLIST_ID)) {
            $modifiedColumns[':p' . $index++]  = '`playlist_id`';
        }

        $sql = sprintf(
            'INSERT INTO `song` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`song_id`':
                        $stmt->bindValue($identifier, $this->song_id, PDO::PARAM_INT);
                        break;
                    case '`song_name`':
                        $stmt->bindValue($identifier, $this->song_name, PDO::PARAM_STR);
                        break;
                    case '`song_year`':
                        $stmt->bindValue($identifier, $this->song_year, PDO::PARAM_INT);
                        break;
                    case '`song_duration`':
                        $stmt->bindValue($identifier, $this->song_duration, PDO::PARAM_STR);
                        break;
                    case '`user_id`':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
                        break;
                    case '`artiste_id`':
                        $stmt->bindValue($identifier, $this->artiste_id, PDO::PARAM_INT);
                        break;
                    case '`album_id`':
                        $stmt->bindValue($identifier, $this->album_id, PDO::PARAM_INT);
                        break;
                    case '`sort_id`':
                        $stmt->bindValue($identifier, $this->sort_id, PDO::PARAM_INT);
                        break;
                    case '`playlist_id`':
                        $stmt->bindValue($identifier, $this->playlist_id, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setSongId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aUser !== null) {
                if (!$this->aUser->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
                }
            }

            if ($this->aArtiste !== null) {
                if (!$this->aArtiste->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aArtiste->getValidationFailures());
                }
            }

            if ($this->aAlbum !== null) {
                if (!$this->aAlbum->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aAlbum->getValidationFailures());
                }
            }

            if ($this->aSort !== null) {
                if (!$this->aSort->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSort->getValidationFailures());
                }
            }

            if ($this->aPlaylist !== null) {
                if (!$this->aPlaylist->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPlaylist->getValidationFailures());
                }
            }


            if (($retval = SongPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_FIELDNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_FIELDNAME)
    {
        $pos = SongPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getSongId();
                break;
            case 1:
                return $this->getSongName();
                break;
            case 2:
                return $this->getSongYear();
                break;
            case 3:
                return $this->getSongDuration();
                break;
            case 4:
                return $this->getUserId();
                break;
            case 5:
                return $this->getArtisteId();
                break;
            case 6:
                return $this->getAlbumId();
                break;
            case 7:
                return $this->getSortId();
                break;
            case 8:
                return $this->getPlaylistId();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_FIELDNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_FIELDNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Song'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Song'][$this->getPrimaryKey()] = true;
        $keys = SongPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getSongId(),
            $keys[1] => $this->getSongName(),
            $keys[2] => $this->getSongYear(),
            $keys[3] => $this->getSongDuration(),
            $keys[4] => $this->getUserId(),
            $keys[5] => $this->getArtisteId(),
            $keys[6] => $this->getAlbumId(),
            $keys[7] => $this->getSortId(),
            $keys[8] => $this->getPlaylistId(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aUser) {
                $result['User'] = $this->aUser->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aArtiste) {
                $result['Artiste'] = $this->aArtiste->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aAlbum) {
                $result['Album'] = $this->aAlbum->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSort) {
                $result['Sort'] = $this->aSort->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPlaylist) {
                $result['Playlist'] = $this->aPlaylist->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_FIELDNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_FIELDNAME)
    {
        $pos = SongPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setSongId($value);
                break;
            case 1:
                $this->setSongName($value);
                break;
            case 2:
                $this->setSongYear($value);
                break;
            case 3:
                $this->setSongDuration($value);
                break;
            case 4:
                $this->setUserId($value);
                break;
            case 5:
                $this->setArtisteId($value);
                break;
            case 6:
                $this->setAlbumId($value);
                break;
            case 7:
                $this->setSortId($value);
                break;
            case 8:
                $this->setPlaylistId($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_FIELDNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_FIELDNAME)
    {
        $keys = SongPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setSongId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSongName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSongYear($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSongDuration($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setUserId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setArtisteId($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAlbumId($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSortId($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPlaylistId($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SongPeer::DATABASE_NAME);

        if ($this->isColumnModified(SongPeer::SONG_ID)) $criteria->add(SongPeer::SONG_ID, $this->song_id);
        if ($this->isColumnModified(SongPeer::SONG_NAME)) $criteria->add(SongPeer::SONG_NAME, $this->song_name);
        if ($this->isColumnModified(SongPeer::SONG_YEAR)) $criteria->add(SongPeer::SONG_YEAR, $this->song_year);
        if ($this->isColumnModified(SongPeer::SONG_DURATION)) $criteria->add(SongPeer::SONG_DURATION, $this->song_duration);
        if ($this->isColumnModified(SongPeer::USER_ID)) $criteria->add(SongPeer::USER_ID, $this->user_id);
        if ($this->isColumnModified(SongPeer::ARTISTE_ID)) $criteria->add(SongPeer::ARTISTE_ID, $this->artiste_id);
        if ($this->isColumnModified(SongPeer::ALBUM_ID)) $criteria->add(SongPeer::ALBUM_ID, $this->album_id);
        if ($this->isColumnModified(SongPeer::SORT_ID)) $criteria->add(SongPeer::SORT_ID, $this->sort_id);
        if ($this->isColumnModified(SongPeer::PLAYLIST_ID)) $criteria->add(SongPeer::PLAYLIST_ID, $this->playlist_id);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(SongPeer::DATABASE_NAME);
        $criteria->add(SongPeer::SONG_ID, $this->song_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getSongId();
    }

    /**
     * Generic method to set the primary key (song_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setSongId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getSongId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Song (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSongName($this->getSongName());
        $copyObj->setSongYear($this->getSongYear());
        $copyObj->setSongDuration($this->getSongDuration());
        $copyObj->setUserId($this->getUserId());
        $copyObj->setArtisteId($this->getArtisteId());
        $copyObj->setAlbumId($this->getAlbumId());
        $copyObj->setSortId($this->getSortId());
        $copyObj->setPlaylistId($this->getPlaylistId());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setSongId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Song Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return SongPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SongPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a User object.
     *
     * @param             User $v
     * @return Song The current object (for fluent API support)
     * @throws PropelException
     */
    public function setUser(User $v = null)
    {
        if ($v === null) {
            $this->setUserId(NULL);
        } else {
            $this->setUserId($v->getUserId());
        }

        $this->aUser = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the User object, it will not be re-added.
        if ($v !== null) {
            $v->addSong($this);
        }


        return $this;
    }


    /**
     * Get the associated User object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return User The associated User object.
     * @throws PropelException
     */
    public function getUser(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aUser === null && ($this->user_id !== null) && $doQuery) {
            $this->aUser = UserQuery::create()->findPk($this->user_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aUser->addSongs($this);
             */
        }

        return $this->aUser;
    }

    /**
     * Declares an association between this object and a Artiste object.
     *
     * @param             Artiste $v
     * @return Song The current object (for fluent API support)
     * @throws PropelException
     */
    public function setArtiste(Artiste $v = null)
    {
        if ($v === null) {
            $this->setArtisteId(NULL);
        } else {
            $this->setArtisteId($v->getArtisteId());
        }

        $this->aArtiste = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Artiste object, it will not be re-added.
        if ($v !== null) {
            $v->addSong($this);
        }


        return $this;
    }


    /**
     * Get the associated Artiste object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Artiste The associated Artiste object.
     * @throws PropelException
     */
    public function getArtiste(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aArtiste === null && ($this->artiste_id !== null) && $doQuery) {
            $this->aArtiste = ArtisteQuery::create()->findPk($this->artiste_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aArtiste->addSongs($this);
             */
        }

        return $this->aArtiste;
    }

    /**
     * Declares an association between this object and a Album object.
     *
     * @param             Album $v
     * @return Song The current object (for fluent API support)
     * @throws PropelException
     */
    public function setAlbum(Album $v = null)
    {
        if ($v === null) {
            $this->setAlbumId(NULL);
        } else {
            $this->setAlbumId($v->getAlbumId());
        }

        $this->aAlbum = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Album object, it will not be re-added.
        if ($v !== null) {
            $v->addSong($this);
        }


        return $this;
    }


    /**
     * Get the associated Album object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Album The associated Album object.
     * @throws PropelException
     */
    public function getAlbum(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aAlbum === null && ($this->album_id !== null) && $doQuery) {
            $this->aAlbum = AlbumQuery::create()->findPk($this->album_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aAlbum->addSongs($this);
             */
        }

        return $this->aAlbum;
    }

    /**
     * Declares an association between this object and a Sort object.
     *
     * @param             Sort $v
     * @return Song The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSort(Sort $v = null)
    {
        if ($v === null) {
            $this->setSortId(NULL);
        } else {
            $this->setSortId($v->getSortId());
        }

        $this->aSort = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Sort object, it will not be re-added.
        if ($v !== null) {
            $v->addSong($this);
        }


        return $this;
    }


    /**
     * Get the associated Sort object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Sort The associated Sort object.
     * @throws PropelException
     */
    public function getSort(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSort === null && ($this->sort_id !== null) && $doQuery) {
            $this->aSort = SortQuery::create()->findPk($this->sort_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSort->addSongs($this);
             */
        }

        return $this->aSort;
    }

    /**
     * Declares an association between this object and a Playlist object.
     *
     * @param             Playlist $v
     * @return Song The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPlaylist(Playlist $v = null)
    {
        if ($v === null) {
            $this->setPlaylistId(NULL);
        } else {
            $this->setPlaylistId($v->getPlaylistId());
        }

        $this->aPlaylist = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Playlist object, it will not be re-added.
        if ($v !== null) {
            $v->addSong($this);
        }


        return $this;
    }


    /**
     * Get the associated Playlist object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Playlist The associated Playlist object.
     * @throws PropelException
     */
    public function getPlaylist(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPlaylist === null && ($this->playlist_id !== null) && $doQuery) {
            $this->aPlaylist = PlaylistQuery::create()->findPk($this->playlist_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPlaylist->addSongs($this);
             */
        }

        return $this->aPlaylist;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->song_id = null;
        $this->song_name = null;
        $this->song_year = null;
        $this->song_duration = null;
        $this->user_id = null;
        $this->artiste_id = null;
        $this->album_id = null;
        $this->sort_id = null;
        $this->playlist_id = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->aUser instanceof Persistent) {
              $this->aUser->clearAllReferences($deep);
            }
            if ($this->aArtiste instanceof Persistent) {
              $this->aArtiste->clearAllReferences($deep);
            }
            if ($this->aAlbum instanceof Persistent) {
              $this->aAlbum->clearAllReferences($deep);
            }
            if ($this->aSort instanceof Persistent) {
              $this->aSort->clearAllReferences($deep);
            }
            if ($this->aPlaylist instanceof Persistent) {
              $this->aPlaylist->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aUser = null;
        $this->aArtiste = null;
        $this->aAlbum = null;
        $this->aSort = null;
        $this->aPlaylist = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SongPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
