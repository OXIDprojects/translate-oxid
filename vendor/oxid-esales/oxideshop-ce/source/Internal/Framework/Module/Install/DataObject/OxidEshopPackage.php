<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace OxidEsales\EshopCommunity\Internal\Framework\Module\Install\DataObject;

class OxidEshopPackage
{
    /**
     * If blacklist-filter is given, it will be used to filter out unwanted files and directories while the copy from
     * source-directory to target-directory takes place.
     *
     * @var array
     */
    private $blackListFilters = [];

    /**
     * If source-directory is given, the value defines which directory will be used to define where the files
     * and directories will be picked from. When the parameter is not given, the root directory of the module is used
     * instead.
     *
     * @var string
     */
    private $sourceDirectory = '';

    /**
     * target-directory value will be used to create a folder inside the Shop modules directory.
     * This folder will be used to place all files of the module.
     *
     * @var string
     */
    private $targetDirectory;

    /**
     * Package path is the absolute path to the root directory, e.g. /var/www/oxideshop/vendor/oxid-esales/paypal-module
     *
     * @var string
     */
    private $packagePath;

    /**
     * @var string
     */
    private $name;

    /**
     * @param string $name
     * @param string $packagePath
     */
    public function __construct(string $name, string $packagePath)
    {
        $this->name = $name;
        $this->packagePath = $packagePath;
    }

    /**
     * @deprecated Will be removed in next major
     *
     * @return string
     */
    public function getPackageSourcePath(): string
    {
        return !empty($this->sourceDirectory)
            ? $this->packagePath . DIRECTORY_SEPARATOR . $this->sourceDirectory
            : $this->packagePath;
    }

    /**
     * @deprecated 6.6.0
     *
     * @return array
     */
    public function getBlackListFilters(): array
    {
        return $this->blackListFilters;
    }

    /**
     * @deprecated 6.6.0
     *
     * @param array $filters
     */
    public function setBlackListFilters(array $filters)
    {
        $this->blackListFilters = $filters;
    }

    /**
     * @deprecated Will be removed in next major
     *
     * @return string
     */
    public function getTargetDirectory(): string
    {
        return $this->targetDirectory ?? $this->name;
    }

    /**
     * @deprecated Will be removed in next major
     *
     * @param string $path
     */
    public function setTargetDirectory(string $path)
    {
        $this->targetDirectory = $path;
    }

    /**
     * @deprecated Will be removed in next major
     *
     * @return string
     */
    public function getSourceDirectory(): string
    {
        return $this->sourceDirectory;
    }

    /**
     * @deprecated Will be removed in next major
     *
     * @param string $sourceDirectory
     */
    public function setSourceDirectory(string $sourceDirectory)
    {
        $this->sourceDirectory = $sourceDirectory;
    }

    /**
     * @return string
     */
    public function getPackagePath(): string
    {
        return $this->packagePath;
    }
}
