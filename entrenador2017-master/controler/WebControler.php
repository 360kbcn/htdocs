<?php
class WebControler{
    private $c;

    public function __construct(Interop\Container\ContainerInterface $ci){
        $this->c = $ci;
    }

    public function cargarHome($request, $response, $args){ 

        $data["url"] = $request->getUri()->getBasePath();

        $data['temas'] = $this->c->data->getTemas();

        $data["apartat"] = $request->getUri()->getPath();

        $response = $this->c->view->render($response, "home.php", $data);
        return $response;
    }

    public function temas($request, $response, $args){

        $data["url"] = $request->getUri()->getBasePath();
        $data["apartat"] = $request->getUri()->getPath();

        $id_tema = $args["id"];

        $data['tema'] = $this->c->data->getTema($id_tema);

        $data['temas'] = $this->c->data->getTemas();

        $resposta = $request->getQueryParam("resposta");

        if(!empty($resposta)){

            $user_resposta = $this->c->data->getRespostaCorrecta($resposta);

            if(!$user_resposta){

                $data["respostaOK"] = $this->c->data->getResposta($resposta);
                $data["resposta"] = true;
            }else{

                $data["respostaOK"] = $this->c->data->getRespostaCorrecta($resposta);
                $data["resposta"] = false;
            }

            $data['pregunta'] = $this->c->data->getPregunta($data["respostaOK"]["pregunta"]);
        }else{
            
            $preguntes = $this->c->data->getPreguntes($id_tema);
            $index = array_rand($preguntes, 1);
            $data['pregunta'] = $preguntes[$index];
        }
        
        $data['respostes'] = $this->c->data->getRespostes($data['pregunta']['id']);

        $response = $this->c->view->render($response, "pregTema.php", $data);
        return $response;
    }

    public function crear($request, $response, $args){

        $data["url"] = $request->getUri()->getBasePath();
        $data["apartat"] = $request->getUri()->getPath();
        $data['temas'] = $this->c->data->getTemas();

        $response = $this->c->view->render($response, "crear.php", $data);
        return $response;
    }

    public function add($request, $response, $args){

        $data["url"] = $request->getUri()->getBasePath();
        $data["apartat"] = $request->getUri()->getPath();
        $data['temas'] = $this->c->data->getTemas();

        $newPregunta = $request->getParsedBody();

        $data["resposta"] = $newPregunta;

        $data['add_pregunta'] = $this->c->data->addPregunta($newPregunta);

        $data['temas'] = $this->c->data->getTemas();

        $response = $this->c->view->render($response, "crear.php", $data);
        return $response;
    }

    public function stats($request, $response, $args){

        $data['url'] = $request->getUri()->getBasePath();
        $data['apartat'] = $request->getUri()->getPath();
        $data['temas'] = $this->c->data->getTemas();
        $data['statics'] = $this->c->data->getStatics();


         $response = $this->c->view->render($response, "statics.php", $data);
        return $response;
    }

}
?>
