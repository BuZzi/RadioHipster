<?php


/**
 * Base class that represents a query for the 'album' table.
 *
 *
 *
 * @method AlbumQuery orderByAlbumId($order = Criteria::ASC) Order by the album_id column
 * @method AlbumQuery orderByAlbumName($order = Criteria::ASC) Order by the album_name column
 *
 * @method AlbumQuery groupByAlbumId() Group by the album_id column
 * @method AlbumQuery groupByAlbumName() Group by the album_name column
 *
 * @method AlbumQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AlbumQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AlbumQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AlbumQuery leftJoinSong($relationAlias = null) Adds a LEFT JOIN clause to the query using the Song relation
 * @method AlbumQuery rightJoinSong($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Song relation
 * @method AlbumQuery innerJoinSong($relationAlias = null) Adds a INNER JOIN clause to the query using the Song relation
 *
 * @method Album findOne(PropelPDO $con = null) Return the first Album matching the query
 * @method Album findOneOrCreate(PropelPDO $con = null) Return the first Album matching the query, or a new Album object populated from the query conditions when no match is found
 *
 * @method Album findOneByAlbumName(string $album_name) Return the first Album filtered by the album_name column
 *
 * @method array findByAlbumId(int $album_id) Return Album objects filtered by the album_id column
 * @method array findByAlbumName(string $album_name) Return Album objects filtered by the album_name column
 *
 * @package    propel.generator.RadioHipster.om
 */
abstract class BaseAlbumQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAlbumQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'etuwebdev_radiohipster', $modelName = 'Album', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AlbumQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AlbumQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AlbumQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AlbumQuery) {
            return $criteria;
        }
        $query = new AlbumQuery();
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
     * @return   Album|Album[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AlbumPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AlbumPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Album A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByAlbumId($key, $con = null)
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
     * @return                 Album A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `album_id`, `album_name` FROM `album` WHERE `album_id` = :p0';
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
            $obj = new Album();
            $obj->hydrate($row);
            AlbumPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Album|Album[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Album[]|mixed the list of results, formatted by the current formatter
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
     * @return AlbumQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AlbumPeer::ALBUM_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AlbumQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AlbumPeer::ALBUM_ID, $keys, Criteria::IN);
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
     * @param     mixed $albumId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlbumQuery The current query, for fluid interface
     */
    public function filterByAlbumId($albumId = null, $comparison = null)
    {
        if (is_array($albumId)) {
            $useMinMax = false;
            if (isset($albumId['min'])) {
                $this->addUsingAlias(AlbumPeer::ALBUM_ID, $albumId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($albumId['max'])) {
                $this->addUsingAlias(AlbumPeer::ALBUM_ID, $albumId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AlbumPeer::ALBUM_ID, $albumId, $comparison);
    }

    /**
     * Filter the query on the album_name column
     *
     * Example usage:
     * <code>
     * $query->filterByAlbumName('fooValue');   // WHERE album_name = 'fooValue'
     * $query->filterByAlbumName('%fooValue%'); // WHERE album_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $albumName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AlbumQuery The current query, for fluid interface
     */
    public function filterByAlbumName($albumName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($albumName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $albumName)) {
                $albumName = str_replace('*', '%', $albumName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AlbumPeer::ALBUM_NAME, $albumName, $comparison);
    }

    /**
     * Filter the query by a related Song object
     *
     * @param   Song|PropelObjectCollection $song  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AlbumQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySong($song, $comparison = null)
    {
        if ($song instanceof Song) {
            return $this
                ->addUsingAlias(AlbumPeer::ALBUM_ID, $song->getAlbumId(), $comparison);
        } elseif ($song instanceof PropelObjectCollection) {
            return $this
                ->useSongQuery()
                ->filterByPrimaryKeys($song->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySong() only accepts arguments of type Song or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Song relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AlbumQuery The current query, for fluid interface
     */
    public function joinSong($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Song');

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
            $this->addJoinObject($join, 'Song');
        }

        return $this;
    }

    /**
     * Use the Song relation Song object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SongQuery A secondary query class using the current class as primary query
     */
    public function useSongQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSong($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Song', 'SongQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Album $album Object to remove from the list of results
     *
     * @return AlbumQuery The current query, for fluid interface
     */
    public function prune($album = null)
    {
        if ($album) {
            $this->addUsingAlias(AlbumPeer::ALBUM_ID, $album->getAlbumId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
