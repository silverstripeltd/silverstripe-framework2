<?php

namespace SilverStripe\Forms\Tests\CheckboxSetFieldTest;

use SilverStripe\Dev\TestOnly;
use SilverStripe\ORM\DataObject;

class Article extends DataObject implements TestOnly
{
    private static $table_name = 'CheckboxSetFieldTest_Article';

    private static $db = [
        "Content" => "Text",
    ];

    private static $many_many = [
        "Tags" => Tag::class,
    ];
}
