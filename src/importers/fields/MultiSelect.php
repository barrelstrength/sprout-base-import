<?php

namespace barrelstrength\sproutbaseimport\importers\fields;

use barrelstrength\sproutbase\app\import\base\FieldImporter;
use barrelstrength\sproutbase\SproutBaseImport;
use craft\fields\MultiSelect as MultiSelectField;

class MultiSelect extends FieldImporter
{
    /**
     * @return string
     */
    public function getModelName(): string
    {
        return MultiSelectField::class;
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function getMockData()
    {
        $settings = $this->model->settings;

        $values = [];

        if (!empty($settings['options'])) {
            $options = $settings['options'];

            $length = count($options);
            $number = random_int(1, $length);

            $randomArrayItems = SproutBaseImport::$app->fieldImporter->getRandomArrayItems($options, $number);

            $values = SproutBaseImport::$app->fieldImporter->getOptionValuesByKeys($randomArrayItems, $options);
        }

        return $values;
    }
}
