<?php

namespace GlobalPayments\Api\Entities;

use GlobalPayments\Api\Entities\Enums\DocumentCategory;
use GlobalPayments\Api\Entities\Enums\FileType;

class Document
{
    public string $id;
    public string $name;
    public string $status;
    public string $timeCreated;
    /** @var FileType  */
    public string $format;
    /** @var DocumentCategory */
    public string $category;
}