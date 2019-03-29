# Finnish zips and areas

## Installation


Register Zippilainen as an alias for easier use in config/app.php

`'Zippilainen' => joonas1234\Zippilainen\Zippilainen::class`


## Usage

Get zips in specified area

`Zippilainen::zipsInArea($area)`

Get array of zips as keys and area as value

`Zippilainen::zipsAsKeys()`

Get areas with zips, optionally areas can be returned lowercase

`Zippilainen::areasAndZips($bool)`

Get only areas, optionally lowercase

`Zippilainen::areas($bool)`

Get area by zip

`Zippilainen::areaByZip($zip)`


## License
This composer package is open-sourced software licensed under the MIT license