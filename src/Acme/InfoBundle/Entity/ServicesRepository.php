<?php

namespace Acme\InfoBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ServicesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ServicesRepository extends EntityRepository
{
    public function getProductListWithPagination($order_by = '', $offset = 0, $limit = 0) {
	

    //Create query builder for languages table
    $qb = $this->createQueryBuilder('l');

    //Show all if offset and limit not set, also show all when limit is 0
    if ((isset($offset)) && (isset($limit))) {
    if ($limit > 0) {
    	
    $qb->setFirstResult($offset);
    $qb->setMaxResults($limit);
    $qb->orderBy('l.name', $order_by);
    }
    //else we want to display all items on one page
    }
    //Adding defined sorting parameters from variable into query
   /* foreach ($order_by as $key => $value) {
    $qb->add('orderBy', 'l.' . $key . ' ' . $value);
    }*/
    //Get our query
    
    $q = $qb->getQuery();

    //Return result
    return $q->getResult();
    }
    public function getIdCount() {
	    //Create query builder for languages table
	    $qb = $this->createQueryBuilder('l');
	    //Add Count expression to query
	    $qb->add('select', $qb->expr()->count('l'));
	    //Get our query
	    $q = $qb->getQuery();
	    //Return number of items
	    return $q->getSingleScalarResult();
    }
}
