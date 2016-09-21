<?php
/**
 * @author Beck Xu <beck917@gmail.com>
 * @date 2016-09-01
 * @copyright 足球魔方
 */
namespace Application\Tasks;
/**
 * This is a demo task.
 * 
 * It can accept the following options:
 *  - foo: this parameter does something. It is required.
 *  - bar: this parameter does something else. It should be numeric.
 *
 * @author Beck Xu <beck917@gmail.com>
 */
class Demo extends \Phpill\Modules\Minion\Libraries\Task {
    protected $_options = array(
        'foo' => 'bar',
        'bar' => NULL,
    );
 
    /**
     * This is a demo task
     *
     * @return null
     */
    protected function _execute(array $params)
    {
        var_dump($params);
        echo 'foobar';
    }
}
