<?php
namespace Modstud\St1;

use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
 


class TimeTable extends Entity\DataManager
{
	/**
	 * Returns DB table name for entity.
	 *
	 * @return string
	 */
	public static function getTableName()
	{
		return 'modstud_tt1';
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
			new Entity\DateField('DATETIME'),
			new Entity\StringField('ClASSROOM'),
			new Entity\StringField('LESSON'),
			new Entity\IntegerField('ID_TEACH'),
		);
	}
}

