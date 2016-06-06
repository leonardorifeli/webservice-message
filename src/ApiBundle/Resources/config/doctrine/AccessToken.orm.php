<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setPrimaryTable(array(
   'name' => 'access_token',
  ));
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'columnName' => 'id',
   'type' => 'integer',
   'nullable' => false,
   'unsigned' => false,
   'id' => true,
  ));
$metadata->mapField(array(
   'fieldName' => 'token',
   'columnName' => 'token',
   'type' => 'string',
   'nullable' => false,
   'length' => 255,
   'fixed' => false,
  ));
$metadata->mapField(array(
   'fieldName' => 'isActive',
   'columnName' => 'is_active',
   'type' => 'integer',
   'nullable' => false,
   'unsigned' => false,
  ));
$metadata->mapField(array(
   'fieldName' => 'updatedAt',
   'columnName' => 'updated_at',
   'type' => 'datetime',
   'nullable' => false,
  ));
$metadata->mapField(array(
   'fieldName' => 'createdAt',
   'columnName' => 'created_at',
   'type' => 'datetime',
   'nullable' => false,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_IDENTITY);