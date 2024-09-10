<?php declare(strict_types=1);

namespace RedInGo\MagewirePoc\Magewire;

use Magewirephp\Magewire\Component;

class Item extends Component
{
    public $foo;

    protected $listeners = [
        'fooUpdated' => 'refresh',
    ];

    public function boot(): void
    {   
        if (isset($_COOKIE['foo'])) {
            $this->foo = $_COOKIE['foo'];
        } else {
            $this->foo = "";
        }
    }

}