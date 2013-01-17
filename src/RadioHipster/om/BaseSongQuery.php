<?php


/**
 * Base class that represents a query for the 'song' table.
 *
 *
 *
 * @method SongQuery orderBySongId($order = Criteria::ASC) Order by the song_id column
 * @method SongQuery orderBySongName($order = Criteria::ASC) Order by the song_name column
 * @method SongQuery orderBySongYear($order = Criteria::ASC) Order by the song_year column
 * @method SongQuery orderBySongDuration($order = Criteria::ASC) Order by the song_duration column
 * @method SongQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method SongQuery orderByArtisteId($order = Criteria::ASC) Order by the artiste_id column
 * @method SongQuery orderByAlbumId($order = Criteria::ASC) Order by the album_id column
 * @method SongQuery orderBySortId($order = Criteria::ASC) Order by the sort_id column
 *
 * @method SongQuery groupBySongId() Group by the song_id column
 * @method SongQuery groupBySongName() Group by the song_name column
 * @method SongQuery groupBySongYear() Group by the song_year column
 * @method SongQuery groupBySongDuration() Group by the song_duration column
 * @method SongQuery groupByUserId() Group by the user_id column
 * @method SongQuery groupByArtisteId() Group by the artiste_id column
 * @method SongQuery groupByAlbumId() Group by the album_id column
 * @method SongQuery groupBySortId() Group by the sort_id column
 *
 * @method SongQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SongQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SongQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SongQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method SongQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method SongQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method SongQuery leftJoinArtiste($relationAlias = null) Adds a LEFT JOIN clause to the query using the Artiste relation
 * @method SongQuery rightJoinArtiste($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Artiste relation
 * @method SongQuery innerJoinArtiste($relationAlias = null) Adds a INNER JOIN clause to the query using the Artiste relation
 *
 * @method SongQuery leftJoinAlbum($relationAlias = null) Adds a LEFT JOIN clause to the query using the Album relation
 * @method SongQuery rightJoinAlbum($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Album relation
 * @method SongQuery innerJoinAlbum($relationAlias = null) Adds a INNER JOIN clause to the query using the Album relation
 *
 * @method SongQuery leftJoinSort($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sort relation
 * @method SongQuery rightJoinSort($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sort relation
 * @method SongQuery innerJoinSort($relationAlias = null) Adds a INNER JOIN clause to the query using the Sort relation
 *
 * @method SongQuery leftJoinPlaylist($relationAlias = null) Adds a LEFT JOIN clause to the query using the Playlist relation
 * @method SongQuery rightJoinPlaylist($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Playlist relation
 * @method SongQuery innerJoinPlaylist($relationAlias = null) Adds a INNER JOIN clause to the query using the Playlist relation
 *
 * @method Song findOne(PropelPDO $con = null) Return the first Song matching the query
 * @method Song findOneOrCreate(PropelPDO $con = null) Return the first Song matching the query, or a new Song object populated from the query conditions when no match is found
 *
 * @method Song findOneBySongName(string $song_name) Return the first Song filtered by the song_name column
 * @method Song findOneBySongYear(int $song_year) Return the first Song filtered by the song_year column
 * @method Song findOneBySongDuration(string $song_duration) Return the first Song filtered by the song_duration column
 * @method Song findOneByUserId(int $user_id) Return the first Song filtered by the user_id column
 * @method Song findOneByArtisteId(int $artiste_id) Return the first Song filtered by the artiste_id column
 * @method Song findOneByAlbumId(int $album_id) Return the first Song filtered by the album_id column
 * @method Song findOneBySortId(int $sort_id) Return the first Song filtered by the sort_id column
 *
 * @method array findBySongId(int $song_id) Return Song objects filtered by the song_id column
 * @method array findBySongName(string $song_name) Return Song objects filtered by the song_name column
 * @method array findBySongYear(int $song_year) Return Song objects filtered by the song_year column
 * @method array findBySongDuration(string $song_duration) Return Song objects filtered by the song_duration column
 * @method array findByUserId(int $user_id) Return Song objects filtered by the user_id column
 * @method array findByArtisteId(int $artiste_id) Return Song objects filtered by the artiste_id column
 * @method array findByAlbumId(int $album_id) Return Song objects filtered by the album_id column
 * @method array findBySortId(int $sort_id) Return Song objects filtered by the sort_id column
 *
 * @package    propel.generator.RadioHipster.om
 */
