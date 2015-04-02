<?php
/** @package    Franchise::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Criteria.php");

/**
 * UserCriteria allows custom querying for the User object.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the ModelCriteria class which is extended from this class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @inheritdocs
 * @package Franchise::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class UserCriteriaDAO extends Criteria
{

	public $Id_Equals;
	public $Id_NotEquals;
	public $Id_IsLike;
	public $Id_IsNotLike;
	public $Id_BeginsWith;
	public $Id_EndsWith;
	public $Id_GreaterThan;
	public $Id_GreaterThanOrEqual;
	public $Id_LessThan;
	public $Id_LessThanOrEqual;
	public $Id_In;
	public $Id_IsNotEmpty;
	public $Id_IsEmpty;
	public $Id_BitwiseOr;
	public $Id_BitwiseAnd;
	public $Code_Equals;
	public $Code_NotEquals;
	public $Code_IsLike;
	public $Code_IsNotLike;
	public $Code_BeginsWith;
	public $Code_EndsWith;
	public $Code_GreaterThan;
	public $Code_GreaterThanOrEqual;
	public $Code_LessThan;
	public $Code_LessThanOrEqual;
	public $Code_In;
	public $Code_IsNotEmpty;
	public $Code_IsEmpty;
	public $Code_BitwiseOr;
	public $Code_BitwiseAnd;
	public $RoleId_Equals;
	public $RoleId_NotEquals;
	public $RoleId_IsLike;
	public $RoleId_IsNotLike;
	public $RoleId_BeginsWith;
	public $RoleId_EndsWith;
	public $RoleId_GreaterThan;
	public $RoleId_GreaterThanOrEqual;
	public $RoleId_LessThan;
	public $RoleId_LessThanOrEqual;
	public $RoleId_In;
	public $RoleId_IsNotEmpty;
	public $RoleId_IsEmpty;
	public $RoleId_BitwiseOr;
	public $RoleId_BitwiseAnd;
	public $Username_Equals;
	public $Username_NotEquals;
	public $Username_IsLike;
	public $Username_IsNotLike;
	public $Username_BeginsWith;
	public $Username_EndsWith;
	public $Username_GreaterThan;
	public $Username_GreaterThanOrEqual;
	public $Username_LessThan;
	public $Username_LessThanOrEqual;
	public $Username_In;
	public $Username_IsNotEmpty;
	public $Username_IsEmpty;
	public $Username_BitwiseOr;
	public $Username_BitwiseAnd;
	public $Password_Equals;
	public $Password_NotEquals;
	public $Password_IsLike;
	public $Password_IsNotLike;
	public $Password_BeginsWith;
	public $Password_EndsWith;
	public $Password_GreaterThan;
	public $Password_GreaterThanOrEqual;
	public $Password_LessThan;
	public $Password_LessThanOrEqual;
	public $Password_In;
	public $Password_IsNotEmpty;
	public $Password_IsEmpty;
	public $Password_BitwiseOr;
	public $Password_BitwiseAnd;
	public $FirstName_Equals;
	public $FirstName_NotEquals;
	public $FirstName_IsLike;
	public $FirstName_IsNotLike;
	public $FirstName_BeginsWith;
	public $FirstName_EndsWith;
	public $FirstName_GreaterThan;
	public $FirstName_GreaterThanOrEqual;
	public $FirstName_LessThan;
	public $FirstName_LessThanOrEqual;
	public $FirstName_In;
	public $FirstName_IsNotEmpty;
	public $FirstName_IsEmpty;
	public $FirstName_BitwiseOr;
	public $FirstName_BitwiseAnd;
	public $LastName_Equals;
	public $LastName_NotEquals;
	public $LastName_IsLike;
	public $LastName_IsNotLike;
	public $LastName_BeginsWith;
	public $LastName_EndsWith;
	public $LastName_GreaterThan;
	public $LastName_GreaterThanOrEqual;
	public $LastName_LessThan;
	public $LastName_LessThanOrEqual;
	public $LastName_In;
	public $LastName_IsNotEmpty;
	public $LastName_IsEmpty;
	public $LastName_BitwiseOr;
	public $LastName_BitwiseAnd;
	public $AccountTypeId_Equals;
	public $AccountTypeId_NotEquals;
	public $AccountTypeId_IsLike;
	public $AccountTypeId_IsNotLike;
	public $AccountTypeId_BeginsWith;
	public $AccountTypeId_EndsWith;
	public $AccountTypeId_GreaterThan;
	public $AccountTypeId_GreaterThanOrEqual;
	public $AccountTypeId_LessThan;
	public $AccountTypeId_LessThanOrEqual;
	public $AccountTypeId_In;
	public $AccountTypeId_IsNotEmpty;
	public $AccountTypeId_IsEmpty;
	public $AccountTypeId_BitwiseOr;
	public $AccountTypeId_BitwiseAnd;
	public $CompanyId_Equals;
	public $CompanyId_NotEquals;
	public $CompanyId_IsLike;
	public $CompanyId_IsNotLike;
	public $CompanyId_BeginsWith;
	public $CompanyId_EndsWith;
	public $CompanyId_GreaterThan;
	public $CompanyId_GreaterThanOrEqual;
	public $CompanyId_LessThan;
	public $CompanyId_LessThanOrEqual;
	public $CompanyId_In;
	public $CompanyId_IsNotEmpty;
	public $CompanyId_IsEmpty;
	public $CompanyId_BitwiseOr;
	public $CompanyId_BitwiseAnd;
	public $Email_Equals;
	public $Email_NotEquals;
	public $Email_IsLike;
	public $Email_IsNotLike;
	public $Email_BeginsWith;
	public $Email_EndsWith;
	public $Email_GreaterThan;
	public $Email_GreaterThanOrEqual;
	public $Email_LessThan;
	public $Email_LessThanOrEqual;
	public $Email_In;
	public $Email_IsNotEmpty;
	public $Email_IsEmpty;
	public $Email_BitwiseOr;
	public $Email_BitwiseAnd;
	public $Phone_Equals;
	public $Phone_NotEquals;
	public $Phone_IsLike;
	public $Phone_IsNotLike;
	public $Phone_BeginsWith;
	public $Phone_EndsWith;
	public $Phone_GreaterThan;
	public $Phone_GreaterThanOrEqual;
	public $Phone_LessThan;
	public $Phone_LessThanOrEqual;
	public $Phone_In;
	public $Phone_IsNotEmpty;
	public $Phone_IsEmpty;
	public $Phone_BitwiseOr;
	public $Phone_BitwiseAnd;
	public $Mobile_Equals;
	public $Mobile_NotEquals;
	public $Mobile_IsLike;
	public $Mobile_IsNotLike;
	public $Mobile_BeginsWith;
	public $Mobile_EndsWith;
	public $Mobile_GreaterThan;
	public $Mobile_GreaterThanOrEqual;
	public $Mobile_LessThan;
	public $Mobile_LessThanOrEqual;
	public $Mobile_In;
	public $Mobile_IsNotEmpty;
	public $Mobile_IsEmpty;
	public $Mobile_BitwiseOr;
	public $Mobile_BitwiseAnd;
	public $Address_Equals;
	public $Address_NotEquals;
	public $Address_IsLike;
	public $Address_IsNotLike;
	public $Address_BeginsWith;
	public $Address_EndsWith;
	public $Address_GreaterThan;
	public $Address_GreaterThanOrEqual;
	public $Address_LessThan;
	public $Address_LessThanOrEqual;
	public $Address_In;
	public $Address_IsNotEmpty;
	public $Address_IsEmpty;
	public $Address_BitwiseOr;
	public $Address_BitwiseAnd;
	public $Surburb_Equals;
	public $Surburb_NotEquals;
	public $Surburb_IsLike;
	public $Surburb_IsNotLike;
	public $Surburb_BeginsWith;
	public $Surburb_EndsWith;
	public $Surburb_GreaterThan;
	public $Surburb_GreaterThanOrEqual;
	public $Surburb_LessThan;
	public $Surburb_LessThanOrEqual;
	public $Surburb_In;
	public $Surburb_IsNotEmpty;
	public $Surburb_IsEmpty;
	public $Surburb_BitwiseOr;
	public $Surburb_BitwiseAnd;
	public $Postcode_Equals;
	public $Postcode_NotEquals;
	public $Postcode_IsLike;
	public $Postcode_IsNotLike;
	public $Postcode_BeginsWith;
	public $Postcode_EndsWith;
	public $Postcode_GreaterThan;
	public $Postcode_GreaterThanOrEqual;
	public $Postcode_LessThan;
	public $Postcode_LessThanOrEqual;
	public $Postcode_In;
	public $Postcode_IsNotEmpty;
	public $Postcode_IsEmpty;
	public $Postcode_BitwiseOr;
	public $Postcode_BitwiseAnd;
	public $State_Equals;
	public $State_NotEquals;
	public $State_IsLike;
	public $State_IsNotLike;
	public $State_BeginsWith;
	public $State_EndsWith;
	public $State_GreaterThan;
	public $State_GreaterThanOrEqual;
	public $State_LessThan;
	public $State_LessThanOrEqual;
	public $State_In;
	public $State_IsNotEmpty;
	public $State_IsEmpty;
	public $State_BitwiseOr;
	public $State_BitwiseAnd;
	public $City_Equals;
	public $City_NotEquals;
	public $City_IsLike;
	public $City_IsNotLike;
	public $City_BeginsWith;
	public $City_EndsWith;
	public $City_GreaterThan;
	public $City_GreaterThanOrEqual;
	public $City_LessThan;
	public $City_LessThanOrEqual;
	public $City_In;
	public $City_IsNotEmpty;
	public $City_IsEmpty;
	public $City_BitwiseOr;
	public $City_BitwiseAnd;
	public $CreatedDate_Equals;
	public $CreatedDate_NotEquals;
	public $CreatedDate_IsLike;
	public $CreatedDate_IsNotLike;
	public $CreatedDate_BeginsWith;
	public $CreatedDate_EndsWith;
	public $CreatedDate_GreaterThan;
	public $CreatedDate_GreaterThanOrEqual;
	public $CreatedDate_LessThan;
	public $CreatedDate_LessThanOrEqual;
	public $CreatedDate_In;
	public $CreatedDate_IsNotEmpty;
	public $CreatedDate_IsEmpty;
	public $CreatedDate_BitwiseOr;
	public $CreatedDate_BitwiseAnd;
	public $UpdatedDate_Equals;
	public $UpdatedDate_NotEquals;
	public $UpdatedDate_IsLike;
	public $UpdatedDate_IsNotLike;
	public $UpdatedDate_BeginsWith;
	public $UpdatedDate_EndsWith;
	public $UpdatedDate_GreaterThan;
	public $UpdatedDate_GreaterThanOrEqual;
	public $UpdatedDate_LessThan;
	public $UpdatedDate_LessThanOrEqual;
	public $UpdatedDate_In;
	public $UpdatedDate_IsNotEmpty;
	public $UpdatedDate_IsEmpty;
	public $UpdatedDate_BitwiseOr;
	public $UpdatedDate_BitwiseAnd;
	public $Status_Equals;
	public $Status_NotEquals;
	public $Status_IsLike;
	public $Status_IsNotLike;
	public $Status_BeginsWith;
	public $Status_EndsWith;
	public $Status_GreaterThan;
	public $Status_GreaterThanOrEqual;
	public $Status_LessThan;
	public $Status_LessThanOrEqual;
	public $Status_In;
	public $Status_IsNotEmpty;
	public $Status_IsEmpty;
	public $Status_BitwiseOr;
	public $Status_BitwiseAnd;

}

?>