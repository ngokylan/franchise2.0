<?php
/** @package Franchise::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Phreezable.php");
require_once("AccountMap.php");

/**
 * AccountDAO provides object-oriented access to the account table.  This
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
class AccountDAO extends Phreezable
{
	/** @var int */
	public $Id;

	/** @var string */
	public $Firstname;

	/** @var string */
	public $Lastname;

	/** @var int */
	public $AccountTypeId;

	/** @var int */
	public $CompanyId;

	/** @var string */
	public $Email;

	/** @var string */
	public $Phone;

	/** @var string */
	public $Mobile;

	/** @var string */
	public $Address;

	/** @var string */
	public $Suburb;

	/** @var int */
	public $Postcode;

	/** @var string */
	public $State;

	/** @var string */
	public $City;

	/** @var string */
	public $Password;

	/** @var timestamp */
	public $CreatedDate;

	/** @var timestamp */
	public $UpdatedDate;

	/** @var int */
	public $Status;



}
?>