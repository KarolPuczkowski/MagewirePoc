<?php declare(strict_types=1);

namespace RedInGo\MagewirePoc\Magewire;

use Magewirephp\Magewire\Component;

class Form extends Component
{
    public $bar = '';

    public function setBar($value)
    {   
        setcookie('foo', $value, time() + 86400, "/");
        $this->bar = $value;
        $this->emit('fooUpdated', $this->bar);
    }
}