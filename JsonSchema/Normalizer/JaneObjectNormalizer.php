<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\JsonSchema\Normalizer;

use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = ['Jane\\OpenApi\\JsonSchema\\Model\\OpenApi' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\OpenApiNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\Reference' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\ReferenceNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\Info' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\InfoNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\Contact' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\ContactNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\License' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\LicenseNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\Server' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\ServerNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\ServerVariable' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\ServerVariableNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\Components' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\ComponentsNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\Schema' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\SchemaNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\Discriminator' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\DiscriminatorNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\XML' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\XMLNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\Response' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\ResponseNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\MediaType' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\MediaTypeNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\Example' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\ExampleNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\Header' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\HeaderNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\PathItem' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\PathItemNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\Operation' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\OperationNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\Responses' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\ResponsesNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\Tag' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\TagNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\ExternalDocumentation' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\ExternalDocumentationNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\Parameter' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\ParameterNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\RequestBody' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\RequestBodyNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\APIKeySecurityScheme' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\APIKeySecuritySchemeNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\HTTPSecurityScheme' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\HTTPSecuritySchemeNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\HTTPSecuritySchemeSub' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\HTTPSecuritySchemeSubNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\OAuth2SecurityScheme' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\OAuth2SecuritySchemeNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\OpenIdConnectSecurityScheme' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\OpenIdConnectSecuritySchemeNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\OAuthFlows' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\OAuthFlowsNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\ImplicitOAuthFlow' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\ImplicitOAuthFlowNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\PasswordOAuthFlow' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\PasswordOAuthFlowNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\ClientCredentialsFlow' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\ClientCredentialsFlowNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\AuthorizationCodeOAuthFlow' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\AuthorizationCodeOAuthFlowNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\Link' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\LinkNormalizer', 'Jane\\OpenApi\\JsonSchema\\Model\\Encoding' => 'Jane\\OpenApi\\JsonSchema\\Normalizer\\EncodingNormalizer', '\\Jane\\JsonSchemaRuntime\\Reference' => '\\Jane\\JsonSchemaRuntime\\Normalizer\\ReferenceNormalizer'];
    protected $normalizersCache = [];

    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($object, $format, $context);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $class, $format, $context);
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }
}
