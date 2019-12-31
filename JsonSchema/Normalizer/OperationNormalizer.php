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

class OperationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\JsonSchema\\Model\\Operation';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\OpenApi\JsonSchema\Model\Operation;
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
        $object = new \Jane\OpenApi\JsonSchema\Model\Operation();
        $data = clone $data;
        if (property_exists($data, 'tags') && $data->{'tags'} !== null) {
            $values = [];
            foreach ($data->{'tags'} as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
            unset($data->{'tags'});
        }
        if (property_exists($data, 'summary') && $data->{'summary'} !== null) {
            $object->setSummary($data->{'summary'});
            unset($data->{'summary'});
        }
        if (property_exists($data, 'description') && $data->{'description'} !== null) {
            $object->setDescription($data->{'description'});
            unset($data->{'description'});
        }
        if (property_exists($data, 'externalDocs') && $data->{'externalDocs'} !== null) {
            $object->setExternalDocs($this->denormalizer->denormalize($data->{'externalDocs'}, 'Jane\\OpenApi\\JsonSchema\\Model\\ExternalDocumentation', 'json', $context));
            unset($data->{'externalDocs'});
        }
        if (property_exists($data, 'operationId') && $data->{'operationId'} !== null) {
            $object->setOperationId($data->{'operationId'});
            unset($data->{'operationId'});
        }
        if (property_exists($data, 'parameters') && $data->{'parameters'} !== null) {
            $values_1 = [];
            foreach ($data->{'parameters'} as $value_1) {
                $value_2 = $value_1;
                if (is_object($value_1) and isset($value_1->{'$ref'})) {
                    $value_2 = $this->denormalizer->denormalize($value_1, 'Jane\\OpenApi\\JsonSchema\\Model\\Reference', 'json', $context);
                } elseif (is_object($value_1) and isset($value_1->{'name'}) and isset($value_1->{'in'})) {
                    $value_2 = $this->denormalizer->denormalize($value_1, 'Jane\\OpenApi\\JsonSchema\\Model\\Parameter', 'json', $context);
                }
                $values_1[] = $value_2;
            }
            $object->setParameters($values_1);
            unset($data->{'parameters'});
        }
        if (property_exists($data, 'requestBody') && $data->{'requestBody'} !== null) {
            $value_3 = $data->{'requestBody'};
            if (is_object($data->{'requestBody'}) and isset($data->{'requestBody'}->{'$ref'})) {
                $value_3 = $this->denormalizer->denormalize($data->{'requestBody'}, 'Jane\\OpenApi\\JsonSchema\\Model\\Reference', 'json', $context);
            } elseif (is_object($data->{'requestBody'}) and isset($data->{'requestBody'}->{'content'})) {
                $value_3 = $this->denormalizer->denormalize($data->{'requestBody'}, 'Jane\\OpenApi\\JsonSchema\\Model\\RequestBody', 'json', $context);
            }
            $object->setRequestBody($value_3);
            unset($data->{'requestBody'});
        }
        if (property_exists($data, 'responses') && $data->{'responses'} !== null) {
            $object->setResponses($this->denormalizer->denormalize($data->{'responses'}, 'Jane\\OpenApi\\JsonSchema\\Model\\Responses', 'json', $context));
            unset($data->{'responses'});
        }
        if (property_exists($data, 'callbacks') && $data->{'callbacks'} !== null) {
            $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'callbacks'} as $key => $value_4) {
                $value_5 = $value_4;
                if (is_object($value_4) and isset($value_4->{'$ref'})) {
                    $value_5 = $this->denormalizer->denormalize($value_4, 'Jane\\OpenApi\\JsonSchema\\Model\\Reference', 'json', $context);
                } elseif (isset($value_4)) {
                    $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value_4 as $key_1 => $value_6) {
                        if (preg_match('/^x-/', $key_1) && isset($value_6)) {
                            $values_3[$key_1] = $value_6;
                            continue;
                        }
                    }
                    $value_5 = $values_3;
                }
                $values_2[$key] = $value_5;
            }
            $object->setCallbacks($values_2);
            unset($data->{'callbacks'});
        }
        if (property_exists($data, 'deprecated') && $data->{'deprecated'} !== null) {
            $object->setDeprecated($data->{'deprecated'});
            unset($data->{'deprecated'});
        }
        if (property_exists($data, 'security') && $data->{'security'} !== null) {
            $values_4 = [];
            foreach ($data->{'security'} as $value_7) {
                $values_5 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_7 as $key_2 => $value_8) {
                    $values_6 = [];
                    foreach ($value_8 as $value_9) {
                        $values_6[] = $value_9;
                    }
                    $values_5[$key_2] = $values_6;
                }
                $values_4[] = $values_5;
            }
            $object->setSecurity($values_4);
            unset($data->{'security'});
        }
        if (property_exists($data, 'servers') && $data->{'servers'} !== null) {
            $values_7 = [];
            foreach ($data->{'servers'} as $value_10) {
                $values_7[] = $this->denormalizer->denormalize($value_10, 'Jane\\OpenApi\\JsonSchema\\Model\\Server', 'json', $context);
            }
            $object->setServers($values_7);
            unset($data->{'servers'});
        }
        foreach ($data as $key_3 => $value_11) {
            if (preg_match('/^x-/', $key_3)) {
                $object[$key_3] = $value_11;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getTags()) {
            $values = [];
            foreach ($object->getTags() as $value) {
                $values[] = $value;
            }
            $data->{'tags'} = $values;
        }
        if (null !== $object->getSummary()) {
            $data->{'summary'} = $object->getSummary();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getExternalDocs()) {
            $data->{'externalDocs'} = $this->normalizer->normalize($object->getExternalDocs(), 'json', $context);
        }
        if (null !== $object->getOperationId()) {
            $data->{'operationId'} = $object->getOperationId();
        }
        if (null !== $object->getParameters()) {
            $values_1 = [];
            foreach ($object->getParameters() as $value_1) {
                $value_2 = $value_1;
                if (is_object($value_1)) {
                    $value_2 = $this->normalizer->normalize($value_1, 'json', $context);
                } elseif (is_object($value_1)) {
                    $value_2 = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $values_1[] = $value_2;
            }
            $data->{'parameters'} = $values_1;
        }
        if (null !== $object->getRequestBody()) {
            $value_3 = $object->getRequestBody();
            if (is_object($object->getRequestBody())) {
                $value_3 = $this->normalizer->normalize($object->getRequestBody(), 'json', $context);
            } elseif (is_object($object->getRequestBody())) {
                $value_3 = $this->normalizer->normalize($object->getRequestBody(), 'json', $context);
            }
            $data->{'requestBody'} = $value_3;
        }
        if (null !== $object->getResponses()) {
            $data->{'responses'} = $this->normalizer->normalize($object->getResponses(), 'json', $context);
        }
        if (null !== $object->getCallbacks()) {
            $values_2 = new \stdClass();
            foreach ($object->getCallbacks() as $key => $value_4) {
                $value_5 = $value_4;
                if (is_object($value_4)) {
                    $value_5 = $this->normalizer->normalize($value_4, 'json', $context);
                } elseif (!is_null($value_4)) {
                    $values_3 = new \stdClass();
                    foreach ($value_4 as $key_1 => $value_6) {
                        if (preg_match('/^x-/', $key_1) && !is_null($value_6)) {
                            $values_3->{$key_1} = $value_6;
                            continue;
                        }
                    }
                    $value_5 = $values_3;
                }
                $values_2->{$key} = $value_5;
            }
            $data->{'callbacks'} = $values_2;
        }
        if (null !== $object->getDeprecated()) {
            $data->{'deprecated'} = $object->getDeprecated();
        }
        if (null !== $object->getSecurity()) {
            $values_4 = [];
            foreach ($object->getSecurity() as $value_7) {
                $values_5 = new \stdClass();
                foreach ($value_7 as $key_2 => $value_8) {
                    $values_6 = [];
                    foreach ($value_8 as $value_9) {
                        $values_6[] = $value_9;
                    }
                    $values_5->{$key_2} = $values_6;
                }
                $values_4[] = $values_5;
            }
            $data->{'security'} = $values_4;
        }
        if (null !== $object->getServers()) {
            $values_7 = [];
            foreach ($object->getServers() as $value_10) {
                $values_7[] = $this->normalizer->normalize($value_10, 'json', $context);
            }
            $data->{'servers'} = $values_7;
        }
        foreach ($object as $key_3 => $value_11) {
            if (preg_match('/^x-/', $key_3)) {
                $data->{$key_3} = $value_11;
            }
        }

        return $data;
    }
}
