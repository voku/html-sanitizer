<?php

/*
 * This file is part of the HTML sanitizer project.
 *
 * (c) Titouan Galopin <galopintitouan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HtmlSanitizer\Node;

/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class ImgNode extends AbstractNode implements AttributesNodeInterface
{
    use TagNodeTrait;
    use ChildlessTrait;

    public function getTagName(): string
    {
        return 'img';
    }
}
