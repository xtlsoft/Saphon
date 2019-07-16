# Saphon

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

Exmaple:

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
 *
 */
class ExampleClass {

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
    public function __construct(int $id) {
        $this->id = $id;
    }

    /**
     * Set ID property
     *
     * @param integer $id
     * @return self
     */
    public function setId(int $id): self {
        $this->id = $id;
        return $this;
    }

}
```

### Commit style

See [https://github.com/angular/angular.js/blob/master/DEVELOPERS.md#-git-commit-guidelines](https://github.com/angular/angular.js/blob/master/DEVELOPERS.md#-git-commit-guidelines).

You'd better sign your commits.
