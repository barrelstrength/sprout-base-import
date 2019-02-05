<?php

namespace barrelstrength\sproutbaseimport\importers\fields;

use barrelstrength\sproutbase\app\import\base\FieldImporter;
use craft\fields\Url as UrlField;

class Url extends FieldImporter
{
    /**
     * @return string
     */
    public function getModelName(): string
    {
        return UrlField::class;
    }

    /**
     * @return mixed
     */
    public function getMockData()
    {
        return $this->fakerService->url;
    }
}
