<?php
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage sender
 * @copyright 2001-2012 Bitrix
 */

namespace Bitrix\Sender\Integration\Crm\ReturnCustomer;

use Bitrix\Main\Localization\Loc;
use Bitrix\Sender\Internals\PrettyDate;
use Bitrix\Sender\Message;
use Bitrix\Sender\PostingRecipientTable;

/**
 * Class MessageLead
 * @package Bitrix\Sender\Integration\Crm\ReturnCustomer;
 */
class MessageLead extends MessageBase
{
	const CODE = self::CODE_RC_LEAD;

	/**
	 * Get name.
	 * @return string
	 */
	public function getName()
	{
		return Loc::getMessage('SENDER_INTEGRATION_CRM_RC_MESSAGE_NAME_LEAD');
	}

	protected function setConfigurationOptions()
	{
		if ($this->configuration->hasOptions())
		{
			return;
		}

		$this->configuration->setArrayOptions([
			[
				'type' => 'string',
				'code' => 'TITLE',
				'name' => Loc::getMessage('SENDER_INTEGRATION_CRM_RC_MESSAGE_CONFIG_TITLE_LEAD'),
				'required' => true,
				'value' => Loc::getMessage('SENDER_INTEGRATION_CRM_RC_MESSAGE_CONFIG_TITLE_LEAD_DEF', ['%date%' => PrettyDate::formatDate()]),
				'hint' => [
					'menu' => array_map(
						function ($item)
						{
							return [
								'id' => '#' . $item['CODE'] . '#',
								'text' => $item['NAME'],
								'title' => $item['DESC'],
							];
						},
						PostingRecipientTable::getPersonalizeList()
					),
				],
			],
			[
				'type' => 'string',
				'code' => 'ASSIGNED_BY',
				'name' => Loc::getMessage('SENDER_INTEGRATION_CRM_RC_MESSAGE_CONFIG_ASSIGNED_BY'),
				'required' => true,
				'hint' => Loc::getMessage('SENDER_INTEGRATION_CRM_RC_MESSAGE_CONFIG_ASSIGNED_BY_HINT'),
			],
			[
				'type' => Message\ConfigurationOption::TYPE_CHECKBOX,
				'code' => 'CHECK_WORK_TIME',
				'name' => Loc::getMessage('SENDER_INTEGRATION_CRM_RC_MESSAGE_CONFIG_CHECK_WORK_TIME'),
				'hint' => Loc::getMessage('SENDER_INTEGRATION_CRM_RC_MESSAGE_CONFIG_CHECK_WORK_TIME_HINT'),
				'required' => false,
			],
			[
				'type' => Message\ConfigurationOption::TYPE_CHECKBOX,
				'code' => 'ALWAYS_ADD',
				'name' => Loc::getMessage('SENDER_INTEGRATION_CRM_RC_MESSAGE_CONFIG_ALWAYS_ADD_LEAD'),
				'required' => false,
				'hint' => Loc::getMessage('SENDER_INTEGRATION_CRM_RC_MESSAGE_CONFIG_ALWAYS_ADD_HINT'),
			],
			[
				'type' => 'text',
				'code' => 'COMMENT',
				'name' => Loc::getMessage('SENDER_INTEGRATION_CRM_RC_MESSAGE_CONFIG_COMMENT'),
				'required' => true,
				'hint' => Loc::getMessage('SENDER_INTEGRATION_CRM_RC_MESSAGE_CONFIG_COMMENT_HINT'),
			],
		]);
	}
}