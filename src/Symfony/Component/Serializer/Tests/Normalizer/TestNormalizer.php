<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Serializer\Tests\Normalizer;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * Provides a test Normalizer which only implements the NormalizerInterface.
 *
 * @author Lin Clark <lin@lin-clark.com>
 */
class TestNormalizer implements NormalizerInterface
{
    /**
     * {@inheritdoc}
     */
    public function normalize($object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization($data, string $format = null): bool
    {
        return true;
    }
}
