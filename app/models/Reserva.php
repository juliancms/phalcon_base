<?php
use Phalcon\Mvc\Model\Behavior\Timestampable;
class Reserva extends \Phalcon\Mvc\Model
{
    /**
     *
     * @var integer
     */
    public $id_reserva;

    /**
     *
     * @var string
     */
    public $nombreEquipo;
    
    /**
     *
     * @var string
     */
    public $observacion;
    
    /**
     *
     * @var string
     */
    public $fechahora;
    
    public function initialize()
    {
    	$this->addBehavior(new Timestampable(array(
    			'beforeValidationOnCreate' => array(
    					'field' => 'fechahora',
    					'format' => 'Y-m-d H:i:s'
    			)
    	)));
    }
}
