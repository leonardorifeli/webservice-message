<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'MessageBundle\BusinessRepository\MessageRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'content',
   'fieldName' => 'content',
   'type' => 'text',
  ));
$metadata->mapField(array(
   'columnName' => 'accessToken',
   'fieldName' => 'accessToken',
   'type' => 'integer',
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
   'columnName' => 'status',
   'fieldName' => 'status',
   'type' => 'integer',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);