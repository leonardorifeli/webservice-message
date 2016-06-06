<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'ApiBundle\Business\Repository\AccessTokenRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'token',
   'fieldName' => 'token',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'created_at',
   'fieldName' => 'createdAt',
   'type' => 'datetime',
  ));
$metadata->mapField(array(
   'columnName' => 'updated_at',
   'fieldName' => 'updatedAt',
   'type' => 'datetime',
  ));
$metadata->mapField(array(
   'columnName' => 'is_active',
   'fieldName' => 'isActive',
   'type' => 'boolean',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);