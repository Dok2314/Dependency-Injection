<?php

namespace Src\Vendor\DI;

use ReflectionClass;
use Exception;
use ReflectionException;
use ReflectionNamedType;

class Container
{
    /**
     * @throws ReflectionException
     * @throws Exception
     */
    public function resolve($className)
    {
        $reflection = new ReflectionClass($className);

        if (!$constructor = $reflection->getConstructor()) {
            return new $className;
        }

        $parameters = $constructor->getParameters();
        $dependencies = $this->getDependencies($parameters);

        return $reflection->newInstanceArgs($dependencies);
    }

    /**
     * @throws Exception
     */
    protected function getDependencies($parameters): array
    {
        $dependencies = [];

        foreach ($parameters as $parameter) {
            $dependency = $parameter->getType();

            if ($dependency instanceof ReflectionNamedType && !$dependency->isBuiltin()) {
                $dependencies[] = $this->resolve($dependency->getName());
            } else {
                if ($parameter->isDefaultValueAvailable()) {
                    $dependencies[] = $parameter->getDefaultValue();
                } else {
                    throw new Exception("Can not resolve class dependency {$parameter->name}");
                }
            }
        }

        return $dependencies;
    }
}
