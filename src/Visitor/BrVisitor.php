<?php

/*
 * This file is part of the HTML sanitizer project.
 *
 * (c) Titouan Galopin <galopintitouan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HtmlSanitizer\Visitor;

use HtmlSanitizer\Model\Cursor;
use HtmlSanitizer\Node\BrNode;
use HtmlSanitizer\Node\NodeInterface;

/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class BrVisitor extends AbstractVisitor
{
    use ChildlessTagVisitorTrait;

    protected function getDomNodeName(): string
    {
        return 'br';
    }

    protected function createNode(\DOMNode $domNode, Cursor $cursor): NodeInterface
    {
        return new BrNode($cursor->node);
    }
}
