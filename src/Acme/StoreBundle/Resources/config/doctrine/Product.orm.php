<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'Acme\StoreBundle\Entity\ProductRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'category',
   'fieldName' => 'category',
   'type' => 'string',
   'length' => '255',
  ));
$metadata->mapField(array(
   'columnName' => 'name',
   'fieldName' => 'name',
   'type' => 'string',
   'length' => '255',
  ));
$metadata->mapField(array(
   'columnName' => 'price',
   'fieldName' => 'price',
   'type' => 'float',
  ));
$metadata->mapField(array(
   'columnName' => 'description',
   'fieldName' => 'description',
   'type' => 'text',
  ));
$metadata->mapField(array(
   'columnName' => 'image',
   'fieldName' => 'image',
   'type' => 'string',
   'length' => '255',    
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);
