<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\Comparator\Exception;

class PublicController extends Controller
{
    public  $users = [
            ['name' => 'Mario', 'surname' => 'Rossi', 'role' => 'Senior Manager'],
            ['name' => 'Davide', 'surname' => 'Bianchi', 'role' => 'HR'],
            ['name' => 'Alessia', 'surname' => 'Verdi', 'role' => 'Senior Developer'],
        ];
    public function homepage()
    {
        return view('welcome');
    }

    public function chiSiamo()
    {
       
        return view('chiSiamo', ['users' => $this->users]);
    }

    public  function chiSiamoDetail($name)
    {
        
        foreach ($this->users as $user) {
            if ($name == $user['name']) {
                return view('chi-siamo-detail', ['user' => $user]);
            }
        }
    }

    public function contatti()
    {
        return view('contatti');
    }

    public function contattaci(Request $request) {
        $user = $request->input('user');
        $email = $request->input('email');
        $mesasge = $request->input('message');
        $userData = compact('user', 'email', 'message');

        try{
            Mail::to($email)->send(new ContactMail($userData));
        }catch(Exception $e){
            return redirect()->route('homepage')->with('emailError', "C'è stato un errore, riprova più tardi");
        }
        return redirect(route('homepage'))->with('emailSent', 'Hai correttamente inviato una email!');

    }
        
    
}

