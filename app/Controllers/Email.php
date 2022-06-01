<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Email extends BaseController
{
    public function letter()
    {
        


        $this->load->view('letter');
    }

    public function create()
    {
        try {
            $validate1 = $this->validate([
                   'email' => 'required|is_unique[email.email]',
            
                ],
            );    
            if(!$validate1) {
            return redirect()->to(previous_url());
        }   else{
            $data = [
                "id" => uniqid(),
                "email" => $this->request->getPost('email'),
                "name" => $this->request->getPost('name'),
                ];
        $this->emailModel->insert($payload);
        return view('sucess.php');
    }
}catch(\Exception $e) {
    return redirect()->to(previous_url());
}
    }
}