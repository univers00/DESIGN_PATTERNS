<?php
namespace App\Dialogs;

use App\Buttons\Button;

use App\Buttons\Systembutton;

class Systemdialog extends Dialog
{
    public function creatButton():Button
   {
       return new Systembutton();
   }

}