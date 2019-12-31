<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\JsonSchema\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ServerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\JsonSchema\\Model\\Server';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\OpenApi\JsonSchema\Model\Server;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \Jane\OpenApi\JsonSchema\Model\Server();
        $data = clone $data;
        if (property_exists($data, 'url') && $data->{'url'} !== null) {
            $object->setUrl($data->{'url'});
            unset($data->{'url'});
        }
        if (property_exists($data, 'description') && $data->{'description'} !== null) {
            $object->setDescription($data->{'description'});
            unset($data->{'description'});
        }
        if (property_exists($data, 'variables') && $data->{'variables'} !== null) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'variables'} as $key => $value) {
                $values[$key] = $this->denormalizer->denormalize($value, 'Jane\\OpenApi\\JsonSchema\\Model\\ServerVariable', 'json', $context);
            }
            $object->setVariables($values);
            unset($data->{'variables'});
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/^x-/', $key_1)) {
                $object[$key_1] = $value_1;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getUrl()) {
            $data->{'url'} = $object->getUrl();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getVariables()) {
            $values = new \stdClass();
            foreach ($object->getVariables() as $key => $value) {
                $values->{$key} = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'variables'} = $values;
        }
        foreach ($object as $key_1 => $value_1) {
            if (preg_match('/^x-/', $key_1)) {
                $data->{$key_1} = $value_1;
            }
        }

        return $data;
    }
}
