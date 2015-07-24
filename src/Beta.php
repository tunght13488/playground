<?php

namespace League\Skeleton;

/**
 * Class Beta.
 */
class Beta implements BetaInterface
{
    /**
     * @var \League\Skeleton\AlphaInterface
     */
    protected $alpha;

    /**
     * @return string
     */
    protected function getMyWord()
    {
        return 'this is beta';
    }

    /**
     * @inheritdoc
     */
    public function setAlpha($alpha)
    {
        $this->alpha = $alpha;

        return $this;
    }

    /**
     * @return \League\Skeleton\AlphaInterface
     */
    public function getAlpha()
    {
        return $this->alpha;
    }

    /**
     * @inheritdoc
     */
    public function sayBeta()
    {
        return $this->alpha->sayAlpha() . ' and ' . $this->getMyWord();
    }
}
