<?php

namespace League\Skeleton;

/**
 * Interface BetaInterface.
 */
interface BetaInterface
{
    /**
     * @param \League\Skeleton\AlphaInterface $alpha
     *
     * @return self
     */
    public function setAlpha($alpha);

    /**
     * @return \League\Skeleton\AlphaInterface
     */
    public function getAlpha();

    /**
     * @return string
     */
    public function sayBeta();
}
