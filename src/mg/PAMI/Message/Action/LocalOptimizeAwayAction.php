<?php
/**
 * LocalOptimizeAwayaction message.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Action
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://www.noneyet.ar/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       http://www.noneyet.ar/
 */
namespace PAMI\Message\Action;

/**
 * LocalOptimizeAway action message.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Action
 * @author     Marcelo Gornstein <marcelog@gmail.com>
 * @license    http://www.noneyet.ar/ Apache License 2.0
 * @link       http://www.noneyet.ar/
 */
class LocalOptimizeAwayAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $channel The channel name to optimize away.
     *
     * @return void
     */
    public function __construct($channel)
    {
        parent::__construct('LocalOptimizeAway');
        $this->setKey('Channel', $channel);
    }
}