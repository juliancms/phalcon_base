<?php
use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\DI\FactoryDefault;

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
    public $nombreCompleto;

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
    
    /**
     * Returns a human representation of 'fechahora'
     *
     * @return string
     */
    public function getFechaDetail()
    {
    	$conversiones = $this->getDI()->getConversiones();
    	// La función substr me recorta la variable o campo ingresado, en este caso obtiene los primeros 10 dígitos
    	if(substr($this->fechahora, 0, 10) == date("Y-m-d")){
    		return "Hoy";
    	}
    	return $conversiones->fecha(4, $this->fechahora);
    	
    }
}
