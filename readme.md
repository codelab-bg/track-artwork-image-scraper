# TrackArtworkImageScraper

[![Latest Version][ico-version]](https://github.com/codelab-bg/track-artwork-image-scraper/)
[![Total Downloads][ico-downloads]](https://packagist.org/packages/codelab-bg/track-artwork-image-scrapper)

Package to search for images trough google api - Custom Search

## Installation

Via Composer

``` bash
$ composer require codelab-bg/track-artwork-images-craper
```

## Requirements

Make sure you have **api key** - https://console.cloud.google.com/ and **cx** key - https://cse.google.com/cse/.
Also in **cse** console make sure **Image Search** and **Search the entire web** options are on.

## Usage

``` php
$result = TrackArtworkImageScraper::search($query, $page, $perPage, $filters);
```

page and filters are optional. More about filters on - https://developers.google.com/custom-search/v1/reference/rest/v1/cse/list

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [Pavel Pavlov](https://github.com/pavlovpa4o)

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/codelab-bg/track-artwork-image-scraper.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/codelab-bg/track-artwork-image-scraper.svg?style=flat-square
