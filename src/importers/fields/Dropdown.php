<?php

namespace barrelstrength\sproutbaseimport\importers\fields;

use barrelstrength\sproutbase\app\import\base\FieldImporter;
use barrelstrength\sproutbase\SproutBaseImport;
use craft\fields\Dropdown as DropdownField;

class Dropdown extends FieldImporter
{
    /**
     * @return string
     */
    public function getModelName(): string
    {
        return DropdownField::class;
    }

    /**
     * @return mixed
     */
    public function getMockData()
    {
        $settings = $this->model->settings;

        $optionValue = '';

        if (!empty($settings['options'])) {
            $options = $settings['options'];

            $optionValue = SproutBaseImport::$app->fieldImporter->getRandomOptionValue($options);
        }

        return $optionValue;
    }
}