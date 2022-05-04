<?php
namespace Modstud\St1;

use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
 

 
class StudTable extends Entity\DataManager
{
	/**
	 * Returns DB table name for entity.
	 *
	 * @return string
	 */
	public static function getTableName()
	{
		return 'modstud_st1';
	}

	/**
	 * Returns entity map definition.
	 *
	 * @return array
	 */
	public static function getMap()
	{
		return array(
			new Entity\IntegerField('ID', array(
				'primary' => true
			)),
			new Entity\StringField('NAME'),
			new Entity\StringField('SURNAME'),
			new Entity\StringField('PATRONYMIC'),
		);
	}
}
