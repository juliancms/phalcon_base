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
            'index' => array(
                'caption' => 'Inicio',
                'action' => 'index'
            ),
            'reserva' => array(
                'caption' => 'Reservas',
                'action' => 'index'
            )
    );    

    /**
     * Builds header menu with left and right items
     *
     * @return string
     */
    public function getMenu()
    {
    	$controllerName = $this->view->getControllerName();
    	$actionName = $this->view->getActionName();
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
