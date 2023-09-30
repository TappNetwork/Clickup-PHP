<?php

namespace ClickUp\Objects;

use ClickUp\Client;

/**
 * @method TimeEntry   getByKey(int $spaceId)
 * @method TimeEntry   getByName(string $spaceName)
 * @method TimeEntry[] objects()
 * @method TimeEntry[] getIterator()
 */
class TimeEntryCollection extends AbstractObjectCollection
{
	public function __construct(Client $client, $array)
	{
		parent::__construct($client, $array);
	}

	/**
	 * @return string
	 */
	protected function objectClass()
	{
		return TimeEntry::class;
	}
}
