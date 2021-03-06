<?php
/** @package Franchise::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("LeadMap.php");

/**
 * LeadDAO provides object-oriented access to the lead table.  This
 * class is automatically generated by ClassBuilder.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the Model class which is extended from this DAO class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package Franchise::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class LeadDAO extends Phreezable
{
	/** @var int */
	public $Id;

	/** @var int */
	public $Status;

	/** @var int */
	public $StateId;

	/** @var int */
	public $CustomerId;

	/** @var int */
	public $AccountId;


	/** @var timestamp */
	public $CreatedDate;

	/** @var timestamp */
	public $UpdatedDate;

	/** @var int */
	public $ServiceId;
}
?>