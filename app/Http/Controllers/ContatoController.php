<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContatoController extends Controller
{
    public function index(){
    	$data['titulo']= "Contato";
    	return view('contato',$data);
    }

    public function enviar(Request $request){
$dadosEmail = array(
'nome' => $request->input('nome'),
'email' => $request->input('email'),
'assunto' => $request->input('assunto'),
'mensagem' => $request->input('mensagem'),
    );
    Mail::send('email.contato',$dadosEmail,function($message){
    	$message->from('formulario@wsilva.com.br','Formulario de Contato');
    	$message->subject('Mensagem enviada pelo formulario de contato');
    	$message->to('washingtondacosta@hotmail.com');
    });

    return redirect('contato')->with('success', 'Mensagem enviada!!!');
  }

}
