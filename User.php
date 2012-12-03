<?php
/**
 * Eine Klasse für die Demonstration von phpDocumentor.
 *
 * <code>
 * <?php
 * require_once 'Klasse.php';
 *
 * $objekt = new Klasse;
 * $objekt->setzeVariable('test');
 * ?>
 * </code>
 *
 * @author      Klaus Fischer <fischer@sofika.de>
 * @package     packageuser
 * @subpackage  user1
 * @filesource
 */
class User {
    /**
    * name
    * @var  string
    * @access private;
    */
    protected $name;

/**
 * get the name of a user
 *
 * @return name
 *
 */
    public function getName() {
        return $this->name;
    }
/**
* set name
*
* @param string $name name to be set
* @access public
*/

    public function setName($name) {
        $this->name = $name;
    }

    public function talk() {
        return "Hello world!";
    }
}
