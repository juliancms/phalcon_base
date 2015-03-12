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
    	$reserva = new Reserva();
    	$reserva->nombreElemento = $this->request->getPost("nombreElemento");
    	$reserva->nombreCompleto = $this->request->getPost("nombreCompleto");
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
    
    public function eliminarAction($id_que_traje_de_la_vista)
    {
    	$reserva = Reserva::findFirstByIdReserva($id_que_traje_de_la_vista);
    	if (!$reserva) {
    		$this->flash->error("No se encontró la reserva, problamente ya la eliminaron");
    		return $this->response->redirect("reserva/");
    	}
    	if (!$reserva->delete()) {
            foreach ($products->getMessages() as $message) {
                $this->flash->error($message);
            }
            return $this->response->redirect("reserva/");
        }
    	$this->flash->success("La reserva fue eliminada exitosamente");
    	return $this->response->redirect("reserva/");
    }
}
