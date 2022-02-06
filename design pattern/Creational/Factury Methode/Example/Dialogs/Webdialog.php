<?php
namespace App\Dialogs;

use App\Buttons\Button;

use App\Buttons\Webbutton;

class Webdialog extends Dialog
{
    public function creatButton():Button
   {
       return new Webbutton();
   }

}