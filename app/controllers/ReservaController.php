<?php

use Phalcon\Mvc\Model\Criteria;

class ReservaController extends ControllerBase
{
    public function initialize()
    {
    	$this->tag->setTitle("Reserva");
        parent::initialize();
    }

    public function indexAction()
    {
    	$this->persistent->parameters = null;
    	$reservas = Reserva::find();
    	if (count($reservas) == 0) {
    		$this->flash->notice("No se ha agregado ninguna reserva hasta el momento");
    		$reservas = null;
    	}
    	$this->view->reservas = $reservas;
    }
    
    public function nuevoAction()
    {
    }
    
    public function guardarAction()
    {
    	if (!$this->request->isPost()) {
    		return $this->response->redirect("reserva/");
    	}
    	$reserva = new Reserva();;
    	$reserva->nombreElemento = $this->request->getPost("nombreElemento");
    	$reserva->observacion = $this->request->getPost("observacion");
    	if (!$reserva->save()) {
    		foreach ($reserva->getMessages() as $message) {
    			$this->flash->error($message);
    		}
    		return $this->response->redirect("reserva/nuevo");
    	}
    	$this->flash->success("La reserva fue guardada exitosamente");
    	return $this->response->redirect("reserva/");
    }
}
