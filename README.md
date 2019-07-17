# Saphon
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fxtlsoft%2FSaphon.svg?type=shield)](https://app.fossa.io/projects/git%2Bgithub.com%2Fxtlsoft%2FSaphon?ref=badge_shield)


Re-define web development.

Stage: WIP

## Development

This project is still under development.

Pull Requests are welcomed.

### Ways of contributing

Currently, direct push to master branch is not allowed.

All changes should be merged using Pull Requests.

A pull request can be merged only when @xtlsoft accepts it at this stage.

### Code style

Follow PSR-12 extended code style guide.

[https://github.com/php-fig/fig-standards/blob/master/proposed/extended-coding-style-guide.md](https://github.com/php-fig/fig-standards/blob/master/proposed/extended-coding-style-guide.md)

Example:

```php
<?php

/**
 * The file is a part of Saphon
 * project. Please use it under
 * its license.
 *
 * @package  Saphon
 * @license  MIT
 * @author   Tianle Xu <xtl@xtlsoft.top>
 * @category framework
 * @link     https://github.com/xtlsoft/Saphon/
 */

namespace Saphon\Docs\CodeStyle;

/**
 * An example of classes.
 */
class ExampleClass
{
    /**
     * ID of this class
     *
     * @var integer
     */
    protected $id = 0;

    /**
     * Constructor
     *
     * @param integer $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * Set ID property
     *
     * @param integer $id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
}
```


[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fxtlsoft%2FSaphon.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2Fxtlsoft%2FSaphon?ref=badge_large)

### Commit style

See [https://github.com/angular/angular.js/blob/master/DEVELOPERS.md#-git-commit-guidelines](https://github.com/angular/angular.js/blob/master/DEVELOPERS.md#-git-commit-guidelines).

You'd better sign your commits.

### Branches

Currently, development will be under `future` branch.

`future`: development branch, may contain unusable code and incomplete code.

`master`: branch with latest but unstable features.