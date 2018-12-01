<?php

declare(strict_types = 1);

namespace Vaalyn\AzuraCastApiClient\Transformer;

use Vaalyn\AzuraCastApiClient\Dto\LocationDto;

class LocationDtoTransformer {
	/**
	 * @param array $locationData
	 *
	 * @return LocationDto
	 */
	public function arrayToDto(array $locationData): LocationDto {
		return new LocationDto(
			$locationData['status'],
			(string) $locationData['lat'],
			(string) $locationData['lon'],
			$locationData['timezone'],
			$locationData['region'],
			$locationData['country'],
			$locationData['city'],
			$locationData['message']
		);
	}
}