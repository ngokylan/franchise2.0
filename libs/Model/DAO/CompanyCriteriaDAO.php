<?php
/** @package    Franchise::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Criteria.php");

/**
 * CompanyCriteria allows custom querying for the Company object.
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
class CompanyCriteriaDAO extends Criteria
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
	public $Name_Equals;
	public $Name_NotEquals;
	public $Name_IsLike;
	public $Name_IsNotLike;
	public $Name_BeginsWith;
	public $Name_EndsWith;
	public $Name_GreaterThan;
	public $Name_GreaterThanOrEqual;
	public $Name_LessThan;
	public $Name_LessThanOrEqual;
	public $Name_In;
	public $Name_IsNotEmpty;
	public $Name_IsEmpty;
	public $Name_BitwiseOr;
	public $Name_BitwiseAnd;
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
	public $Territory_Equals;
	public $Territory_NotEquals;
	public $Territory_IsLike;
	public $Territory_IsNotLike;
	public $Territory_BeginsWith;
	public $Territory_EndsWith;
	public $Territory_GreaterThan;
	public $Territory_GreaterThanOrEqual;
	public $Territory_LessThan;
	public $Territory_LessThanOrEqual;
	public $Territory_In;
	public $Territory_IsNotEmpty;
	public $Territory_IsEmpty;
	public $Territory_BitwiseOr;
	public $Territory_BitwiseAnd;
	public $Region_Equals;
	public $Region_NotEquals;
	public $Region_IsLike;
	public $Region_IsNotLike;
	public $Region_BeginsWith;
	public $Region_EndsWith;
	public $Region_GreaterThan;
	public $Region_GreaterThanOrEqual;
	public $Region_LessThan;
	public $Region_LessThanOrEqual;
	public $Region_In;
	public $Region_IsNotEmpty;
	public $Region_IsEmpty;
	public $Region_BitwiseOr;
	public $Region_BitwiseAnd;
	public $Start_Equals;
	public $Start_NotEquals;
	public $Start_IsLike;
	public $Start_IsNotLike;
	public $Start_BeginsWith;
	public $Start_EndsWith;
	public $Start_GreaterThan;
	public $Start_GreaterThanOrEqual;
	public $Start_LessThan;
	public $Start_LessThanOrEqual;
	public $Start_In;
	public $Start_IsNotEmpty;
	public $Start_IsEmpty;
	public $Start_BitwiseOr;
	public $Start_BitwiseAnd;
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
	public $Suburb_Equals;
	public $Suburb_NotEquals;
	public $Suburb_IsLike;
	public $Suburb_IsNotLike;
	public $Suburb_BeginsWith;
	public $Suburb_EndsWith;
	public $Suburb_GreaterThan;
	public $Suburb_GreaterThanOrEqual;
	public $Suburb_LessThan;
	public $Suburb_LessThanOrEqual;
	public $Suburb_In;
	public $Suburb_IsNotEmpty;
	public $Suburb_IsEmpty;
	public $Suburb_BitwiseOr;
	public $Suburb_BitwiseAnd;
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