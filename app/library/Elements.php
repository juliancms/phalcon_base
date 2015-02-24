<?php

use Phalcon\Mvc\User\Component;

/**
 * Elements
 *
 * Construcción de los elementos UI de la aplicación
 */
class Elements extends Component
{

    private $_headerMenu = array(
            'nombre_controlador' => array(
                'caption' => 'Nombre',
                'action' => 'nombreaccion'
            ),
            'nombre_controlador2' => array(
                'caption' => 'Nombre 2',
                'action' => 'nombreaccion2'
            ),
    		'nombre_controlador3' => array(
                'caption' => 'Nombre 3',
                'action' => 'nombreaccion3'
            )
    );    

    /**
     * Builds header menu with left and right items
     *
     * @return string
     */
    public function getMenu()
    {
    	echo '<div class="nav-collapse">';
    	echo '<ul class="nav navbar-nav navbar-left">';
    	foreach ($this->_headerMenu as $controller => $option) {
    		if ($controllerName == $controller) {
    			echo '<li class="active">';
    		} else {
    			echo '<li>';
    		}
    		echo $this->tag->linkTo($controller . '/' . $option['action'], $option['caption']);
    		echo '</li>';
    	}
    	echo '</ul>';
    	echo '</div>';
    }
}
