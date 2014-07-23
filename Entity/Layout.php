<?php

namespace CanalTP\MttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Layout
 */
class Layout extends AbstractEntity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $previewPath;

    /**
     * @var array
     */
    private $orientations;

    /**
     * @var array
     */
    private $notesModes;

    /**
     * @var integer
     */
    private $cssVersion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $layoutConfigs;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return Layout
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Layout
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set previewPath
     *
     * @param string $previewPath
     * @return Layout
     */
    public function setPreviewPath($previewPath)
    {
        $this->previewPath = $previewPath;

        return $this;
    }

    /**
     * Get previewPath
     *
     * @return string
     */
    public function getPreviewPath()
    {
        return $this->previewPath;
    }

    /**
     * Set orientations
     *
     * @param array $orientations
     * @return Layout
     */
    public function setOrientations($orientations)
    {
        $this->orientations = $orientations;

        return $this;
    }

    /**
     * Get orientations
     *
     * @return array
     */
    public function getOrientations()
    {
        return $this->orientations;
    }

    /**
     * Set notesModes
     *
     * @param array $notesModes
     * @return Layout
     */
    public function setNotesModes($notesModes)
    {
        $this->notesModes = $notesModes;

        return $this;
    }

    /**
     * Get notesModes
     *
     * @return array
     */
    public function getNotesModes()
    {
        return $this->notesModes;
    }

    /**
     * Set cssVersion
     *
     * @param integer $cssVersion
     * @return Layout
     */
    public function setCssVersion($cssVersion)
    {
        $this->cssVersion = $cssVersion;

        return $this;
    }

    /**
     * Get cssVersion
     *
     * @return integer
     */
    public function getCssVersion()
    {
        return $this->cssVersion;
    }

    /**
     * Set LayoutConfigs
     *
     * @return Collections\Collection
     */
    public function getLayoutConfigs()
    {
        return ($this->layoutConfigs);
    }

    /**
     * Set LayoutConfigs
     *
     * @return Layout
     */
    public function setLayoutConfigs($layoutConfigs)
    {
        $this->layoutConfigs = $layoutConfigs;

        return ($this);
    }

    public function getAbsolutePreviewPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPreviewPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        return 'uploads/layouts/previews/';
    }
}
