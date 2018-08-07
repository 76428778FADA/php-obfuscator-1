<?php
namespace PhpObfuscator\Tests\Libs;

use PhpObfuscator\ObfuscateDirectory;

class ObfuscateDirectoryAccessor extends ObfuscateDirectory
{
    /**
     * Devolve ou seta um atributo.
     *
     * @param  string $name
     * @param  mixed $value
     * @return mixed
     */
    public function property($name, $value = null)
    {
        if ($value == null) {
            return $this->$name;
        } else {
            $this->$name = $value;
            return true;
        }
    }

    /**
     * Executa um método e devolve o seu resultado.
     *
     * @param  string $name
     * @param  mixed $param_one
     * @param  mixed $param_two
     * @param  mixed $param_three
     * @return mixed
     */
    public function method($name, $param_one = null, $param_two = null, $param_three = null)
    {
        return $this->$name($param_one, $param_two, $param_three);
    }

}