abstract class BaseSongQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSongQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'etuwebdev_radiohipster', $modelName = 'Song', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SongQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SongQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SongQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SongQuery) {
            return $criteria;
        }
        $query = new SongQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Song|Song[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SongPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SongPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Song A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneBySongId($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Song A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `song_id`, `song_name`, `song_year`, `song_duration`, `user_id`, `artiste_id`, `album_id`, `sort_id` FROM `song` WHERE `song_id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Song();
            $obj->hydrate($row);
            SongPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Song|Song[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Song[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return SongQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SongPeer::SONG_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SongQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SongPeer::SONG_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the song_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySongId(1234); // WHERE song_id = 1234
     * $query->filterBySongId(array(12, 34)); // WHERE song_id IN (12, 34)
     * $query->filterBySongId(array('min' => 12)); // WHERE song_id >= 12
     * $query->filterBySongId(array('max' => 12)); // WHERE song_id <= 12
     * </code>
     *
     * @param     mixed $songId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SongQuery The current query, for fluid interface
     */
    public function filterBySongId($songId = null, $comparison = null)
    {
        if (is_array($songId)) {
            $useMinMax = false;
            if (isset($songId['min'])) {
                $this->addUsingAlias(SongPeer::SONG_ID, $songId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($songId['max'])) {
                $this->addUsingAlias(SongPeer::SONG_ID, $songId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SongPeer::SONG_ID, $songId, $comparison);
    }

    /**
     * Filter the query on the song_name column
     *
     * Example usage:
     * <code>
     * $query->filterBySongName('fooValue');   // WHERE song_name = 'fooValue'
     * $query->filterBySongName('%fooValue%'); // WHERE song_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $songName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SongQuery The current query, for fluid interface
     */
    public function filterBySongName($songName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($songName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $songName)) {
                $songName = str_replace('*', '%', $songName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SongPeer::SONG_NAME, $songName, $comparison);
    }

    /**
     * Filter the query on the song_year column
     *
     * Example usage:
     * <code>
     * $query->filterBySongYear(1234); // WHERE song_year = 1234
     * $query->filterBySongYear(array(12, 34)); // WHERE song_year IN (12, 34)
     * $query->filterBySongYear(array('min' => 12)); // WHERE song_year >= 12
     * $query->filterBySongYear(array('max' => 12)); // WHERE song_year <= 12
     * </code>
     *
     * @param     mixed $songYear The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SongQuery The current query, for fluid interface
     */
    public function filterBySongYear($songYear = null, $comparison = null)
    {
        if (is_array($songYear)) {
            $useMinMax = false;
            if (isset($songYear['min'])) {
                $this->addUsingAlias(SongPeer::SONG_YEAR, $songYear['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($songYear['max'])) {
                $this->addUsingAlias(SongPeer::SONG_YEAR, $songYear['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SongPeer::SONG_YEAR, $songYear, $comparison);
    }

    /**
     * Filter the query on the song_duration column
     *
     * Example usage:
     * <code>
     * $query->filterBySongDuration('fooValue');   // WHERE song_duration = 'fooValue'
     * $query->filterBySongDuration('%fooValue%'); // WHERE song_duration LIKE '%fooValue%'
     * </code>
     *
     * @param     string $songDuration The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SongQuery The current query, for fluid interface
     */
    public function filterBySongDuration($songDuration = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($songDuration)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $songDuration)) {
                $songDuration = str_replace('*', '%', $songDuration);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SongPeer::SONG_DURATION, $songDuration, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id >= 12
     * $query->filterByUserId(array('max' => 12)); // WHERE user_id <= 12
     * </code>
     *
     * @see       filterByUser()
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SongQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(SongPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(SongPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SongPeer::USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the artiste_id column
     *
     * Example usage:
     * <code>
     * $query->filterByArtisteId(1234); // WHERE artiste_id = 1234
     * $query->filterByArtisteId(array(12, 34)); // WHERE artiste_id IN (12, 34)
     * $query->filterByArtisteId(array('min' => 12)); // WHERE artiste_id >= 12
     * $query->filterByArtisteId(array('max' => 12)); // WHERE artiste_id <= 12
     * </code>
     *
     * @see       filterByArtiste()
     *
     * @param     mixed $artisteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SongQuery The current query, for fluid interface
     */
    public function filterByArtisteId($artisteId = null, $comparison = null)
    {
        if (is_array($artisteId)) {
            $useMinMax = false;
            if (isset($artisteId['min'])) {
                $this->addUsingAlias(SongPeer::ARTISTE_ID, $artisteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($artisteId['max'])) {
                $this->addUsingAlias(SongPeer::ARTISTE_ID, $artisteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SongPeer::ARTISTE_ID, $artisteId, $comparison);
    }

    /**
     * Filter the query on the album_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAlbumId(1234); // WHERE album_id = 1234
     * $query->filterByAlbumId(array(12, 34)); // WHERE album_id IN (12, 34)
     * $query->filterByAlbumId(array('min' => 12)); // WHERE album_id >= 12
     * $query->filterByAlbumId(array('max' => 12)); // WHERE album_id <= 12
     * </code>
     *
     * @see       filterByAlbum()
     *
     * @param     mixed $albumId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SongQuery The current query, for fluid interface
     */
    public function filterByAlbumId($albumId = null, $comparison = null)
    {
        if (is_array($albumId)) {
            $useMinMax = false;
            if (isset($albumId['min'])) {
                $this->addUsingAlias(SongPeer::ALBUM_ID, $albumId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($albumId['max'])) {
                $this->addUsingAlias(SongPeer::ALBUM_ID, $albumId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SongPeer::ALBUM_ID, $albumId, $comparison);
    }

    /**
     * Filter the query on the sort_id column
     *
     * Example usage:
     * <code>
     * $query->filterBySortId(1234); // WHERE sort_id = 1234
     * $query->filterBySortId(array(12, 34)); // WHERE sort_id IN (12, 34)
     * $query->filterBySortId(array('min' => 12)); // WHERE sort_id >= 12
     * $query->filterBySortId(array('max' => 12)); // WHERE sort_id <= 12
     * </code>
     *
     * @see       filterBySort()
     *
     * @param     mixed $sortId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SongQuery The current query, for fluid interface
     */
    public function filterBySortId($sortId = null, $comparison = null)
    {
        if (is_array($sortId)) {
            $useMinMax = false;
            if (isset($sortId['min'])) {
                $this->addUsingAlias(SongPeer::SORT_ID, $sortId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sortId['max'])) {
                $this->addUsingAlias(SongPeer::SORT_ID, $sortId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SongPeer::SORT_ID, $sortId, $comparison);
    }

    /**
     * Filter the query by a related User object
     *
     * @param   User|PropelObjectCollection $user The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SongQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByUser($user, $comparison = null)
    {
        if ($user instanceof User) {
            return $this
                ->addUsingAlias(SongPeer::USER_ID, $user->getUserId(), $comparison);
        } elseif ($user instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SongPeer::USER_ID, $user->toKeyValue('PrimaryKey', 'UserId'), $comparison);
        } else {
            throw new PropelException('filterByUser() only accepts arguments of type User or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the User relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SongQuery The current query, for fluid interface
     */
    public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('User');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'User');
        }

        return $this;
    }

    /**
     * Use the User relation User object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UserQuery A secondary query class using the current class as primary query
     */
    public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'User', 'UserQuery');
    }

    /**
     * Filter the query by a related Artiste object
     *
     * @param   Artiste|PropelObjectCollection $artiste The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SongQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByArtiste($artiste, $comparison = null)
    {
        if ($artiste instanceof Artiste) {
            return $this
                ->addUsingAlias(SongPeer::ARTISTE_ID, $artiste->getArtisteId(), $comparison);
        } elseif ($artiste instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SongPeer::ARTISTE_ID, $artiste->toKeyValue('PrimaryKey', 'ArtisteId'), $comparison);
        } else {
            throw new PropelException('filterByArtiste() only accepts arguments of type Artiste or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Artiste relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SongQuery The current query, for fluid interface
     */
    public function joinArtiste($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Artiste');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Artiste');
        }

        return $this;
    }

    /**
     * Use the Artiste relation Artiste object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ArtisteQuery A secondary query class using the current class as primary query
     */
    public function useArtisteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinArtiste($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Artiste', 'ArtisteQuery');
    }

    /**
     * Filter the query by a related Album object
     *
     * @param   Album|PropelObjectCollection $album The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SongQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAlbum($album, $comparison = null)
    {
        if ($album instanceof Album) {
            return $this
                ->addUsingAlias(SongPeer::ALBUM_ID, $album->getAlbumId(), $comparison);
        } elseif ($album instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SongPeer::ALBUM_ID, $album->toKeyValue('PrimaryKey', 'AlbumId'), $comparison);
        } else {
            throw new PropelException('filterByAlbum() only accepts arguments of type Album or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Album relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SongQuery The current query, for fluid interface
     */
    public function joinAlbum($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Album');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Album');
        }

        return $this;
    }

    /**
     * Use the Album relation Album object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AlbumQuery A secondary query class using the current class as primary query
     */
    public function useAlbumQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAlbum($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Album', 'AlbumQuery');
    }

    /**
     * Filter the query by a related Sort object
     *
     * @param   Sort|PropelObjectCollection $sort The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SongQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySort($sort, $comparison = null)
    {
        if ($sort instanceof Sort) {
            return $this
                ->addUsingAlias(SongPeer::SORT_ID, $sort->getSortId(), $comparison);
        } elseif ($sort instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SongPeer::SORT_ID, $sort->toKeyValue('PrimaryKey', 'SortId'), $comparison);
        } else {
            throw new PropelException('filterBySort() only accepts arguments of type Sort or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Sort relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SongQuery The current query, for fluid interface
     */
    public function joinSort($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Sort');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Sort');
        }

        return $this;
    }

    /**
     * Use the Sort relation Sort object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SortQuery A secondary query class using the current class as primary query
     */
    public function useSortQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSort($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Sort', 'SortQuery');
    }

    /**
     * Filter the query by a related Playlist object
     *
     * @param   Playlist|PropelObjectCollection $playlist  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SongQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPlaylist($playlist, $comparison = null)
    {
        if ($playlist instanceof Playlist) {
            return $this
                ->addUsingAlias(SongPeer::SONG_ID, $playlist->getSongId(), $comparison);
        } elseif ($playlist instanceof PropelObjectCollection) {
            return $this
                ->usePlaylistQuery()
                ->filterByPrimaryKeys($playlist->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPlaylist() only accepts arguments of type Playlist or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Playlist relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SongQuery The current query, for fluid interface
     */
    public function joinPlaylist($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Playlist');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Playlist');
        }

        return $this;
    }

    /**
     * Use the Playlist relation Playlist object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PlaylistQuery A secondary query class using the current class as primary query
     */
    public function usePlaylistQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPlaylist($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Playlist', 'PlaylistQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Song $song Object to remove from the list of results
     *
     * @return SongQuery The current query, for fluid interface
     */
    public function prune($song = null)
    {
        if ($song) {
            $this->addUsingAlias(SongPeer::SONG_ID, $song->getSongId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
