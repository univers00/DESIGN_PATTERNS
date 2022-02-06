<?php
namespace App\Dialogs;

use App\Buttons\Button;

use App\Buttons\Mobilbutton;

class Mobildialog extends Dialog
{
    public function creatButton():Button
   {
       return new Mobilbutton();
   }

}