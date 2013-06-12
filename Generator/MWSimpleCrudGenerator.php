<?php

namespace MWSimple\Bundle\CrudGeneratorBundle\Generator;

use Sensio\Bundle\GeneratorBundle\Generator\DoctrineCrudGenerator;
use Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Doctrine\ORM\Mapping\ClassMetadataInfo;

/**
 * Generates a CRUD for a Doctrine entity.
 *
 * @author Gonzalo Alonso <gonkpo@gmail.com>
 */
class MWSimpleCrudGenerator extends DoctrineCrudGenerator
{
    public function generate(BundleInterface $bundle, $entity, ClassMetadataInfo $metadata, $format, $routePrefix, $needWriteActions, $forceOverwrite)
    {
        parent::generate($bundle, $entity, $metadata, $format, $routePrefix, $needWriteActions, $forceOverwrite);

        // try {
        //     $this->generateFormFilter($bundle, $entity, $metadata);
        // } catch (\RuntimeException $e ) {
        //     // form already exists
        // }
    }
}