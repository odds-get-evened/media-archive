<?php
class DBO_Asset_Restriction_Embargo {
	const TABLE_NAME = "asset_restriction_embargo";
	const MODEL_NAME = "DBO_Asset_Restriction_Embargo_Model";
	const COLUMNS = "a.id,a.asset_id,a.start_date,a.created_by,a.created";
	
	public static function getOneByAsset($asset_id) {
		return Ode_DBO::getInstance()->query("
			SELECT " . self::COLUMNS . "
			FROM " . self::TABLE_NAME . " AS a
			WHERE a.asset_id = " . Ode_DBO::getInstance()->quote($asset_id, PDO::PARAM_STR) . "
			LIMIT 0,1
		")->fetchObject(self::MODEL_NAME);
	}
}